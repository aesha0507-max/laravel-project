
<footer class="bg-light border-top mt-5">
    <div class="container py-5">
        <div class="row">
           
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3">SHOPIFY</h5>
                <p class="text-muted small">Your one-stop shop for premium products. Quality guaranteed.</p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-muted"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-muted"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-muted"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-muted"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            
           
            <div class="col-md-3 mb-4">
                <h6 class="fw-semibold mb-3">Shop</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('products.index') }}" class="text-muted text-decoration-none small">All Products</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-muted text-decoration-none small">New Arrivals</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-muted text-decoration-none small">Best Sellers</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-muted text-decoration-none small">Sale</a></li>
                </ul>
            </div>
            
            
            <div class="col-md-3 mb-4">
                <h6 class="fw-semibold mb-3">Customer Service</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('contact') }}" class="text-muted text-decoration-none small">Contact Us</a></li>
                    <li><a href="{{ route('about') }}" class="text-muted text-decoration-none small">About Us</a></li>
                    <li><a href="#" class="text-muted text-decoration-none small">Shipping Info</a></li>
                    <li><a href="#" class="text-muted text-decoration-none small">Returns</a></li>
                    <li><a href="#" class="text-muted text-decoration-none small">FAQ</a></li>
                </ul>
            </div>
            
           
            <div class="col-md-3 mb-4">
                <h6 class="fw-semibold mb-3">Newsletter</h6>
                <p class="text-muted small mb-3">Subscribe to get special offers and updates.</p>
               <form class="row g-2">

    <div class="col-12 col-md-8">
        <input 
            type="email" 
            class="form-control form-control-sm" 
            placeholder="Your email"
            required
        >
    </div>

    <div class="col-12 col-md-4">
        <button type="submit" class="btn btn-dark w-100 btn-sm">
            Subscribe
        </button>
    </div>

</form>
            </div>
        </div>
        
        <hr>
        
        <div class="text-center text-muted small">
            <p>&copy; 2026 Shopify. All rights reserved.</p>
        </div>
    </div>
</footer>