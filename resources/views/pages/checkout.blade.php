@extends('layouts.app')

@section('content')


<style>
    body {
        font-family: 'Cairo', sans-serif;
        background-color: #f8f9fa;
    }

    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .form-control {
        background-color: #f1f3f5;
        border: 1px solid #e9ecef;
    }

    .order-summary {
        background-color: #fff;
        position: sticky;
        top: 20px;
    }

    .btn-custom {
        background-color: #fff !important;
        color: #000 !important;
        border: 2px solid #000 !important;
    }

    .btn-custom:hover {
        background-color: #000 !important;
        color: #fff !important;
    }
</style>

<div class="container py-5">
    <a href="{{ route('cart.index') }}" class="btn btn-outline-dark m-3">
        ← Back to Cart
    </a>
    <div class="row">
        <div class="col-md-8">

            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf

                <div class="card p-4">
                    <div class="card-header-title">Shipping Information & Checkout</div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Aisha" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Mohamed" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Aisha.Mohamed@example.com" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Street Address</label>
                            <input type="text" name="address" class="form-control" placeholder="123 Main Street">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="Giza">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>ZIP Code</label>
                            <input type="text" name="zip" class="form-control" placeholder="10001">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Country</label>
                            <select name="country" class="form-control">
                                <option value="EG">Egypt</option>
                                <option value="US">United States</option>
                                <option value="UK">United Kingdom</option>
                                <option value="GE">Germany</option>
                                <option value="FR">France</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card p-4">
                    <div class="card-header-title">Shipping Method</div>
                    <div class="form-check border p-3 rounded mb-2">
                        <input class="form-check-input" type="radio" name="shipping_method" id="standard" checked>
                        <label class="form-check-label d-flex justify-content-between w-100" for="standard">
                            <span>Standard Shipping (5-7 business days)</span>
                            <span class="fw-bold">Free</span>
                        </label>
                    </div>
                </div>

                <div class="card p-4">
                    <div class="card-header-title">Payment Method</div>
                    <div class="mb-4">
                        <div class="form-check border p-3 rounded mb-2 bg-light">
                            <input class="form-check-input" type="radio" name="payment_method" id="card" checked>
                            <label class="form-check-label" for="card">Credit / Debit Card</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label>Card Number</label>
                            <input type="text" name="card_number" class="form-control" placeholder="1234 5678 9012 3456">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Expiry Date</label>
                            <input type="text" name="expiry" class="form-control" placeholder="MM / YY">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>CVV</label>
                            <input type="text" name="cvv" class="form-control" placeholder="123">
                        </div>
                    </div>
                </div>


            </form>
        </div>

        <div class="col-md-4">
            <div class="card order-summary">
                <div class="card-header-title">Order Summary</div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Subtotal ({{ $totalItems }} items)</span>
                    <span>${{ number_format($subtotal, 2) }}</span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Shipping</span>
                    <span class="text-success">Free</span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Tax</span>
                    <span>${{ number_format($subtotal * 0.10, 2) }}</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between fw-bold fs-4 mt-2">
                    <span>Total</span>
                    <span>${{ number_format($subtotal * 1.10, 2) }}</span>
                </div>
                <button type="submit" class=" btn-custom  mt-3">
                    Place Order
                </button>
                <p class="text-muted small mt-4 text-center">
                    Secure SSL Encrypted Checkout
                </p>
            </div>
        </div>
    </div>
</div>


@endsection