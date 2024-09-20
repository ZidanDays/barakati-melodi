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
