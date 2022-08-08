 <!-- footer section -->
 <?php $page = isset($_GET['page']) ? $_GET['page']:'home' ?>
            <?php
            $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "home";
             ?>
            <?php 
            if(!file_exists('./modules/pages/'.$page.".php")){
              include './404.html';
            }else{
            include './modules/pages/'.$page.'.php';
            }
          ?>

          
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
Our Vision
            </h4>
            <p>
          "To see our country with no hunger"
          </p>
            <div class="info_social">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="https://g.page/om-sri-matha-mahakali-trust-r?share">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Jangatta (Village) Kolar (District) Karnataka India 
                </span>
              </a>
              <a href="tel:9108765246">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 9108765246
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                 mvk8512@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
             For Notifications
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div> -->
        <div class="col-md-6 col-lg-6 info-col">
          <div class="map_container">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3884.1435704110363!2d78.13288759999999!3d13.2163015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3badf7119b568f43%3A0xa9d8e10d7bc49ab9!2sOm%20Sri%20Matha%20Mahakali%20Trust%20(R)!5e0!3m2!1sen!2sin!4v1659967926779!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">pkwebdev</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script>
   var t= new Date();
  panchang.calculate(t, function() {
    document.getElementById("day").innerHTML=panchang.Day.name;
    document.getElementById("tithi").innerHTML=panchang.Tithi.name;
    document.getElementById("nakshtra").innerHTML=panchang.Nakshatra.name;
    document.getElementById("karna").innerHTML=panchang.Karna.name;
    document.getElementById("yoga").innerHTML=panchang.Yoga.name;
    document.getElementById("raasi").innerHTML=panchang.Raasi.name;
    document.getElementById("ayanamsa").innerHTML=panchang.Ayanamsa.name;
  });
</script>
</body>


</html>