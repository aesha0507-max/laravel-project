@extends('layouts.app')

@section('content')
<div class=" py-5 " style="background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 100%); padding: 100px 0; color: white;">
    <div class="text-center mb-5">
        <h1 class="fw-bold mb-3" style="font-size: 2.5rem;" style="background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 100%);">Contact Us</h1>
        <p class=" fs-5 text-white">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
    </div>
</div>
<div class="row g-5 py-5 my-5 container">
    <div class="col-md-5">
        <h2 class="fw-bold mb-4 ">Get in Touch</h2>
        <p class="text-muted mb-5">We're here to help and answer any questions you might have. We look forward to hearing from you!</p>

        <div class="d-flex align-items-start mb-4">
            <div class="me-3 mt-1">
                <i class="fas fa-phone-alt fs-4 text-dark"></i>
            </div>
            <div>
                <h6 class="fw-bold mb-1">Phone</h6>
                <p class="text-muted mb-0">+20 (555) 123-4567</p>
                <p class="text-muted">+20 (555) 987-6543</p>
            </div>
        </div>

        <div class="d-flex align-items-start mb-4">
            <div class="me-3 mt-1">
                <i class="fas fa-map-marker-alt fs-4 text-dark"></i>
            </div>
            <div>
                <h6 class="fw-bold mb-1">Address</h6>
                <p class="text-muted mb-0">123 Commerce Street<br>Egypt<br>Eg</p>
            </div>
        </div>

        <div class="d-flex align-items-start">
            <div class="me-3 mt-1">
                <i class="fas fa-clock fs-4 text-dark"></i>
            </div>
            <div>
                <h6 class="fw-bold mb-1">Business Hours</h6>
                <p class="text-muted mb-0">Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p class="text-muted mb-0">Saturday: 10:00 AM - 4:00 PM</p>
                <p class="text-muted">Sunday: Closed</p>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card border-0 shadow-sm p-4" style="border-radius: 15px; background-color: #fcfcfc;">
            <h3 class="fw-bold mb-4">Send us a Message</h3>

            <form action="#" method="POST">
                @csrf

                <div class="row">

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-semibold text-secondary small">Full Name *</label>
                        <input type="text" class="form-control py-2" placeholder="Aisha Mohamed" required>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label fw-semibold text-secondary small">Email Address *</label>
                        <input type="email" class="form-control py-2" placeholder="Aisha@example.com" required>
                    </div>

                     <div class="col-12 col-md-6 mb-3">
            <label class="form-label fw-semibold text-secondary small">Phone Number</label>
            <input type="text" name="phone" class="form-control py-2" placeholder="+20 123 456 789">
        </div>

        <div class="col-12 col-md-6 mb-3">
            <label class="form-label fw-semibold text-secondary small">How can we help? *</label>
            <input type="text" name="subject" class="form-control py-2" placeholder="e.g. Order issue, support..." required>
        </div>

                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold text-secondary small">Message *</label>
                    <textarea class="form-control py-2" rows="5" placeholder="Tell us about your inquiry..." required></textarea>
                </div>

                <button type="submit" class="btn btn-dark w-100 py-3 fw-bold">
                    SEND MESSAGE
                </button>

            </form>
        </div>
    </div>
</div>


<div class="bg-light py-5 border-top">
    <div class="container text-center py-4">

        <h4 class="fw-bold mb-3">Newsletter</h4>
        <p class="text-muted mb-4">Subscribe to get special offers and updates.</p>

        <form class="row g-2 justify-content-center">

            <div class="col-12 col-md-6 col-lg-4">
                <input type="email" class="form-control p-3" placeholder="Your email" required>
            </div>

            <div class="col-12 col-md-3 col-lg-2">
                <button class="btn btn-dark w-100 p-3" type="submit">
                    Subscribe
                </button>
            </div>

        </form>

    </div>
</div>
@endsection