@extends('layouts.main')

@section('title', 'Payment-Index')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <button id="payButton" class="btn btn-primary">Pay!</button>
            <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
</script>
<script>
    var payButton = document.getElementById('payButton')
    payButton.style.visibility = "hidden"
    payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snapToken }}', {
            // Optional
            onSuccess: function (result) {
                console.log('success')
                console.log(result)
            },
            // Optional
            onPending: function (result) {
                console.log('pending')
                console.log(result)
            },
            // Optional
            onError: function (result) {
                console.log('error')
                console.log(result)
            }
        });
    });
    payButton.click();

</script>
@endsection
