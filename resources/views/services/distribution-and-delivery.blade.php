@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Distribution & Delivery</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-4 mb-4">Distribution & Delivery</h1>
            <p class="mb-0">At Barakati Melodies, we ensure your music reaches its audience across the globe with precision and efficiency. Our distribution services maximize your global reach, delivering your work to all major platforms and digital stores. From streaming services to physical releases, we handle the logistics to connect your music with listeners everywhere.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="far fa-handshake fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Global Reach</h4>
                    <p class="mb-4">We distribute your music worldwide, ensuring it’s available on every major platform. With Barakati Melodies, your music finds its audience no matter where they are.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-dollar-sign fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Efficient Logistics</h4>
                    <p class="mb-4">We handle the complexities of distribution, from digital streaming to physical releases. Our efficient processes ensure timely delivery of your music to the right channels.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-bullseye fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Multi-Platform Support</h4>
                    <p class="mb-4">Your music is distributed across multiple platforms, ensuring maximum visibility and accessibility. From Spotify to Apple Music, we’ve got you covered.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-headphones fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Seamless Integration</h4>
                    <p class="mb-4">Our distribution services are seamlessly integrated with your existing catalog management, ensuring your music is always ready to reach new listeners.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

@include('component.faqs')

@endsection