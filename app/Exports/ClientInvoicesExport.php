<?php

namespace App\Exports;

use App\Models\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ClientInvoicesExport implements FromView
{
    protected $clientId;

    public function __construct($clientId)
    {
        $this->clientId = $clientId;
    }

    public function view(): View
    {
        $invoices = Invoice::whereClientId($this->clientId)
            // ->where('status', '!=', Invoice::DRAFT)
            ->with('client.user', 'payments')->get();

        return view('excel.admin_invoices_excel', compact('invoices'));
    }
}

