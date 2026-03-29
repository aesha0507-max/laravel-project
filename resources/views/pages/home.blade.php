@extends('layouts.app')

@section('title', 'Home - Shopify')

@section('content')

<section class="bg-dark text-white py-5"
    style="background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 100%);">

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">

                <h1 class="display-4 fw-bold mb-4">
                    Discover Your Perfect Style
                </h1>

                <p class="lead mb-4">
                    Shop the latest trends in tech, fashion, and lifestyle.
                    Premium quality, unbeatable prices.
                </p>

                <div class="d-flex gap-3">
                    <a href="{{ route('products.index') }}"
                        class="btn btn-light btn-lg">
                        Shop Now
                    </a>

                    <a href="{{ route('products.index') }}"
                        class="btn btn-outline-light btn-lg">
                        View Collections
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="py-5 border-bottom">
    <div class="container">

        <div class="row g-4 text-center">

            @php
            $features = [
            ['truck', 'Free Shipping', 'On all orders'],
            ['shield-check', 'Secure Payment', '100% secure transactions'],
            ['credit-card', 'Easy Returns', '30-day return policy'],
            ['headset', '24/7 Support', 'Dedicated customer service'],
            ];
            @endphp

            @foreach($features as $f)
            <div class="col-6 col-md-3">

                <div class="mb-3">
                    <i class="bi bi-{{ $f[0] }} fs-3"></i>
                </div>

                <h6 class="fw-semibold">{{ $f[1] }}</h6>
                <p class="text-muted small mb-0">{{ $f[2] }}</p>

            </div>
            @endforeach

        </div>

    </div>
</section>

<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold">Featured Products</h2>
                <p class="text-muted">Check out our top picks</p>
            </div>

            <a href="{{ route('products.index') }}"
                class="btn btn-outline-dark">
                View All
            </a>

        </div>

        <div class="row g-4">

            @foreach($featuredProducts as $product)

            <div class="col-md-3 col-6">

                <div class="card h-100 shadow-sm border-0">

                    <img src="{{ asset('images/' . $product->image) }}"
                        class="card-img-top"
                        style="height:200px; object-fit:cover; border-radius:12px 12px 0 0;">

                    <div class="card-body text-center">

                        <h6 class="fw-bold">
                            {{ $product->name }}
                        </h6>

                        <p class="text-danger fw-bold">
                            ${{ number_format($product->price, 2) }}
                        </p>

                        <a href="{{ route('products.show', $product->id) }}"
                            class="btn view-btn w-100">
                            View
                        </a>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="add-to-cart-btn">
                            @csrf
                            <button type="submit" class="btn btn-dark mt-2">
                                Add to Cart
                            </button>
                        </form>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section class="py-5 bg-dark">

    <div class="container text-center ">

        <h2 class="fw-bold mb-5 text-white">Shop by Category</h2>

        <div class="row g-4">
            @foreach($categories as $category)

            <div class="col-6 col-md-3">

                <div class="card h-100 border-0 shadow-sm text-center">

                    <div class="card-body">

                        <h5 class="fw-semibold">
                            {{ $category }}
                        </h5>

                        <p class="text-muted small">
                            Explore collection From The SHOPIFY
                        </p>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

@if($saleProducts->count())

<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold">Special Offers</h2>
                <p class="text-muted">Don't miss out</p>
            </div>

            <a href="{{ route('products.index') }}"
                class="btn btn-outline-dark">
                View All
            </a>

        </div>

        <div class="row g-4">

            @foreach($saleProducts as $product)

            <div class="col-md-3 col-6">

                <div class="card h-100 shadow-sm border-0">

                    <img src="{{ asset('images/' . $product->image) }}"
                        class="card-img-top"
                        style="height:200px; object-fit:cover;">

                    <div class="card-body text-center">

                        <h6>{{ $product->name }}</h6>

                        <p class="text-danger fw-bold">
                            ${{ number_format($product->price, 2) }}
                        </p>

                        <a href="{{ route('products.show', $product->id) }}"
                            class="btn btn-dark btn-sm w-100">
                            View
                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

@endif

@endsection