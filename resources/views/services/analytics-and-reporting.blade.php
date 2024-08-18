@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Analytics & Reporting</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-4 mb-4">Analytics & Reporting</h1>
            <p class="mb-0">Our Analytics & Reporting service at Barakati Melodies provides you with detailed insights into your music’s performance across platforms. We help you understand your audience, optimize your strategies, and make data-driven decisions to maximize your music’s impact.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="far fa-chart-bar fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Performance Tracking</h4>
                    <p class="mb-4">Track the performance of your music across all platforms. Our detailed analytics provide you with real-time data to understand your audience’s preferences.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-dollar-sign fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Revenue Insights</h4>
                    <p class="mb-4">Gain insights into your earnings with our revenue analytics. Understand where your income is coming from and how you can maximize your returns.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-user-check fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Audience Analysis</h4>
                    <p class="mb-4">Understand who your listeners are and what they love. Our audience analysis tools help you tailor your music and marketing strategies to better connect with your fans.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-headphones fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Comprehensive Reports</h4>
                    <p class="mb-4">Receive detailed reports on every aspect of your music’s performance. Our comprehensive reports help you make informed decisions and optimize your music’s reach and impact.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

@include('component.faqs')
    
@endsection