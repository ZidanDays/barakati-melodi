@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Helpdesk</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Helpdesk</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Artist Name Formatting Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
      <div class="text-center mx-auto pb-5 wow slideInUp" data-wow-delay="0.2s" style="max-width: 800px;">
        <h4 class="text-info">Artist Name Formatting</h4>
        <h1 class="display-5 mb-4 text-primary">Format and Spelling of Artist Names</h1>
        <p class="lead">
          Ensuring consistent and accurate representation of artist names across all releases and databases is crucial. Follow these guidelines to properly format and spell artist names.
        </p>
      </div>
      <div class="row g-4 justify-content-center">
        <!-- Personal Name -->
        <div class="col-md-4 col-lg-4 wow zoomIn" data-wow-delay="0.3s">
          <div class="service-item border rounded shadow-sm p-3">
            <div class="service-img position-relative">
              <img src="img/content/personal-name2.svg" class="img-fluid rounded-top w-100" alt="Personal Name" />
              <div class="service-icon position-absolute top-0 end-0 p-3 bg-info text-white rounded-circle shadow">
                <i class="fa fa-user fa-2x"></i>
              </div>
            </div>
            <div class="service-content p-4">
              <h4 class="mb-3">Personal Name</h4>
              <p>Artists using their real names should have their names listed in the correct order according to language rules (e.g., First_Last in Indonesian).</p>
            </div>
          </div>
        </div>
        <!-- Stage Name -->
        <div class="col-md-4 col-lg-4 wow zoomIn" data-wow-delay="0.5s">
          <div class="service-item border rounded shadow-sm p-3">
            <div class="service-img position-relative">
              <img src="img/content/stage-name.svg" class="img-fluid rounded-top w-100" alt="Stage Name" />
              <div class="service-icon position-absolute top-0 end-0 p-3 bg-info text-white rounded-circle shadow">
                <i class="fa fa-microphone fa-2x"></i>
              </div>
            </div>
            <div class="service-content p-4">
              <h4 class="mb-3">Stage Name/Pseudonym</h4>
              <p>There are no limits on artist stage names; they must be listed as specified by the artist, provided they comply with current rules.</p>
            </div>
          </div>
        </div>
        <!-- Band Name -->
        <div class="col-md-4 col-lg-4 wow zoomIn" data-wow-delay="0.7s">
          <div class="service-item border rounded shadow-sm p-3">
            <div class="service-img position-relative">
              <img src="img/content/band.svg" class="img-fluid rounded-top w-100" alt="Band Name" />
              <div class="service-icon position-absolute top-0 end-0 p-3 bg-info text-white rounded-circle shadow">
                <i class="fa fa-users fa-2x"></i>
              </div>
            </div>
            <div class="service-content p-4">
              <h4 class="mb-3">Band/Collective</h4>
              <p>Only the band/collective name should be listed in the artist column. Do not list all members in the main artist section.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Artist Name Formatting End -->
  
  
  
  
  <!-- Composer or Songwriter Name Start -->
  <div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px">
            <h4 class="text-primary">Composer or Songwriter Name</h4>
            <h1 class="display-4 mb-4">Important Guidelines for Naming</h1>
            <p class="mb-0">
                Spotify has implemented new rules where the name of the Composer or Songwriter must include both a first and last name as per the official identity. To avoid your release being rejected or not appearing on Spotify, you must comply with these new rules.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-8">
                <div class="service-item">
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <h4 class="mb-4">Example of Composer/Songwriter Name Formatting</h4>
                            <p class="mb-4">
                                The name must include at least two words. If your name consists of only one word, you can repeat the name. For example:
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-primary me-2"></i>Joko Widodo</li>
                                <li><i class="fa fa-check text-primary me-2"></i>Widodo Widodo</li>
                            </ul>
                            <p class="mb-0">
                                Ensure that the name follows this format to meet Spotify's requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Composer or Songwriter Name End -->
  
  
  <!-- Artwork or Cover Start -->
  <div class="container-fluid py-5 bg-dark text-white">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-secondary">Artwork or Cover</h4>
            <h1 class="display-5 mb-4 text-warning">Important Guidelines for Artwork or Cover</h1>
            <p class="mb-0">
                Ensure your cover is square-shaped, less than 10 MB in size, with a minimum resolution of 1400 x 1400px (3000 x 3000px recommended for best results).
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="p-4 border border-light rounded bg-secondary">
                    <h4 class="mb-4">Your Artwork/Cover Must Not Include:</h4>
                    <ul class="list-unstyled">
                        <li class="animated-item-alt"><i class="fa fa-times-circle text-danger me-2"></i>Any text other than the release title and/or artist name</li>
                        <li class="animated-item-alt"><i class="fa fa-times-circle text-danger me-2"></i>Web URLs, social media handles/icons, or contact information</li>
                        <li class="animated-item-alt"><i class="fa fa-times-circle text-danger me-2"></i>Images containing sexual content</li>
                        <li class="animated-item-alt"><i class="fa fa-times-circle text-danger me-2"></i>Third-party logos or trademarks without written permission from the trademark holder</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Artwork or Cover End -->

@include('component.faqs')
    
@endsection
