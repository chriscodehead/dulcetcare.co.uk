<?php
require_once('include.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $user_id = $_GET['id'];
} else {
  header("location:service-details");
}

$sql = query_sql("SELECT * FROM $services_tb WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);

$active1 = 'active';
$title = @$row['title'];
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php');
?>

<body>
  <?php require_once('header.php'); ?>

  <section class="index2-banner-section w-100 float-left d-flex align-items-center" style="padding-top: 50px; margin-top: -3px;">
    <div class="index2-banner-shape w-100 float-left">
      <div class="container">
        <div class="banner2-con text-center">
          <span class="d-block" data-aos="fade-up" data-aos-duration="700"><a href="./">Home</a> / <a href="services">Our Services</a> / <?php print $row['title']; ?></span>
          <h1 data-aos="fade-up" data-aos-duration="700"><?php print $row['title']; ?></h1>
          <p data-aos="fade-up" data-aos-duration="700"><?php print $siteName; ?>, Caring for You at Home, Where Your Heart Is</p>
          <div class="generic-btn" data-aos="fade-up" data-aos-duration="700">
            <a href="appointment">Book an Appointment</a>
          </div>
        </div>
        <div class="social-links">
          <ul class="list-unstyled mb-0" data-aos="fade-up" data-aos-duration="700">
            <li><a href="<?php print $siteFacebook; ?>"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li><a href="<?php print $siteTwitter; ?>"><i class="fab fa-twitter"></i></a></li>
            <li class="mb-0"><a href="<?php print $siteInstagram; ?>"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="btn-outer-box">
          <div class="top-to-bottom-btn">
            <a href="#index2-cntct">
              <figure class="mb-0">
                <img src="assets/images/bottom-arrow.png" alt="bottom-arrow">
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="index2-about-section padding-top padding-bottom w-100 float-left position-relative light-bg">
    <div class="container">
      <div class="index2-about-con">
        <div class="index2-about-txt-con">
          <div class="generic-title">
            <span class="d-block small-text" data-aos="fade-up" data-aos-duration="700">Our Services</span>
            <h2 data-aos="fade-up" data-aos-duration="700"><?php print $row['title']; ?></h2>
          </div>
          <p data-aos="fade-up" data-aos-duration="700"><?php print $row['description']; ?></p>
        </div>
        <div class="index2-about-image-box position-relative" data-aos="fade-up" data-aos-duration="700">
          <figure class="mb-0">
            <img src="<?php print 'photo/' . $row['big_image']; ?>" alt="woman-dental-checkup">
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="w-100 float-left contact-main-sec position-relative padding-top padding-bottom">
    <div class="container">
      <div class="contact-main-box">
        <div class="contact-left-sec">
          <div class="contact-detail" data-aos="fade-up" data-aos-duration="700">
            <figure class="mb-0">
              <img src="assets/images/location-img.png" alt="location-img">
            </figure>
            <div class="contact-txt">
              <h4>Location:</h4>
              <p class="mb-0">121 King Street, Melbourne
                Victoria 3000 Australia</p>
            </div>
          </div>
          <div class="contact-detail" data-aos="fade-up" data-aos-duration="700">
            <figure class="mb-0">
              <img src="assets/images/phone-img.png" alt="phone-img">
            </figure>
            <div class="contact-txt">
              <h4>Phone:</h4>
              <a href="tel:<?php print $sitePhone; ?>">(<?php print $sitePhone; ?>)</a>
            </div>
          </div>
          <div class="contact-detail" data-aos="fade-up" data-aos-duration="700">
            <figure class="mb-0">
              <img src="assets/images/mail-img.png" alt="mail-img">
            </figure>
            <div class="contact-txt">
              <h4>Email us at:</h4>
              <a href="mailto:<?php print $siteEmail; ?>"><?php print $siteEmail; ?></a>
            </div>
          </div>
        </div>
        <div class="contact-right-sec">
          <div class="contact-form ">
            <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">Get in Touch</span>
            <h2 data-aos="fade-up" data-aos-duration="700">Let’s Chat</h2>
            <p data-aos="fade-up" data-aos-duration="700">Ready to discuss how our personal care services can help you or your loved one? </p>
            <form class="form-box" method="post" id="contactpage" enctype="multipart/form-data">
              <ul class="list-unstyled ">
                <li data-aos="fade-up" data-aos-duration="700">
                  <input type="text" name="name" id="name" placeholder="First name:">
                  <i class="fas fa-user"></i>
                </li>

                <li data-aos="fade-up" data-aos-duration="700">
                  <input type="text" name="sname" id="sname" placeholder="Surname:">
                  <i class="fas fa-user"></i>
                </li>

                <li data-aos="fade-up" data-aos-duration="700">
                  <input type="email" placeholder="Email address:" name="email" id="email">
                  <i class="fas fa-envelope"></i>
                </li>
                <li data-aos="fade-up" data-aos-duration="700">
                  <input type="tel" name="phone" id="phone" placeholder="Phone number">
                  <i class="fas fa-phone-alt"></i>
                </li>
                <li data-aos="fade-up" data-aos-duration="700">
                  <textarea placeholder="How can we help?" name="message" id="message"></textarea>
                </li>
              </ul>
              <div class="submit-btn" data-aos="fade-up" data-aos-duration="700">
                <button type="button" onclick="contatMail()" id="submit">
                  Send Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="inquiry-section w-100 float-left">
    <div class="counter-outer-layer">
      <div class="container">
        <div class="inquiry-inner-sec">
          <div class="inquiry-text-sec">
            <!-- <span class="d-block" data-aos="fade-up" data-aos-duration="700">Our Mission</span> -->
            <h2 data-aos="fade-up" data-aos-duration="700">Our Mission</h2>
            <p data-aos="fade-up" data-aos-duration="700"><b>Purpose:</b> To deliver exceptional home care services that enable our clients to enjoy the comfort of their own homes while receiving the attention and personal assistance they need.</p>
            <p data-aos="fade-up" data-aos-duration="700"><b>Values:</b> Compassion, Respect, Integrity, and Excellence.</p>
            <div class="emergency-contact" data-aos="fade-up" data-aos-duration="700">
              <i class="fas fa-phone-alt"></i>
              <ul class="list-unstyled mb-0">
                <li>
                  <h4>For Any Emergency Case</h4>
                </li>
                <li>Call us at: <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></li>
              </ul>
            </div>
          </div>
          <div class="inquiry-image-sec position-relative" data-aos="fade-up" data-aos-duration="700">

            <figure class="mb-0 inquiry-center-img">
              <img src="img/nurse-checking-old-woman-with-her-stethoscope.jpg" alt="retractor-img">
            </figure>

          </div>
        </div>
      </div>
    </div>
  </div>



  <section style="margin-bottom: 80px;" class="patient-reviews-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
      <div class="generic-title text-center">
        <span class="small-text d-block" data-aos="fade-up" data-aos-duration="700">Testimonials</span>
        <h2 data-aos="fade-up" data-aos-duration="700">Hear From Our Happy Clients</h2>
      </div>
      <div id="owl-carouselfive" class="owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="700">
        <div class="item">
          <div class="patient-review-box">
            <figure>
              <img src="assets/images/stars-img.png" alt="stars-img">
            </figure>
            <p>“<?php print $siteName; ?> not only helped my mother recover from her surgery but also brought joy and companionship into her everyday life. We couldn’t have asked for better care.”</p>
            <div class="review-img-box">
              <figure class="mb-0">
                <img style="width: 50px !important;" src="img/female-avatar.svg" alt="patient-img">
              </figure>
              <ul class="list-unstyled mb-0">
                <li><span class="d-block">— Janet W.</span></li>
                <li>Happy Patient</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="patient-review-box">
            <figure>
              <img src="assets/images/stars-img.png" alt="stars-img">
            </figure>
            <p>“The team at <?php print $siteName; ?> is professional, empathetic, and very responsive. Knowing that my father is in such good hands has given our family peace of mind.”</p>
            <div class="review-img-box">
              <figure class="mb-0">
                <img style="width: 50px !important;" src="img/avatar.png" alt="patient-img2">
              </figure>
              <ul class="list-unstyled mb-0">
                <li><span class="d-block">— Michael D.</span></li>
                <li>Happy Patient</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="patient-review-box">
            <figure>
              <img src="assets/images/stars-img.png" alt="stars-img">
            </figure>
            <p>“The care my mother received from <?php print $siteName; ?> was compassionate and professional. It made a real difference in her life and ours.”</p>
            <div class="review-img-box">
              <figure class="mb-0">
                <img style="width: 50px !important;" src="img/avatar.png" alt="patient-img">
              </figure>
              <ul class="list-unstyled mb-0">
                <li><span class="d-block">— Jamie Oliver</span></li>
                <li>Happy Patient</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="patient-review-box">
            <figure>
              <img src="assets/images/stars-img.png" alt="stars-img">
            </figure>
            <p>“The staff are not only qualified but also genuinely caring. They made sure my father was comfortable and well-looked after in his final months.”</p>
            <div class="review-img-box">
              <figure class="mb-0">
                <img style="width: 50px !important;" src="img/female-avatar.svg" alt="patient-img2">
              </figure>
              <ul class="list-unstyled mb-0">
                <li><span class="d-block">— Clare Smyth</span></li>
                <li>Happy Patient</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="patient-review-box">
            <figure>
              <img src="assets/images/stars-img.png" alt="stars-img">
            </figure>
            <p>“The assistance I receive from my caregiver has helped me maintain my independence at home. I appreciate their professionalism and the genuine care they show.”</p>
            <div class="review-img-box">
              <figure class="mb-0">
                <img style="width: 50px !important;" src="img/female-avatar.svg" alt="patient-img">
              </figure>
              <ul class="list-unstyled mb-0">
                <li><span class="d-block">— Jeniffer</span></li>
                <li>Happy Patient</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="patient-review-box">
            <figure>
              <img src="assets/images/stars-img.png" alt="stars-img">
            </figure>
            <p>“The companion care from <?php print $siteName; ?> has brought so much joy to my mom's life. Her caregiver is not just a helper but a true friend to her. They enjoy gardening and crossword puzzles together, and I can see how much happier she is.”</p>
            <div class="review-img-box">
              <figure class="mb-0">
                <img style="width: 50px !important;" src="img/avatar.png" alt="patient-img2">
              </figure>
              <ul class="list-unstyled mb-0">
                <li><span class="d-block">— Ella S.</span></li>
                <li>Happy Patient</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <?php require_once('footer.php'); ?>