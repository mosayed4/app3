@extends('main.layouts.app')
@section('concant')

    
    <!-- main Header end -->

    <!-- Hero Section Start -->
    <div class="hero parallaxie">
        <div class="hero-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                <!-- Hero Left Content Start -->
                <div class="hero-content">
                  <div class="hero-content-title">
                    <h1 class="text-anime">
                      Car Recovery & Auto <span>Magic From crash</span>
                    </h1>
  
                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                      Our team of highly skilled technicians is committed to
                      ensuring the optimal performance and safety of your vehicle.
                      Whether you need routine maintenance, repairs, or
                      specialized services, we have you covered.
                    </p>
                  </div>
  
                  <div
                    class="hero-content-body wow fadeInUp"
                    data-wow-delay="0.5s"
                  >
                    <ul>
                      <li>
                        <i class="fa-solid fa-thumbs-up"></i> Quality Service
                      </li>
                      <li>
                        <i class="fa-solid fa-headphones-simple"></i> 24 X 7
                        Support
                      </li>
                    </ul>
                  </div>
  
                  <div
                    class="hero-content-footer wow fadeInUp"
                    data-wow-delay="0.75s"
                  >
                    <a  href="{{ url ('/login')}}"
                    class="btn-default">Book  and login </a>
                  </div>
                </div>
                <!-- Hero Left Content End -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Section End -->
  
      <!-- Home About Us Section Start -->
      <div class="about-us-wrapper">
        <div class="container">
          <!-- About Us Content Section Start -->
          <div class="row section-row align-items-center">
            <div class="col-md-6">
              <!-- Section Title Start -->
              <div class="section-title">
                <h3 class="wow fadeInUp">Why should you choose Aziland.</h3>
                <h2 class="text-anime"><span>About</span> Us.</h2>
              </div>
              <!-- Section Title End -->
            </div>
  
            <div class="col-md-6">
              <div class="about-image-box">
                <!-- Image Box Section Start -->
                <div
                  class="image-box-wrapper wow fadeInUp"
                  data-wow-delay="0.25s"
                >
                  <a href="https://maps.app.goo.gl/fSKDzPXNAS7ixDwh8">  <figure>
                    <img src="images/icon-address.svg" alt="map-icon" />
                  </figure></a>
                  <div class="img-box-content">
                    <h3>We are Located in</h3>
                    <p>Cairo EG </p>
                  </div>
                </div>
                <!-- Image Box Section End -->
  
                <!-- Image Box Section Start -->
                <div class="image-box-wrapper wow fadeInUp" data-wow-delay="0.5s">
                  <figure>
                    <img src="images/icon-call.svg" alt="phone-icon" />
                  </figure>
                  <div class="img-box-content">
                    <h3>contact no</h3>
                    <p><a href="https://wa.me/+201150209859">WhatsApp </a></p>
                  </div>
                </div>
                <!-- Image Box Section End -->
              </div>
            </div>
          </div>
          <!-- About Us Content Section End -->
  
          <div class="row">
            <div class="col-md-12">
              <!-- About Us Video Section Start -->
              <div class="about-us-video">
                <div class="about-image">
                  <figure class="reveal image-anime">
                    <img src="images/about-us-img.jpg" alt="" />
                  </figure>
                </div>
  
                <div class="video-play-button">
                  <a
                    href="https://www.youtube.com/watch?v=Y-x0efG1seA"
                    class="popup-video"
                  >
                    <img src="images/play.svg" alt="" />
                  </a>
                </div>
              </div>
              <!-- About Us Video Section End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Home About Us Section End -->
  
      <!-- Counter Section Start -->
      <div class="counter-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- Counter Box Section Start -->
              <div class="counter-box-wrapper wow fadeInUp">
                <div class="counter-icon">
                  <img src="images/icon-counter-1.svg" alt="img" />
                </div>
  
                <div class="counter-box-content">
                  <h3><span class="counter">480</span></h3>
                  <p>Crash Recover Car</p>
                </div>
              </div>
              <!-- Counter Box Section End -->
            </div>
  
            <div class="col-lg-3 col-6">
              <!-- Counter Box Section Start -->
              <div
                class="counter-box-wrapper wow fadeInUp"
                data-wow-delay="0.25s"
              >
                <div class="counter-icon">
                  <img src="images/icon-counter-2.svg" alt="img" />
                </div>
  
                <div class="counter-box-content">
                  <h3><span class="counter">460</span></h3>
                  <p>Auto Magic</p>
                </div>
              </div>
              <!-- Counter Box Section End -->
            </div>
  
            <div class="col-lg-3 col-6">
              <!-- Counter Box Section Start -->
              <div class="counter-box-wrapper wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter-icon">
                  <img src="images/icon-counter-3.svg" alt="img" />
                </div>
  
                <div class="counter-box-content">
                  <h3><span class="counter">700</span></h3>
                  <p>Auto Magic</p>
                </div>
              </div>
              <!-- Counter Box Section End -->
            </div>
  
            <div class="col-lg-3 col-6">
              <!-- Counter Box Section Start -->
              <div
                class="counter-box-wrapper wow fadeInUp"
                data-wow-delay="0.75s"
              >
                <div class="counter-icon">
                  <img src="images/icon-counter-4.svg" alt="img" />
                </div>
  
                <div class="counter-box-content">
                  <h3><span class="counter">970</span></h3>
                  <p>Branch City</p>
                </div>
              </div>
              <!-- Counter Box Section End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Counter Section End -->
  
      <!-- What We Do Section Start -->
      <div class="what-we-do-section">
        <div class="container">
          <div class="row section-row align-items-center">
            <div class="col-lg-8 col-md-7">
              <!-- Section Title Start -->
              <div class="section-title">
                <h3 class="wow fadeInUp">What We Do</h3>
                <h2 class="text-anime"><span>Excellence in </span>car care.</h2>
              </div>
              <!-- Section Title End -->
            </div>
  
            <div class="col-lg-4 col-md-5">
              <div class="section-btn wow fadeInUp">     <a  href="{{ url ('/services')}}"
                class="btn-default">view all service</a>
              </div>
            </div>
          </div>
  
          <!-- Cta Content Section Start -->
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Cta Box Section Start -->
              <div class="cta-box wow fadeInUp" data-wow-delay="0.25s">
                <div class="cta-img">
                  <figure>
                    <img src="images/what-we-do-1.jpg" alt="img" />
                  </figure>
                </div>
  
                <div class="cta-content">
                  <h3>Crash Recover Car</h3>
                  <p>
                    Lorem ipsum dolor sit t tellus, luctus nec ullamcorper mattis,
                    pulvinar dapibus leo.
                  </p>
                  <a href="/html/blog-single.html" class="btn-default">Read More</a>
                </div>
              </div>
              <!-- Cta Box Section End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Cta Box Section Start -->
              <div class="cta-box wow fadeInUp" data-wow-delay="0.5s">
                <div class="cta-img">
                  <figure>
                    <img src="images/what-we-do-2.jpg" alt="img" />
                  </figure>
                </div>
  
                <div class="cta-content">
                  <h3>Auto Magic</h3>
                  <p>
                    Lorem ipsum dolor sit t tellus, luctus nec ullamcorper mattis,
                    pulvinar dapibus leo.
                  </p>
                  <a href="{{ url ('/gallery')}}" class="btn-default">Read More</a>
                </div>
              </div>
              <!-- Cta Box Section End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Cta Box Section Start -->
              <div class="cta-box wow fadeInUp" data-wow-delay="0.75s">
                <div class="cta-img">
                  <figure>
                    <img src="images/what-we-do-3.jpg" alt="img" />
                  </figure>
                </div>
  
                <div class="cta-content">
                  <h3>Auto Magic</h3>
                  <p>
                    Lorem ipsum dolor sit t tellus, luctus nec ullamcorper mattis,
                    pulvinar dapibus leo.
                  </p> <a  href="{{ url ('/gallery')}}"

                   class="btn-default">Read More</a>
                </div>
              </div>
              <!-- Cta Box Section End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Cta Box Section Start -->
              <div class="cta-box wow fadeInUp" data-wow-delay="1s">
                <div class="cta-img">
                  <figure>
                    <img src="images/what-we-do-4.jpg" alt="img" />
                  </figure>
                </div>
  
                <div class="cta-content">
                  <h3>Crash Recover Car</h3>
                  <p>
                    Lorem ipsum dolor sit t tellus, luctus nec ullamcorper mattis,
                    pulvinar dapibus leo.
                  </p>
                  <a href="{{ url ('/gallery')}}" class="btn-default">Read More</a>
                </div>
              </div>
              <!-- Cta Box Section End -->
            </div>
          </div>
          <!-- Cta Content Section End -->
        </div>
      </div>
      <!-- What We Do Section End -->
  
      <!-- Dry Clean Section Start -->
      <div class="dry-clean-section parallaxie">
        <div class="container">
          <div class="row section-row align-items-center">
            <div class="col-lg-7 col-md-8">
              <!-- Section Title Start -->
              <div class="section-title">
                <h3 class="wow fadeInUp">Dry clean</h3>
                <h2 class="text-anime">
                  <span>Dry cleaning any dirty </span>inside the car.
                </h2>
              </div>
              <!-- Section Title End -->
            </div>
          </div>
  
          <div class="row align-items-center">
            <div class="col-lg-8">
              <!-- Dry Clean Img Section Start -->
              <div class="dry-clean-img">
                <figure class="reveal image-anime">
                  <img src="images/how-it-work.jpg" alt="" />
                </figure>
              </div>
              <!-- Dry Clean Img Section End -->
            </div>
  
            <div class="col-lg-4">
              <!-- Dry Clean Content Start -->
              <div class="dry-clean-content">
                <div
                  class="dry-clean-img-box wow fadeInUp"
                  data-wow-delay="0.25s"
                >
                  <h3>01.</h3>
                  <h2>Prepping the Vehicle</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                    elit tellus.
                  </p>
                </div>
  
                <div class="dry-clean-img-box wow fadeInUp" data-wow-delay="0.5s">
                  <h3>02.</h3>
                  <h2>Stain Treatment</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                    elit tellus.
                  </p>
                </div>
  
                <div
                  class="dry-clean-img-box wow fadeInUp"
                  data-wow-delay="0.75s"
                >
                  <h3>03.</h3>
                  <h2>Brushing/Agitation</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                    elit tellus.
                  </p>
                </div>
              </div>
              <!-- Dry Clean Content End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Dry Clean Section End -->
  
      <!-- Why Choose Us Section Start -->
      <div class="why-choose-us-section">
        <div class="container">
          <div class="row section-row">
            <div class="col-md-12">
              <!-- Section Title Start -->
              <div class="section-title">
                <h2 class="text-anime"><span>Why</span> Choose Us ?</h2>
              </div>
              <!-- Section Title End -->
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-2 col-md-4 col-6">
              <!-- Why Choose us Item Start -->
              <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon-box">
                  <img src="images/icon-wcu-1.svg" alt="img" />
                </div>
  
                <h3>Expertise and Experience</h3>
              </div>
              <!-- Why Choose us Item End -->
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
              <!-- Why Choose us Item Start -->
              <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.4s">
                <div class="icon-box">
                  <img src="images/icon-wcu-2.svg" alt="img" />
                </div>
  
                <h3>Shuttle Service Available</h3>
              </div>
              <!-- Why Choose us Item End -->
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
              <!-- Why Choose us Item Start -->
              <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.6s">
                <div class="icon-box">
                  <img src="images/icon-wcu-3.svg" alt="img" />
                </div>
  
                <h3>Skilled Technicians</h3>
              </div>
              <!-- Why Choose us Item End -->
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
              <!-- Why Choose us Item Start -->
              <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.8s">
                <div class="icon-box">
                  <img src="images/icon-wcu-4.svg" alt="img" />
                </div>
  
                <h3>Finncing Available</h3>
              </div>
              <!-- Why Choose us Item End -->
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
              <!-- Why Choose us Item Start -->
              <div class="why-choose-us-item wow fadeInUp" data-wow-delay="1s">
                <div class="icon-box">
                  <img src="images/icon-wcu-5.svg" alt="img" />
                </div>
  
                <h3>Vacuum And Hand Car Wash</h3>
              </div>
              <!-- Why Choose us Item End -->
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
              <!-- Why Choose us Item Start -->
              <div class="why-choose-us-item wow fadeInUp" data-wow-delay="1.2s">
                <div class="icon-box">
                  <img src="images/icon-wcu-6.svg" alt="img" />
                </div>
  
                <h3>Free Pick Up & Drop</h3>
              </div>
              <!-- Why Choose us Item End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Why Choose Us Section End -->
  
      <!-- Pricing Section Strat -->
      <div class="pricing-section">
        <div class="container">
          <div class="row section-row align-items-center">
            <div class="col-lg-8 col-md-7">
              <!-- Section Title Start -->
              <div class="section-title">
                <h3 class="wow fadeInUp">Our Packages</h3>
                <h2 class="text-anime"><span>Our Service </span>Plan.</h2>
              </div>
              <!-- Section Title End -->
            </div>
  
            <div class="col-lg-4 col-md-5">
              <!-- Section Right Button Start -->
              <div class="section-btn wow fadeInUp">
                <a href="{{ url ('/contact')}}" class="btn-default">Contact Now</a>
              </div>
              <!-- Section Right Button End -->
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Pricing Package Start -->
              <div class="pricing-package wow fadeInUp" data-wow-delay="0.2s">
                <div class="pricing-header">
                  <h3>Basic Package</h3>
                  <p>$19.99</p>
                </div>
                <div class="pricing-body">
                  <ul>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Timing Belt
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Batteries
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      steering
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> Brake
                      repair
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> car
                      diagnostics
                    </li>
                  </ul>
                </div>
                <a href="/html/contact-us.html" class="btn-default">Order Now</a>
              </div>
              <!-- Pricing Package End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Pricing Package Start -->
              <div
                class="pricing-package package-popular wow fadeInUp"
                data-wow-delay="0.4s"
              >
                <div class="pricing-header">
                  <h3>standard Package</h3>
                  <p>$29.99</p>
                </div>
                <div class="pricing-body">
                  <ul>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Timing Belt
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Batteries
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      steering
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> Brake
                      repair
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> car
                      diagnostics
                    </li>
                  </ul>
                </div>
                <a href="{{ url ('/contact')}}" class="btn-default">Order Now</a>
              </div>
              <!-- Pricing Package End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Pricing Package Start -->
              <div class="pricing-package wow fadeInUp" data-wow-delay="0.6s">
                <div class="pricing-header">
                  <h3>Premium Package</h3>
                  <p>$39.99</p>
                </div>
                <div class="pricing-body">
                  <ul>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Timing Belt
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Batteries
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      steering
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> Brake
                      repair
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> car
                      diagnostics
                    </li>
                  </ul>
                </div>
                <a href="{{ url ('/contact')}}"class="btn-default">Order Now</a>
              </div>
              <!-- Pricing Package End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Pricing Package Start -->
              <div class="pricing-package wow fadeInUp" data-wow-delay="0.8s">
                <div class="pricing-header">
                  <h3>Custom Package</h3>
                  <p>Ask for Price</p>
                </div>
                <div class="pricing-body">
                  <ul>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Timing Belt
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      Batteries
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-check-circle"></i>
                      steering
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> Brake
                      repair
                    </li>
                    <li>
                      <i aria-hidden="true" class="far fa-times-circle"></i> car
                      diagnostics
                    </li>
                  </ul>
                </div>
                <a href="{{ url ('/contact')}}" class="btn-default">Order Now</a>
              </div>
  
              <!-- Pricing Package End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Pricing Section End -->
  
      <!-- Get Recovery section start -->
      <div class="get-recovery">
        <div class="container">
          <div class="row section-row align-items-center">
            <div class="col-lg-8 col-md-7">
              <!-- Section Title Start -->
              <div class="section-title">
                <h3 class="wow fadeInUp">Lets Get Recovery</h3>
                <h2 class="text-anime"><span>How to service </span>your car.</h2>
              </div>
              <!-- Section Title End -->
            </div>
  
            <div class="col-lg-4 col-md-5">
              <!-- Get Contact Section Start -->
              <div
                class="get-recovery-icon-box wow fadeInUp"
                data-wow-delay="0.25s"
              >
                <div class="get-recovery-wrapper">
                  <div class="icon-box">
                    <img src="images/icon-call.svg" alt="" />
                  </div>
  
                  <div class="get-recovery-content">
                    <a href="https://wa.me/+201150209859"
                      ><span>Lets Talk Us</span>
                      <p>0115020959</p></a
                    >
                  </div>
                </div>
              </div>
              <!-- Get Contact Section End -->
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Recovery Box Items Start -->
              <div class="get-recovery-box wow fadeInUp" data-wow-delay="0.2s">
                <!-- Recovery Box Image Start -->
                <div class="get-recovery-box-image">
                  <figure>
                    <img src="images/get-recovery-img-1.jpg" alt="" />
                  </figure>
                </div>
                <!-- Recovery Box Image End -->
  
                <!-- Recovery Box Content Start -->
                <div class="get-recovery-box-content">
                  <div class="get-recovery-box-content-title">
                    <h2>Appointment Scheduling</h2>
                    <p>
                      Customers can easily schedule an appointment with us through
                      our website, phone, or in-person.
                    </p>
                  </div>
                </div>
                <!-- Recovery Box Content End -->
              </div>
              <!-- Recovery Box Items End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Recovery Box Items Start -->
              <div class="get-recovery-box wow fadeInUp" data-wow-delay="0.4s">
                <!-- Recovery Box Image Start -->
                <div class="get-recovery-box-image">
                  <figure>
                    <img src="images/get-recovery-img-2.jpg" alt="" />
                  </figure>
                </div>
                <!-- Recovery Box Image End -->
  
                <!-- Recovery Box Content Start -->
                <div class="get-recovery-box-content">
                  <div class="get-recovery-box-content-title">
                    <h2>Vehicle Drop-off or Pick-up</h2>
                    <p>
                      On the scheduled appointment day, customers can drop off
                      their vehicles at our service center.
                    </p>
                  </div>
                </div>
                <!-- Recovery Box Content End -->
              </div>
              <!-- Recovery Box Items End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Recovery Box Items Start -->
              <div class="get-recovery-box wow fadeInUp" data-wow-delay="0.6s">
                <!-- Recovery Box Image Start -->
                <div class="get-recovery-box-image">
                  <figure>
                    <img src="images/get-recovery-img-3.jpg" alt="" />
                  </figure>
                </div>
                <!-- Recovery Box Image End -->
  
                <!-- Recovery Box Content Start -->
                <div class="get-recovery-box-content">
                  <div class="get-recovery-box-content-title">
                    <h2>Consultation and Inspection</h2>
                    <p>
                      Once the vehicle is in our care, our skilled technicians
                      will conduct an initial consultation.
                    </p>
                  </div>
                </div>
                <!-- Recovery Box Content End -->
              </div>
              <!-- Recovery Box Items End -->
            </div>
  
            <div class="col-lg-3 col-md-6">
              <!-- Recovery Box Items Start -->
              <div class="get-recovery-box wow fadeInUp" data-wow-delay="0.8s">
                <!-- Recovery Box Image Start -->
                <div class="get-recovery-box-image">
                  <figure>
                    <img src="images/get-recovery-img-4.jpg" alt="" />
                  </figure>
                </div>
                <!-- Recovery Box Image End -->
  
                <!-- Recovery Box Content Start -->
                <div class="get-recovery-box-content">
                  <div class="get-recovery-box-content-title">
                    <h2>Car Service and Car Repair</h2>
                    <p>
                      Based on the initial consultation and inspection, our
                      technicians will carry out the services or repairs.
                    </p>
                  </div>
                </div>
                <!-- Recovery Box Content End -->
              </div>
              <!-- Recovery Box Items End -->
            </div>
          </div>
        </div>
      </div>
      <!-- get Recovery section end -->
  
      <!-- Make Appointment Section Start -->
      <div class="make-appointment">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <!-- Appointment Content Section Start -->
              <div class="make-appointment-content wow fadeInUp">
                <div class="icon-box">
                  <img src="images/schedule-img.svg" alt="" />
                </div>
  
                <div class="make-appointment-title">
                  <h3>Schedule An Appointment</h3>
                  <p>
                    Book your appointment with Aziland today and let us take care
                    of your vehicle with professionalism and expertise.
                  </p>
                </div>
              </div>
              <!-- Appointment Content Section End -->
            </div>
  
            <div class="col-md-5">
              <!-- Appointment Btn Start -->
              <div
                class="make-appointment-button wow fadeInUp"
                data-wow-delay="0.25s"
              >
                <a class="btn-default" href="{{ url ('/contact')}}">MAKE APPOINTMENT</a>
              </div>
              <!-- Appointment Btn End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Make Appointment Section End -->
  
      <!-- latest news section start -->
      <div class="latest-news">
        <div class="container">
          <div class="row section-row align-items-center">
            <div class="col-md-8">
              <!-- Section Title Start -->
              <div class="section-title">
                <h3 class="wow fadeInUp">Latest Articles</h3>
                <h2 class="text-anime"><span>Popular </span>Articles & News.</h2>
              </div>
              <!-- Section Title End -->
            </div>
  
            <div class="col-md-4">
              <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                <a href="{{ url ('/gallery') }}" class="btn-default">View All News</a>
              </div>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <!-- Blog Item Start -->
              <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                <!-- blog image start -->
                <div class="post-featured-image">
                  <figure class="image-anime">
                    <a href="{{ url ('/gallery') }}"><img src="images/post-1.jpg" alt="" /></a>
                  </figure>
                </div>
                <!-- blog image end -->
  
                <!-- blog content start -->
                <div class="post-item-body">
                  <h2>
                    <a href="{{ url ('/gallery') }}">Winter Car Maintenance Tips for Safe Driving</a>
                  </h2>
                  <a href="{{ url ('/gallery') }}" class="btn-readmore"
                    >Read More <i class="fa-solid fa-arrow-right-long"></i
                  ></a>
                </div>
                <!-- blog content end -->
              </div>
              <!-- Blog Item End -->
            </div>
  
            <div class="col-lg-4 col-md-6">
              <!-- Blog Item Start -->
              <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                <!-- blog image start -->
                <div class="post-featured-image">
                  <figure class="image-anime">
                    <a href="{{ url ('/gallery') }}"><img src="images/post-2.jpg" alt="" /></a>
                  </figure>
                </div>
                <!-- blog image end -->
  
                <!-- blog content start -->
                <div class="post-item-body">
                  <h2><a href="{{ url ('/gallery')}}">Signs that Your Car Needs Brake Service</a></h2>
                  <a href="{{ url ('/gallery') }}" class="btn-readmore"
                    >Read More <i class="fa-solid fa-arrow-right-long"></i
                  ></a>
                </div>
                <!-- blog content end -->
              </div>
              <!-- Blog Item End -->
            </div>
  
            <div class="col-lg-4 col-md-6">
              <!-- Blog Item Start -->
              <div class="blog-item wow fadeInUp" data-wow-delay="0.6s">
                <!-- blog image start -->
                <div class="post-featured-image">
                  <figure class="image-anime">
                    <a href="{{ url ('/gallery') }}"><img src="images/post-3.jpg" alt="" /></a>
                  </figure>
                </div>
                <!-- blog image end -->
  
                <!-- blog content start -->
                <div class="post-item-body">
                  <h2><a href="{{ url ('/services') }}">The Benefits of Regular Oil Changes</a></h2>
                  <a href="{{ url ('/contact') }}" class="btn-readmore"
                    >Read More <i class="fa-solid fa-arrow-right-long"></i
                  ></a>
                </div>
                <!-- blog content end -->
              </div>
              <!-- Blog Item End -->
            </div>
          </div>
        </div>
      </div>
      <!-- latest news section end -->
@endsection