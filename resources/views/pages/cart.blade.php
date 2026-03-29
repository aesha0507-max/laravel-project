@extends('layouts.app')

@section('content')

<style>
.card {
    border-radius: 12px;
}

.qty-box button {
    border-radius: 8px;
}

.summary-card {
    border-radius: 12px;
}
</style>

<div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Shopping Cart</h3>

        <a href="{{ route('products.index') }}" class="btn btn-outline-dark">
            ← Continue Shopping
        </a>
    </div>

    <div class="row">

        <div class="col-lg-8">

            @forelse($cart as $id => $item)

            <div class="card mb-3 p-3 shadow-sm">

                <div class="d-flex align-items-center justify-content-between">

                    <div class="d-flex align-items-center gap-3">

                        <img src="{{ asset('images/' . $item['image']) }}"
                            width="80"
                            class="rounded">

                        <div>
                            <h6 class="fw-semibold">{{ $item['name'] }}</h6>
                            <p class="text-muted mb-0">${{ $item['price'] }}</p>
                        </div>

                    </div>

                    <form action="{{ route('cart.update', $id) }}" method="POST" class="d-flex align-items-center qty-box">
                        @csrf

                        <button name="quantity" value="{{ $item['quantity'] - 1 }}"
                            class="btn btn-outline-dark">-</button>

                        <input type="text"
                            value="{{ $item['quantity'] }}"
                            class="form-control text-center mx-2"
                            style="width: 60px;"
                            readonly>

                        <button name="quantity" value="{{ $item['quantity'] + 1 }}"
                            class="btn btn-outline-dark">+</button>
                    </form>

                    <strong>
                        ${{ $item['price'] * $item['quantity'] }}
                    </strong>

      
                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">✕</button>
                    </form>

                </div>

            </div>

            @empty
            <p class="text-center">Cart is empty</p>
            @endforelse

        </div>


        <div class="col-lg-4">

            <div class="card p-4 shadow-sm summary-card">

                <h5 class="fw-bold mb-3">Summary</h5>

                @php
                $total = 0;
                foreach($cart as $item){
                    $total += $item['price'] * $item['quantity'];
                }
                @endphp

                <div class="d-flex justify-content-between">
                    <span>Subtotal</span>
                    <span>${{ $total }}</span>
                </div>

                <div class="d-flex justify-content-between">
                    <span>Shipping</span>
                    <span>Free</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between fw-bold">
                    <span>Total</span>
                    <span>${{ $total }}</span>
                </div>

                <a href="{{ route('checkout') }}" class="btn btn-dark w-100 mt-3">
                    Proceed to Checkout
                </a>

            </div>

        </div>

    </div>

</div>

@endsection