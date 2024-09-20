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

{{-- @include('component.faqs') --}}

<!-- FAQs Start -->
<div class="container-fluid faq-section bg-light py-5">
  <div class="container py-5">
    <div class="row">
      <div class="mb-5">
        <h4 class="text-primary">Some Important FAQ's</h4>
        <h1 class="display-4 mb-0">
            Common Frequently Asked Questions
        </h1>
    </div>
      <div class="row">
        <div class="col-lg-6">
            <div class="accordion" id="accordionLeft">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button
                            class="accordion-button border-0"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne"
                        >
                            Q: How can I get started?
                        </button>
                    </h2>
                    <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionLeft"
                    >
                        <div class="accordion-body rounded">
                            A: You can fill out this form to be reviewed by our team, or you can contact us at barakatimelodies@gmail.com.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo"
                        >
                            Q: Why Barakati Melodies?
                        </button>
                    </h2>
                    <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionLeft"
                    >
                        <div class="accordion-body">
                            A: Barakati Melodies is a direct distribution platform to get your music on all major streaming services. Within 1×24 hours, your album will be delivered to stores, which is faster than any other platform in the market. You remain in control of your music. You can choose any platform you want to distribute it on.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree"
                        >
                            Q: How much does it cost to join Barakati Melodies?
                        </button>
                    </h2>
                    <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionLeft"
                    >
                        <div class="accordion-body">
                            A: There is no registration fee for the beginning, so you can rate for free. Once you upload your albums and they start generating revenue, we split the revenue 70/30 (70 for the artist) (30 for Barakati Melodies).
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFour"
                            aria-expanded="false"
                            aria-controls="collapseFour"
                        >
                            Q: What will happen if someone uses my work?
                        </button>
                    </h2>
                    <div
                        id="collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFour"
                        data-bs-parent="#accordionLeft"
                    >
                        <div class="accordion-body">
                            A: We will contact the party. The party may choose to ask you for permission or stop using your work. We will take care of all licenses, documents and legal matters.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFive"
                            aria-expanded="false"
                            aria-controls="collapseFive"
                        >
                            Q: What are the requirements for a work to be registered?
                        </button>
                    </h2>
                    <div
                        id="collapseFive"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFive"
                        data-bs-parent="#accordionLeft"
                    >
                        <div class="accordion-body">
                            A: The work must be yours and not already registered with another aggregator company. If you wish to switch to us, we will provide assistance in the switching process. For other requirements, please consult us at (+62) 82296906125.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="accordion" id="accordionRight">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseSix"
                            aria-expanded="false"
                            aria-controls="collapseSix"
                        >
                            Q: How do I move my music from another distributor to Barakati Melodies?
                        </button>
                    </h2>
                    <div
                        id="collapseSix"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingSix"
                        data-bs-parent="#accordionRight"
                    >
                        <div class="accordion-body">
                            A: Make sure to collect all metadata (WAV/MP3 files, ISRC and UPC codes, artist names and artwork), request your current distributor to take down all your music from the stores and upload all metadata into the PremierPro Platform. Contact barakatimelodies@gmail.com & we will assist in facilitating the move.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven"
                            aria-expanded="false"
                            aria-controls="collapseSeven"
                        >
                            Q: How long will this cooperation last?
                        </button>
                    </h2>
                    <div
                        id="collapseSeven"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingSeven"
                        data-bs-parent="#accordionRight"
                    >
                        <div class="accordion-body">
                            A: The period of cooperation varies depending on the agreement. But the common one is for 1 year.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseEight"
                            aria-expanded="false"
                            aria-controls="collapseEight"
                        >
                            Q: Can I stop before the time ends?
                        </button>
                    </h2>
                    <div
                        id="collapseEight"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingEight"
                        data-bs-parent="#accordionRight"
                    >
                        <div class="accordion-body">
                            A: Yes, but there are some agreements that still apply. For more information, please contact us at (+62) 82296906125.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseNine"
                            aria-expanded="false"
                            aria-controls="collapseNine"
                        >
                            Q: Where is my work distributed?
                        </button>
                    </h2>
                    <div
                        id="collapseNine"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingNine"
                        data-bs-parent="#accordionRight"
                    >
                        <div class="accordion-body">
                            A: Your work will be distributed to more than 20 platforms, including YouTube, Spotify, and Deezer.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTen"
                            aria-expanded="false"
                            aria-controls="collapseTen"
                        >
                            Q: What will happen to my work if I use protection?
                        </button>
                    </h2>
                    <div
                        id="collapseTen"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTen"
                        data-bs-parent="#accordionRight"
                    >
                        <div class="accordion-body">
                            A: Your work remains your property. We will protect your work from unauthorized use. Some of the uses we protect are: cover, remix, and reupload.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven"
                            aria-expanded="false"
                            aria-controls="collapseEleven"
                        >
                            Q: If I find out someone is using my work without permission, what can I do?
                        </button>
                    </h2>
                    <div
                        id="collapseEleven"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingEleven"
                        data-bs-parent="#accordionRight"
                    >
                        <div class="accordion-body">
                            A: You can report to us at barakatimelodies@gmail.com by providing photos, recordings, or screenshots related to it.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwelve">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve"
                            aria-expanded="false"
                            aria-controls="collapseTwelve"
                        >
                            Q: I have another question
                        </button>
                    </h2>
                    <div
                        id="collapseTwelve"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwelve"
                        data-bs-parent="#accordionRight"
                    >
                        <div class="accordion-body">
                            A: If you have any other questions, please click here or contact us via WhatsApp at (+62) 82296906125.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </div>
  
  </div>
</div>
<!-- FAQs End -->
    
@endsection
