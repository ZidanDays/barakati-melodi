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
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Who We Are</h4>
            <h1 class="display-4 mb-4">Barakati Melodies</h1>
            <p class="mb-0">
                Barakati Melodies is a pioneering music aggregator dedicated to preserving and promoting the vibrant cultural heritage of Indonesian music. We work tirelessly to protect the rights of artists and songwriters, ensuring their creations reach audiences around the world. With our extensive expertise and commitment to excellence, we offer a full suite of services to support artists in every stage of their musical journey.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-box p-4 text-center bg-white shadow-sm h-100">
                    <div class="feature-icon mb-4">
                        <i class="fas fa-music fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Catalog Management</h4>
                    <p class="mb-0">
                        At Barakati Melodies, our catalog management system provides comprehensive control and organization over your music collection. We ensure that every piece of your work, from individual tracks to complete albums, is meticulously documented and managed. Our system allows you to track the performance, rights, and distribution of each song, giving you real-time insights into where and how your music is being used globally. With our robust catalog management, you can easily update, monitor, and optimize your music catalog, ensuring that your work is always in the best position to reach its audience and generate revenue.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-box p-4 text-center bg-white shadow-sm h-100">
                    <div class="feature-icon mb-4">
                        <i class="fas fa-globe fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Global Distribution</h4>
                    <p class="mb-0">
                        At Barakati Melodies, we take pride in ensuring that your music reaches audiences worldwide with precision and efficiency. Our Distribution and Delivery services are designed to maximize the global reach of your music, ensuring that your work is available on all major platforms and digital stores. We handle the complex logistics of distributing your tracks, albums, and compilations, guaranteeing that they are delivered to the right channels at the right time. From digital streaming services to physical releases, our goal is to provide seamless and effective distribution, so your music can connect with listeners everywhere. With Barakati Melodies, your music is in trusted hands, ready to make an impact on the global stage.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-box p-4 text-center bg-white shadow-sm h-100">
                    <div class="feature-icon mb-4">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Analytics & Reporting</h4>
                    <p class="mb-0">
                        Our Analytics & Reporting service at Barakati Melodies provides you with detailed insights into your music’s performance across platforms. We help you understand your audience, optimize your strategies, and make data-driven decisions to maximize your music’s impact. With real-time analytics, you can track your music’s reach, identify trends, and refine your approach to ensure continued success in a dynamic market.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-box p-4 text-center bg-white shadow-sm h-100">
                    <div class="feature-icon mb-4">
                        <i class="fas fa-headphones fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Artist Support</h4>
                    <p class="mb-0">
                        At Barakati Melodies, we believe in empowering artists to thrive in their creative pursuits. Our Artist Support services are tailored to provide you with the resources, guidance, and expertise needed to navigate the complex music industry. Whether it’s strategic advice, marketing support, or connecting you with industry professionals, we are here to help you grow your career and reach new heights. Our commitment to artist success is at the heart of everything we do.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

@include('component.faqs')
    
@endsection
