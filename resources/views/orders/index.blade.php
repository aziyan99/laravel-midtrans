@extends('layouts.main')

@section('title', 'Payment-Index')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-header">
                    Bill Summary
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-stripped table-hover">
                            <thead>
                                <tr>
                                    <th>Invoice Number</th>
                                    <th>Total Price</th>
                                    <th>Process?</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->number }}</td>
                                    <td>Rp. {{ number_format($order->total_price, 2, ",", ".") }}</td>
                                    <td>
                                        @if ($order->payment_status != 2)
                                        <a href="{{ route('orders.show', $order) }}" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                                <path
                                                    d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                            </svg>
                                            Process
                                        </a>
                                        @else
                                        <i>Payment success</i>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
