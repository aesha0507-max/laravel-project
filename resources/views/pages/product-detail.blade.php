@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="mb-4">
<a href="{{ route('products.index') }}" class="btn back-btn btn-dark">
    ← Back to Shop
</a>
</div>
    <div class="row g-4">

        <div class="col-md-6">
            <div class="border rounded p-3 text-center">

                <img src="{{ asset('images/' . $product->image) }}"
                    class="img-fluid"
                    style="max-height: 450px; object-fit: contain;">

            </div>
        </div>

        <div class="col-md-6">

            <h2 class="fw-bold">{{ $product->name }}</h2>

            <h4 class="text-danger mt-3">
                ${{ $product->price }}
            </h4>

            <p>{{ $product->description ?? 'No description yet' }}</p>

            @if($product->details)
            <p>{{ $product->details }}</p>
            @endif

            <p>{{ $product->details }}</p>

            <h5>Features</h5>
            <ul>
                <li>High Quality</li>
                <li>Premium Material</li>
                <li>Best Performance</li>
            </ul>

            <form method="POST" action="{{ route('cart.add', $product->id) }}" class="mt-4">
                @csrf

                <input type="hidden" name="quantity" id="hiddenQty" value="1">

                <button class="btn btn-dark w-100 py-2">
                    Add to Cart
                </button>
            </form>

        </div>

    </div>

    <div class="mt-5">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#desc">
                    Description
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#rev">
                    Reviews
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#ship">
                    Shipping
                </a>
            </li>
        </ul>

        <div class="tab-content p-4 border border-top-0">

            <div class="tab-pane fade show active" id="desc">
                <p>{{ $product->description ?? 'No description yet' }}</p>

                @if($product->details)
                <p>{{ $product->details }}</p>
                @endif
            </div>

            <div class="tab-pane fade" id="rev">
                No reviews yet
            </div>

            <div class="tab-pane fade" id="ship">
                Free shipping available 🚚
            </div>

        </div>

    </div>

    <div class="mt-5">

        <h4 class="mb-3">Related Products</h4>

        <div class="row g-3">

            @foreach($relatedProducts as $item)

            <div class="col-md-3 col-6">

                <div class="card border-0 shadow-sm h-100">

                    <img src="{{ asset('images/' . $item->image) }}"
                        class="card-img-top"
                        style="height: 180px; object-fit: cover;">

                    <div class="card-body text-center">

                        <h6 class="fw-bold">
                            {{ $item->name }}
                        </h6>

                        <p class="text-danger">
                            ${{ $item->price }}
                        </p>

                        <a href="{{ route('products.show', $item->id) }}"
                            class="btn btn-dark w-100 py-2 fw-bold view-btn">

                            View Product

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</div>

@endsection