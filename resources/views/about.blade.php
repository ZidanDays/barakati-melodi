@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">About Us</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- About Us Start -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow animate__animated animate__fadeIn" style="max-width: 800px;">
            <h4 class="text-primary">Who We Are</h4>
            <h1 class="display-4 mb-4" style="color: #333;">Barakati Melodies</h1>
            <p class="mb-0" style="color: #555;">
                Barakati Melodies is a pioneering music aggregator dedicated to preserving and promoting the vibrant cultural heritage of Indonesian music. We work tirelessly to protect the rights of artists and songwriters, ensuring their creations reach audiences around the world. With our extensive expertise and commitment to excellence, we offer a full suite of services to support artists in every stage of their musical journey.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                <div class="feature-box p-4 text-center bg-white shadow-lg rounded h-100" style="transition: transform 0.3s ease;">
                    <div class="feature-icon mb-4" style="transition: transform 0.3s ease;">
                        <i class="fas fa-music fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3" style="color: #333;">Catalog Management</h4>
                    <p class="mb-0" style="color: #777;">
                        At Barakati Melodies, our catalog management system provides comprehensive control and organization over your music collection.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                <div class="feature-box p-4 text-center bg-white shadow-lg rounded h-100" style="transition: transform 0.3s ease;">
                    <div class="feature-icon mb-4" style="transition: transform 0.3s ease;">
                        <i class="fas fa-globe fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3" style="color: #333;">Global Distribution</h4>
                    <p class="mb-0" style="color: #777;">
                        Our Distribution and Delivery services are designed to maximize the global reach of your music, ensuring that your work is available on all major platforms and digital stores.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow animate__animated animate__zoomIn" data-wow-delay="0.6s">
                <div class="feature-box p-4 text-center bg-white shadow-lg rounded h-100" style="transition: transform 0.3s ease;">
                    <div class="feature-icon mb-4" style="transition: transform 0.3s ease;">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3" style="color: #333;">Analytics & Reporting</h4>
                    <p class="mb-0" style="color: #777;">
                        Our Analytics & Reporting service at Barakati Melodies provides you with detailed insights into your music’s performance across platforms.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow animate__animated animate__zoomIn" data-wow-delay="0.8s">
                <div class="feature-box p-4 text-center bg-white shadow-lg rounded h-100" style="transition: transform 0.3s ease;">
                    <div class="feature-icon mb-4" style="transition: transform 0.3s ease;">
                        <i class="fas fa-headphones fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3" style="color: #333;">Artist Support</h4>
                    <p class="mb-0" style="color: #777;">
                        Our Artist Support services are tailored to provide you with the resources, guidance, and expertise needed to navigate the complex music industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

@include('component.faqs')
    
@endsection
