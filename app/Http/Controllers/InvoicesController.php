<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InvoiceReceived;

class InvoicesController extends Controller
{
    public function create() 
    {
        return view('invoices.create');
    }

    public function store()
    {
        Notification::send(request()->user(), new InvoiceReceived());
    }
}
