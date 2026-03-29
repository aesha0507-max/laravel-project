<div class="col-12 col-sm-6 col-lg-3">
    <div class="card h-100 product-card border-0 shadow-sm">
   

        @if($product->badge)
            <div class="position-absolute top-0 start-0 m-2 z-1">
                @if($product->badge == 'new')
                    <span class="badge bg-primary">New</span>
                @elseif($product->badge == 'sale')
                    <span class="badge bg-danger">
                        @if($product->original_price)
                            -{{ round((($product->original_price - $product->price) / $product->original_price) * 100) }}%
                        @else
                            Sale
                        @endif
                    </span>
                @elseif($product->badge == 'bestseller')
                    <span class="badge bg-warning text-dark">Bestseller</span>
                @endif
            </div>
        @endif
        
      

        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle z-1">
            <i class="bi bi-heart"></i>
        </button>
      


        <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none">
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
        </a>
        
        



        <div class="card-body">
            <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none text-dark">
                <h6 class="card-title fw-semibold">{{ $product->name }}</h6>
            </a>
            <p class="card-text small text-muted">{{ $product->category }}</p>
            
          


            <div class="d-flex align-items-center gap-1 mb-2">
                <i class="bi bi-star-fill text-warning"></i>
                <span class="small">{{ $product->rating }}</span>
                <span class="small text-muted">({{ $product->reviews }})</span>
            </div>
            
        


            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="h5 mb-0 fw-bold">${{ number_format($product->price, 2) }}</span>
                @if($product->original_price)
                    <span class="text-muted text-decoration-line-through small">${{ number_format($product->original_price, 2) }}</span>
                @endif
            </div>
            
           
            
            
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark w-100">
                    <i class="bi bi-cart"></i> Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>