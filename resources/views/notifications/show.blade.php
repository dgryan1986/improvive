@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-5 pb-2">Notifications<span class="float-right badge badge-pill badge-secondary">Team</span></h1>
        <div class="card">
            <div class="card-header font-weight-bold"><i class="far fa-bell"></i>
                    <span class="badge badge-warning badge-pill float-right">
                        0
                    </span> 
                {{-- <button class="btn btn-outline-primary btn-sm float-right">
                    Something
                </button> --}}
            </div>
        <div class="card-body clearfix">
            <ul class="list-group">
                @forelse ($notifications as $notification) 
                    <li class="list-group-item justify-content-center">
                        @if ($notification->type === 'App\Notifications\PaymentReceived')
                            Your payment of ${{ $notification->data['amount'] / 100 }} has been received!
                        @endif
                    <button class="btn btn-outline-danger btn-sm float-right ml-1">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                </li>
                @empty
                <li class="list-group-item justify-content-center font-weight-bold">
                    You have no unread notifications!
                </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>      
@endsection