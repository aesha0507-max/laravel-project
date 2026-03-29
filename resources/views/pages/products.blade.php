@extends('layouts.app')

@section('content')

<div class="container-fluid my-5">
    <div class="row">

        <div class="col-lg-3 col-md-4">
            <div class="filters-box p-3 border rounded bg-white shadow-sm">

                <h4 class="fw-bold mb-4">Types</h4>

                <h6 class="fw-semibold">Category</h6>

                <ul class="category-list list-unstyled">
                    <li class="active text-center">All The Products</li>
                    <li>Wearables</li>
                    <li>Fashion</li>
                    <li>Makeup</li>
                    <li>Skincare</li>
                    <li>Computers</li>
                    <li>Mobile</li>
                </ul>

                <hr>
            </div>
        </div>

        <div class="col-lg-9 col-md-8">

            <div class="row g-4">

                @forelse($products as $product)

                <div class="col-lg-4 col-md-6 col-12">

                    <div class="card product-card h-100 border-0 shadow-sm">

                        <div class="product-image">
                            <img src="{{ asset('images/' . $product->image) }}" class="w-100">
                        </div>

                        <div class="card-body text-center d-flex flex-column justify-content-between">

                            <div>
                                <h6 class="fw-semibold mb-2">
                                    {{ $product->name }}
                                </h6>

                                <p class="price text-danger mb-3">
                                    ${{ $product->price }}
                                </p>
                            </div>

                            <div class="mt-auto">
                                <a href="{{ route('products.show', $product->id) }}"
                                   class="btn view-btn w-100 mb-2">
                                    View
                                </a>

                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-dark w-100">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

                @empty

                <p class="text-center">No products found</p>

                @endforelse

            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>

        </div>

    </div>
</div>

@endsection