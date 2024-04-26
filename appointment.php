<?php
require_once('include.php');
$active1 = 'active';
$title = 'Book Appointment - ' . $siteName;
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
 <?php require_once('header.php'); ?>

 <section class="service-banner sub-banner-section w-100 float-left d-flex align-items-center" style="background: url(img/young-woman-wearing-grey-turtleneck-eyeglasses.jpg) no-repeat center; background-size: auto; background-size: cover; width: 100%; height: 640px;">
  <div class="container">
   <div class="sub-banner-inner-con text-center">
    <h1 data-aos="fade-up" data-aos-duration="700">Book Appointment</h1>
    <p data-aos="fade-up" data-aos-duration="700">Are you interested in learning more about how our companion care can help enhance the life of your loved one? </p>
    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
     <ol class="breadcrumb d-inline-block mb-0">
      <li class="breadcrumb-item d-inline-block"><a href="./">Home</a></li>
      <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Book Appointment</li>
     </ol>
    </nav>
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
       <p class="mb-0"><?php print $siteAddress; ?></p>
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
      <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">Book Appointment</span>
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
         Book Appointment
        </button>
       </div>
      </form>
     </div>
    </div>
   </div>
   <div class="col-12" style="padding-bottom: 50px;"></div>
  </div>
 </section>

 <!-- <div class="index2-map-section w-100 float-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d331.28489877721745!2d144.95688568074652!3d-37.81977238709575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d52754eaecb%3A0x22f367daf52cbd47!2s21%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1696843179791!5m2!1sen!2s" width="600" height="578" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> -->

 <?php require_once('footer.php'); ?>