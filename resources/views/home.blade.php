@extends('layouts.main')

@section('container')
        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item bg-primary">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                      <div class="text-sm-center text-md-start">
                        <h4 class="text-white text-uppercase fw-bold mb-4">
                          Welcome Barakati Melodies
                        </h4>
                        <h1 class="display-1 text-white mb-4">
                          The most interactive Music Agregator
                        </h1>
                        <p class="mb-5 fs-5">
                          release your music Spotify, Apple Music, TikTok Music,
                          Youtube Music, Facebook, Instagram, and Other Digital Music
                          Platforms Worldwide
                        </p>
                        <div
                          class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4"
                        >
                          {{-- <a
                            class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                            href="#"
                            ><i class="fas fa-play-circle me-2"></i> Watch Video</a
                          > --}}
<a
  class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2"
  href="https://wa.me/6282296906125"
  target="_blank"
>
  <i class="fab fa-whatsapp me-2"></i> Contact Me
</a>

                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                      <div class="calrousel-img" style="object-fit: cover">
                        <img
                          src="img/carousel-2.png"
                          class="img-fluid w-100"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-carousel-item bg-primary">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                    <div class="col-lg-5 animated fadeInLeft">
                      <div class="calrousel-img">
                        <img
                          src="img/carousel-2.png"
                          class="img-fluid w-100"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg-7 animated fadeInRight">
                      <div class="text-sm-center text-md-end">
                        <h4 class="text-white text-uppercase fw-bold mb-4">
                          Welcome Barakati Melodies
                        </h4>
                        <h1 class="display-1 text-white mb-4">
                          The most interactive Music Agregator
                        </h1>
                        <p class="mb-5 fs-5">
                          release your music Spotify, Apple Music, TikTok Music,
                          Youtube Music, Facebook, Instagram, and Other Digital Music
                          Platforms Worldwide
                        </p>
                        <div
                          class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4"
                        >
                          {{-- <a
                            class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                            href="#"
                            ><i class="fas fa-play-circle me-2"></i> Watch Video</a
                          > --}}
<a
  class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2"
  href="https://wa.me/6282296906125"
  target="_blank"
>
  <i class="fab fa-whatsapp me-2"></i> Contact Me
</a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carousel End -->
      
          <!-- Feature Start -->
          <!-- <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
              <div
                class="text-center mx-auto pb-5 wow fadeInUp"
                data-wow-delay="0.2s"
                style="max-width: 800px"
              >
                <h4 class="text-primary">Our Features</h4>
                <h1 class="display-4 mb-4">Insurance Provide you a Better Future</h1>
                <p class="mb-0">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
                  adipisci facilis cupiditate recusandae aperiam temporibus corporis
                  itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
                  obcaecati, ipsam mollitia hic.
                </p>
              </div>
              <div class="row g-4">
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                      <i class="far fa-handshake fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Trusted Company</h4>
                    <p class="mb-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
                      laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#"
                      >Learn More</a
                    >
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.4s"
                >
                  <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                      <i class="fa fa-dollar-sign fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Anytime Money Back</h4>
                    <p class="mb-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
                      laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#"
                      >Learn More</a
                    >
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.6s"
                >
                  <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                      <i class="fa fa-bullseye fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Flexible Plans</h4>
                    <p class="mb-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
                      laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#"
                      >Learn More</a
                    >
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.8s"
                >
                  <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                      <i class="fa fa-headphones fa-3x"></i>
                    </div>
                    <h4 class="mb-4">24/7 Fast Support</h4>
                    <p class="mb-4">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic
                      laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#"
                      >Learn More</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Feature End -->
      
          <!-- About Start -->
          <div class="container-fluid bg-light about pb-5">
            <div class="container pb-5">
              <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary">Barakati Melodies</h4>
                    <h1 class="display-4 mb-4">About Our Company</h1>
                    <p>
                      Based in the state of Southeast Sulawesi, Indonesia.we focus on
                      providing our services to the Latin community, being a 100%
                      Indonesian company focused on the development of our artists,
                      showing a considerable increase in audience and reproduction of
                      new artists becoming artists. who are relevant to the genre, as
                      well as artists who are relevant to being established artists.
                    </p>
                    <!-- <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                      praesentium recusandae eligendi modi hic
                    </p>
                    <p class="text-dark">
                      <i class="fa fa-check text-primary me-3"></i>We can save your
                      money.
                    </p>
                    <p class="text-dark">
                      <i class="fa fa-check text-primary me-3"></i>Production or
                      trading of good
                    </p>
                    <p class="text-dark mb-4">
                      <i class="fa fa-check text-primary me-3"></i>Our life insurance
                      is flexible
                    </p> -->
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#"
                      >More Information</a
                    >
                  </div>
                </div>
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary">Barakati Melodies</h4>
                    <h1 class="display-4 mb-4">About Vision</h1>
                    {{-- <p>
                      To become a music distribution company at the forefront of music technology 
                      and marketing to provide increasingly better services to our clients.
                    </p> --}}
                    <p>
                        At Barakati Melodies, our vision is to be at the cutting edge of music distribution and technology. We strive to revolutionize the music industry by integrating advanced technological solutions and innovative marketing strategies. Our goal is to enhance the visibility and reach of our clients' music, ensuring that they receive the best possible exposure and opportunities in the digital landscape. We are dedicated to continuously improving our services, adopting new technologies, and adapting to the ever-evolving music market. By focusing on excellence and innovation, we aim to set new standards in the industry and provide unparalleled support to our artists and partners.
                      </p>
                    
                    <!-- <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                      praesentium recusandae eligendi modi hic
                    </p> -->
                    <!-- <p class="text-dark">
                      <i class="fa fa-check text-primary me-3"></i>We can save your
                      money.
                    </p>
                    <p class="text-dark">
                      <i class="fa fa-check text-primary me-3"></i>Production or
                      trading of good
                    </p>
                    <p class="text-dark mb-4">
                      <i class="fa fa-check text-primary me-3"></i>Our life insurance
                      is flexible
                    </p> -->
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#"
                      >More Information</a
                    >
                  </div>
                </div>
                <!-- <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                  <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                      <div class="col-12">
                        <div class="rounded bg-light">
                          <img
                            src="img/about-1.png"
                            class="img-fluid rounded w-100"
                            alt=""
                          />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="counter-item bg-light rounded p-3 h-100">
                          <div class="counter-counting">
                            <span
                              class="text-primary fs-2 fw-bold"
                              data-toggle="counter-up"
                              >129</span
                            >
                            <span class="h1 fw-bold text-primary">+</span>
                          </div>
                          <h4 class="mb-0 text-dark">Insurance Policies</h4>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="counter-item bg-light rounded p-3 h-100">
                          <div class="counter-counting">
                            <span
                              class="text-primary fs-2 fw-bold"
                              data-toggle="counter-up"
                              >99</span
                            >
                            <span class="h1 fw-bold text-primary">+</span>
                          </div>
                          <h4 class="mb-0 text-dark">Awards WON</h4>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="counter-item bg-light rounded p-3 h-100">
                          <div class="counter-counting">
                            <span
                              class="text-primary fs-2 fw-bold"
                              data-toggle="counter-up"
                              >556</span
                            >
                            <span class="h1 fw-bold text-primary">+</span>
                          </div>
                          <h4 class="mb-0 text-dark">Skilled Agents</h4>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="counter-item bg-light rounded p-3 h-100">
                          <div class="counter-counting">
                            <span
                              class="text-primary fs-2 fw-bold"
                              data-toggle="counter-up"
                              >967</span
                            >
                            <span class="h1 fw-bold text-primary">+</span>
                          </div>
                          <h4 class="mb-0 text-dark">Team Members</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- About End -->
      
          <!-- Service Start -->
          <div class="container-fluid service py-5">
            <div class="container py-5">
              <div
                class="text-center mx-auto pb-5 wow fadeInUp"
                data-wow-delay="0.2s"
                style="max-width: 800px"
              >
              <h4 class="text-primary">Our Services</h4>
              <h1 class="display-4 mb-4">We Provide the Best Services</h1>
              <p class="mb-0">
                At Barakati Melodies, we are committed to offering comprehensive services that empower artists and maximize their reach in the music industry. Our services are designed to support you at every step of your musical journey, from managing your catalog to ensuring your music is distributed efficiently across global platforms. With our robust analytics and reporting tools, we provide you with the insights needed to understand and grow your audience. Trust Barakati Melodies to deliver the expertise and tools you need to succeed.
              </p>
              
              </div>
              <div class="row g-4 justify-content-center">
                <div
                  class="col-md-4 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <div class="service-item">
                    <div class="service-img">
                      <img
                        {{-- src="img/blog-1.png" --}}
                        src="img/content/catalog-management2.svg"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="service-icon p-3">
                        <i class="fa fa-users fa-2x"></i>
                      </div>
                    </div>
                    <div class="service-content p-4">
                      <div class="service-content-inner">
                        <a href="#" class="d-inline-block h4 mb-4"
                          >Catalog Management</a
                        >
                        <p class="mb-4">
                          Comprehensive control and organization of your music
                          collection.
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/catalog-management"
                          >Read More</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.4s"
                >
                  <div class="service-item">
                    <div class="service-img">
                      <img
                        {{-- src="img/blog-2.png" --}}
                        src="img/content/distribution-and-delivery.svg"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="service-icon p-3">
                        <i class="fa fa-hospital fa-2x"></i>
                      </div>
                    </div>
                    <div class="service-content p-4">
                      <div class="service-content-inner">
                        <a href="#" class="d-inline-block h4 mb-4"
                          >Distribution & Delivery</a
                        >
                        <p class="mb-4">
                          Ensuring your music reaches audiences worldwide efficiently.
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/distribution-and-delivery"
                          >Read More</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.6s"
                >
                  <div class="service-item">
                    <div class="service-img">
                      <img
                        {{-- src="img/blog-3.png" --}}
                        src="img/content/analytics-and-reporting.svg"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="service-icon p-3">
                        <i class="fa fa-car fa-2x"></i>
                      </div>
                    </div>
                    <div class="service-content p-4">
                      <div class="service-content-inner">
                        <a href="#" class="d-inline-block h4 mb-4"
                          >Analitycs & Reporting</a
                        >
                        <p class="mb-4">
                          Gain insights into your music's performance and reach with
                          detailed analytics.
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/analytics-and-reporting"
                          >Read More</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.8s"
                >
                  <div class="service-item">
                    <div class="service-img">
                      <img
                        src="img/blog-4.png"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="service-icon p-3">
                        <i class="fa fa-home fa-2x"></i>
                      </div>
                    </div>
                    <div class="service-content p-4">
                      <div class="service-content-inner">
                        <a href="#" class="d-inline-block h4 mb-4">Home Insurance</a>
                        <p class="mb-4">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          Perspiciatis, eum!
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#"
                          >Read More</a
                        >
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                  <a class="btn btn-primary rounded-pill py-3 px-5" href="#"
                    >More Services</a
                  >
                </div> -->
              </div>
            </div>
          </div>
          <!-- Service End -->

          {{-- <div style="display: flex; justify-content:center; margin-top: 5px; margin-bottom:10px;">
            <img src="img/ALL LOGO.png"  style="width: 90vw; max-width: 100%; height: auto; justify-content: center; display: flex;" alt="" />
          </div> --}}

          @include('component.logo')
      





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

      
          <!-- Blog Start -->
          <!-- <div class="container-fluid blog py-5">
            <div class="container py-5">
              <div
                class="text-center mx-auto pb-5 wow fadeInUp"
                data-wow-delay="0.2s"
                style="max-width: 800px"
              >
                <h4 class="text-primary">From Blog</h4>
                <h1 class="display-4 mb-4">News And Updates</h1>
                <p class="mb-0">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
                  adipisci facilis cupiditate recusandae aperiam temporibus corporis
                  itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
                  obcaecati, ipsam mollitia hic.
                </p>
              </div>
              <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="blog-item">
                    <div class="blog-img">
                      <img
                        src="img/blog-1.png"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="blog-categiry py-2 px-4">
                        <span>Business</span>
                      </div>
                    </div>
                    <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                        <div class="small">
                          <span class="fa fa-user text-primary"></span> Martin.C
                        </div>
                        <div class="small">
                          <span class="fa fa-calendar text-primary"></span> 30 Dec
                          2025
                        </div>
                        <div class="small">
                          <span class="fa fa-comment-alt text-primary"></span> 6
                          Comments
                        </div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3"
                        >Which allows you to pay down insurance bills</a
                      >
                      <p class="mb-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius
                        libero soluta impedit eligendi? Quibusdam, laudantium.
                      </p>
                      <a href="#" class="btn p-0"
                        >Read More <i class="fa fa-arrow-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                  <div class="blog-item">
                    <div class="blog-img">
                      <img
                        src="img/blog-2.png"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="blog-categiry py-2 px-4">
                        <span>Business</span>
                      </div>
                    </div>
                    <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                        <div class="small">
                          <span class="fa fa-user text-primary"></span> Martin.C
                        </div>
                        <div class="small">
                          <span class="fa fa-calendar text-primary"></span> 30 Dec
                          2025
                        </div>
                        <div class="small">
                          <span class="fa fa-comment-alt text-primary"></span> 6
                          Comments
                        </div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3"
                        >Leverage agile frameworks to provide</a
                      >
                      <p class="mb-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius
                        libero soluta impedit eligendi? Quibusdam, laudantium.
                      </p>
                      <a href="#" class="btn p-0"
                        >Read More <i class="fa fa-arrow-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="blog-item">
                    <div class="blog-img">
                      <img
                        src="img/blog-3.png"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="blog-categiry py-2 px-4">
                        <span>Business</span>
                      </div>
                    </div>
                    <div class="blog-content p-4">
                      <div class="blog-comment d-flex justify-content-between mb-3">
                        <div class="small">
                          <span class="fa fa-user text-primary"></span> Martin.C
                        </div>
                        <div class="small">
                          <span class="fa fa-calendar text-primary"></span> 30 Dec
                          2025
                        </div>
                        <div class="small">
                          <span class="fa fa-comment-alt text-primary"></span> 6
                          Comments
                        </div>
                      </div>
                      <a href="#" class="h4 d-inline-block mb-3"
                        >Leverage agile frameworks to provide</a
                      >
                      <p class="mb-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius
                        libero soluta impedit eligendi? Quibusdam, laudantium.
                      </p>
                      <a href="#" class="btn p-0"
                        >Read More <i class="fa fa-arrow-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Blog End -->
      
          <!-- Team Start -->
          <div class="container-fluid team pb-5">
            <div class="container pb-5">
              <div
                class="text-center mx-auto pb-5 wow fadeInUp"
                data-wow-delay="0.2s"
                style="max-width: 800px"
              >
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                <p class="mb-0">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
                  adipisci facilis cupiditate recusandae aperiam temporibus corporis
                  itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
                  obcaecati, ipsam mollitia hic.
                </p>
              </div>
              <div class="row g-4">
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <div class="team-item">
                    <div class="team-img">
                      <img
                        src="img/team-1.jpg"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="team-icon">
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-twitter"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-0"
                          href=""
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </div>
                    </div>
                    <div class="team-title p-4">
                      <h4 class="mb-0">David James</h4>
                      <p class="mb-0">Profession</p>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.4s"
                >
                  <div class="team-item">
                    <div class="team-img">
                      <img
                        src="img/team-2.jpg"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="team-icon">
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-twitter"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-0"
                          href=""
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </div>
                    </div>
                    <div class="team-title p-4">
                      <h4 class="mb-0">David James</h4>
                      <p class="mb-0">Profession</p>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.6s"
                >
                  <div class="team-item">
                    <div class="team-img">
                      <img
                        src="img/team-3.jpg"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="team-icon">
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-twitter"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-0"
                          href=""
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </div>
                    </div>
                    <div class="team-title p-4">
                      <h4 class="mb-0">David James</h4>
                      <p class="mb-0">Profession</p>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                  data-wow-delay="0.8s"
                >
                  <div class="team-item">
                    <div class="team-img">
                      <img
                        src="img/team-4.jpg"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                      <div class="team-icon">
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-twitter"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-2"
                          href=""
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <a
                          class="btn btn-primary btn-sm-square rounded-pill mb-0"
                          href=""
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </div>
                    </div>
                    <div class="team-title p-4">
                      <h4 class="mb-0">David James</h4>
                      <p class="mb-0">Profession</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Team End -->
      
          <!-- Testimonial Start -->
          <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
              <div
                class="text-center mx-auto pb-5 wow fadeInUp"
                data-wow-delay="0.2s"
                style="max-width: 800px"
              >
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
                <p class="mb-0">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
                  adipisci facilis cupiditate recusandae aperiam temporibus corporis
                  itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
                  obcaecati, ipsam mollitia hic.
                </p>
              </div>
              <div
                class="owl-carousel testimonial-carousel wow fadeInUp"
                data-wow-delay="0.2s"
              >
                <div class="testimonial-item bg-light rounded">
                  <div class="row g-0">
                    <div class="col-4 col-lg-4 col-xl-3">
                      <div class="h-100">
                        <img
                          src="img/testimonial-1.jpg"
                          class="img-fluid h-100 rounded"
                          style="object-fit: cover"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-8 col-lg-8 col-xl-9">
                      <div class="d-flex flex-column my-auto text-start p-4">
                        <h4 class="text-dark mb-0">Client Name</h4>
                        <p class="mb-3">Profession</p>
                        <div class="d-flex text-primary mb-3">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <p class="mb-0">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                          Enim error molestiae aut modi corrupti fugit eaque rem nulla
                          incidunt temporibus quisquam,
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item bg-light rounded">
                  <div class="row g-0">
                    <div class="col-4 col-lg-4 col-xl-3">
                      <div class="h-100">
                        <img
                          src="img/testimonial-2.jpg"
                          class="img-fluid h-100 rounded"
                          style="object-fit: cover"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-8 col-lg-8 col-xl-9">
                      <div class="d-flex flex-column my-auto text-start p-4">
                        <h4 class="text-dark mb-0">Client Name</h4>
                        <p class="mb-3">Profession</p>
                        <div class="d-flex text-primary mb-3">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star text-body"></i>
                        </div>
                        <p class="mb-0">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                          Enim error molestiae aut modi corrupti fugit eaque rem nulla
                          incidunt temporibus quisquam,
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testimonial-item bg-light rounded">
                  <div class="row g-0">
                    <div class="col-4 col-lg-4 col-xl-3">
                      <div class="h-100">
                        <img
                          src="img/testimonial-3.jpg"
                          class="img-fluid h-100 rounded"
                          style="object-fit: cover"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-8 col-lg-8 col-xl-9">
                      <div class="d-flex flex-column my-auto text-start p-4">
                        <h4 class="text-dark mb-0">Client Name</h4>
                        <p class="mb-3">Profession</p>
                        <div class="d-flex text-primary mb-3">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star text-body"></i>
                          <i class="fas fa-star text-body"></i>
                        </div>
                        <p class="mb-0">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                          Enim error molestiae aut modi corrupti fugit eaque rem nulla
                          incidunt temporibus quisquam,
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Testimonial End -->
          
@endsection