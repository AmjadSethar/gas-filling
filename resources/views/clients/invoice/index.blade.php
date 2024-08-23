<div class="row">
    <div class="col-lg-12">
        <div class="my-3 my-sm-3">
            <a href="{{ route('admin.invoicesExcelCustomer', $client->id) }}" type="button" class="btn btn-outline-success me-2" data-turbo="false">
                <i class="fas fa-file-excel me-1"></i> {{ __('messages.invoice.excel_export') }}
            </a>
        </div>
        <livewire:client-detail-invoice-table clientId="{{ $client->id }}" />
    </div>
</div>
