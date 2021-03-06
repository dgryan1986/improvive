<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentReceived;

class PaymentsController extends Controller
{
    public function create() 
    {
        return view('payments.create');
    }

    public function store()
    {
        Notification::send(request()->user(), new PaymentReceived(900));
    }
}
