@extends('layouts.app')

@section('content')
<section class="about-hero text-center" style="background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 100%); padding: 100px 0; color: white;">
    <div class="container">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead">We build high-quality products with passion and care.</p>
    </div>
</section>

<section class="section-padding bg-white" style="padding: 80px 0;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Our Story</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-muted fs-5">
                    Our story started with a passion for creating a better shopping experience.
                    We built this platform to provide high-quality products, excellent service, and a smooth user experience for everyone.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" style="padding: 80px 0; background-color: #f8f9fa;">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Our Values</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-box shadow-sm p-4 bg-white" style="border-radius: 15px; transition: 0.3s;">
                    <h3 class="fw-bold">Quality</h3>
                    <p class="text-muted">We ensure the highest quality in every product.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box shadow-sm p-4 bg-white" style="border-radius: 15px; transition: 0.3s;">
                    <h3 class="fw-bold">Trust</h3>
                    <p class="text-muted">We build trust with our customers through honesty.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box shadow-sm p-4 bg-white" style="border-radius: 15px; transition: 0.3s;">
                    <h3 class="fw-bold">Innovation</h3>
                    <p class="text-muted">We always bring new and creative ideas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-footer text-center" style="background: #111; color: white; padding: 80px 0;">
    <div class="container">
        <h2 class="fw-bold">We are here for you</h2>
        <p class="text-secondary">Our mission is to give you the best shopping experience.</p>
    </div>
</section>
@endsection