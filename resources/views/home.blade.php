@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Your Health, Our Priority</h1>
            <p class="lead">Compassionate care for families of all ages.</p>
            <a href="#" class="btn btn-primary">Schedule Appointment</a>
        </div>
    </section>

    <!-- About Preview -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <p>We are a dedicated team of healthcare professionals providing personalized and preventive primary care. Our
                clinic is committed to improving the well-being of every patient we serve.</p>
            <a href="#" class="btn btn-outline-primary">Learn More</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="row">
               
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Annual Physicals</h5>
                                <p class="card-text">Quality, compassionate care from trained professionals.</p>
                            </div>
                        </div>
                    </div>
              
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> info@primarycare.com</p>
            <p><strong>Address:</strong> 123 Health Street, Wellness City, Country</p>
        </div>
    </section>
@endsection
