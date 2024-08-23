document.addEventListener("turbo:load", loadInvoice);

function loadInvoice() {
    initializeSelect2Invoice();

    // let uri = window.location.toString()
    // if (uri.indexOf('?') > 0) {
    //     let clean_uri = uri.substring(0, uri.indexOf('?'))
    //     window.history.replaceState({}, document.title, clean_uri)
    // }
}

function initializeSelect2Invoice() {
    if (!select2NotExists("#status_filter")) {
        return false;
    }
    removeSelect2Container(["#status_filter"]);

    $("#status_filter").select2({
        placeholder: "All",
    });

    if ($("#status").val() == "") {
        $("#status_filter").val(5).trigger("change");
    }
}

listenClick(".invoice-delete-btn", function (event) {
    event.preventDefault();
    let id = $(event.currentTarget).attr("data-id");
    deleteItem(
        route("invoices.destroy", id),
        Lang.get("messages.invoice.invoice")
    );
});

listenClick("#resetInvoiceFilter", function () {
    $("#invoiceStatus").val(7).trigger("change");
    $("#recurringStatus").val("").trigger("change");
    hideDropdownManually($("#invoiceFilterBtn"), $(".dropdown-menu"));
});

listenClick(".reminder-btn", function (e) {
    e.preventDefault();
    let invoiceId = $(this).data("id");
    $.ajax({
        type: "POST",
        url: route("invoice.payment-reminder", invoiceId),
        beforeSend: function () {
            screenLock();
            startLoader();
        },
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
            }
        },
        error: function (result) {
            displayErrorMessage(result.message);
        },
        complete: function () {
            stopLoader();
            screenUnLock();
        },
    });
});

listenClick(".update-recurring", function (e) {
    e.preventDefault();
    let invoiceId = $(this).data("id");
    $.ajax({
        type: "POST",
        url: route("invoices.update-recurring", invoiceId),
        beforeSend: function () {
            screenLock();
            startLoader();
        },
        success: function (result) {
            if (result.success) {
                displaySuccessMessage(result.message);
                livewire.emit("refreshDatatable");
                livewire.emit("resetPageTable");
            }
        },
        error: function (result) {
            displayErrorMessage(result.message);
        },
        complete: function () {
            stopLoader();
            screenUnLock();
        },
    });
});

listenChange("#invoiceStatus", function () {
    window.livewire.emit("changeInvoiceStatusFilter", $(this).val());
    window.livewire.emit(
        "changeRecurringStatusFilter",
        $("#recurringStatus").val()
    );
});

listenChange("#recurringStatus", function () {
    window.livewire.emit("changeRecurringStatusFilter", $(this).val());
    window.livewire.emit(
        "changeInvoiceStatusFilter",
        $("#invoiceStatus").val()
    );
});
