@extends('layouts.main')

@section('container')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Catalog Management</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-4 mb-4">Streamlined Catalog Management for Your Music</h1>
            <p class="mb-0">At Barakati Melodies, our Catalog Management service is designed to give you complete control over your music collection. From tracking performance and rights to overseeing global distribution, we ensure your work is organized and optimized for maximum reach and revenue. Our platform provides real-time insights and easy management tools, so you can focus on creating while we handle the details.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-music fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Comprehensive Catalog Control</h4>
                    <p class="mb-4">Our Catalog Management system allows you to manage every piece of your music, from individual tracks to complete albums. We ensure all your work is meticulously documented and organized, giving you the flexibility to update, track, and optimize your catalog with ease.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-chart-line fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Performance Tracking</h4>
                    <p class="mb-4">Our tools provide detailed insights into how and where your music is being used. Track performance metrics, monitor streaming data, and understand the impact of your work across various platforms to make informed decisions and strategize effectively.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-globe fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Global Distribution</h4>
                    <p class="mb-4">We handle the logistics of distributing your music worldwide, ensuring it reaches all major platforms and digital stores. Our global network guarantees that your music is available to a broad audience, helping you maximize your reach and impact.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-tools fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Easy Management Tools</h4>
                    <p class="mb-4">Our platform offers user-friendly tools that simplify the management of your catalog. Easily update, monitor, and optimize your music collection with intuitive features designed to streamline your workflow and enhance your efficiency.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

@include('component.faqs')

@endsection