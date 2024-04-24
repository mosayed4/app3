
<!-- get in touch section start -->
<div class="get-in-touch contact-us">
  <div class="container">
    <div class="row section-row">
      <div class="col-md-12">
        <!-- Section Title Start -->
        <div class="section-title">
          <h3 class="wow fadeInUp">Contact Form</h3>
          <h2 class="text-anime"><span>Get In Booking</span> With Us.</h2>
        </div>
        <!-- Section Title End -->
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <!-- Contact Form start -->
        <div class="contact-form wow fadeInUp" data-wow-delay="0.25s">            

          <form  action="{{ url('/addNewAppmint') }}" method="post" data-toggle="validator">

            @csrf
            <div class="row">
              <div class="form-group col-lg-4 col-md-4 mb-4">
                <label>Your Name</label>
                <input type="text" name="name" class="form-control"  placeholder="Enter Your Name" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-lg-4 col-md-4 mb-4">
                <label>Your Number</label>
                <input type="text" name="phone" class="form-control"  placeholder="Enter Your Number" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group col-lg-4 col-md-4 mb-4">
                <label>Your Email</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter Your Email" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group col-lg-4 col-md-4 mb-4">
                <label>Your Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group col-md-12 mb-4">
                <label>Your Message</label>
                <textarea name="message" type="text" class="form-control"    rows="4" placeholder="Type Your Message" required></textarea>
                <div class="help-block with-errors"></div>
              </div>

              <div class="col-md-12">
                <button type="submit" class="btn-default">Submit</button>
                <div id="msgSubmit" class="h3 text-left hidden"></div>
              </div>
            </div>
          </form>
        </div>
        <!-- Contact Form end -->
      </div>
    </div>
  </div>
</div>
<!-- get in touch section end -->


<!-- Footer Section Start -->
<footer>
    <!-- Mega Footer Start -->
    <div class="mega-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Footer About End -->
            <div class="footer-about">
              <!-- Footer About Logo Start -->
              <div class="footer-logo">
                <img src="images/footer-logo.svg" alt="" />
              </div>
              <!-- Footer About Logo End -->
              <!-- Footer About Content Start -->
              <div class="footer-about-content">
                <p>
                  BY Software Engineering Mohammed Sayed  group OF 
                  121 
                   students at Al-Alsun Higher
                  
                </p>
              </div>
              <!-- Footer About Content End -->
              <!-- Footer Social Link Start -->
              <div class="footer-social-links">
                <ul>
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Footer Social Link End -->
            </div>
            <!-- Footer About End -->
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer About us Start -->
            <div class="footer-links">
              <h2>About Us</h2>
              <ul>
                <li><a href="/html/about-us.html">About Us</a></li>
                <li><a href="/html/contact-us.html">Contact Us</a></li>
                <li><a href="/html/index-slider.html">Our Work</a></li>
                <li><a href="/html/index-video.html">Owr</a></li>
                <li><a href="/html/team.html">Team</a></li>
              </ul>
            </div>
            <!-- Footer About us End -->
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer Links Start -->
            <div class="footer-links">
              <h2>Quick Links</h2>
              <ul>
                <li><a href="/html/index.html">Home</a></li>
                <li><a href="/html/blog.html">News & Blogs</a></li>
                <li><a href="/html/services.html">Services</a></li>
                <li><a href="/html/team.html">Terms & Condition</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <!-- Footer Links End -->
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Footer Contact Box Start -->
            <div class="footer-contact-info">
              <h2>Contact Info</h2>
              <div class="footer-info-box">
                <div class="icon-box">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <p>(+20) 1150209895</p>
              </div>
              <div class="footer-info-box">
                <div class="icon-box">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <p>mosaeyd4@gmail.com</p>
              </div>
              <div class="footer-info-box">
                <div class="icon-box">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <p>20 Square, Cairo,EG <br /> EG</p>
              </div>
            </div>
            <!-- Footer Contact Box End -->
          </div>
        </div>
      </div>
    </div>
    <!-- Mega Footer End -->
  </footer>
  <!-- Footer Section End -->

  <!-- Footer Copyright Section Start -->
  <div class="copy-right-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Footer Copyright Content Start -->
          <div class="copy-right-content">
            <p>Copyright © 2024 <span>All  Rights reserved BY Software Engineering students at Al-Alsun Higher Institute </span></p>
          </div>
          <!-- Footer Copyright Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Copyright Section End -->

  <!-- Jquery Library File -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js file -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Validator js file -->
  <script src="js/validator.min.js"></script>
  <!-- SlickNav js file -->
  <script src="js/jquery.slicknav.js"></script>
  <!-- Magnific js file -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Swiper js file -->
  <script src="js/swiper-bundle.min.js"></script>
  <!-- Counter js file -->
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <!-- SmoothScroll -->
  <script src="js/SmoothScroll.js"></script>
  <!-- Parallax js -->
  <script src="js/parallaxie.js"></script>
  <!-- MagicCursor js file -->
  <script src="js/gsap.min.js"></script>
  <script src="js/magiccursor.js"></script>
  <!-- Text Effect js file -->
  <script src="js/splitType.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>
  <!-- YTPlayer js file -->
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <!-- Wow js file -->
  <script src="js/wow.js"></script>
  <!-- Main Custom js file -->
  <script src="js/function.js"></script>
</body>
</html>
