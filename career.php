<?php
require_once('include.php');
$active1 = 'active';
$title = 'About ' . $siteName;
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
 <?php require_once('header.php'); ?>

 <section class="sub-banner-section w-100 float-left d-flex align-items-center" style="background: url(img/face-handsome-african-american-business-woman-holding-tablet-background-business-peoples-multiracial-team-meeting-sitting-office-table.jpg) no-repeat center; background-size: auto; background-size: cover; width: 100%; height: 640px;">
  <div class="container">
   <div class="sub-banner-inner-con text-center">
    <h1 data-aos="fade-up" data-aos-duration="700">Join Our Team</h1>
    <p data-aos="fade-up" data-aos-duration="700"> Explore a rewarding career in domiciliary care with <?php print $siteName; ?>. We offer a supportive work environment, competitive salaries, and opportunities for professional growth.</p>
    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
     <ol class="breadcrumb d-inline-block mb-0">
      <li class="breadcrumb-item d-inline-block"><a href="./">Home</a></li>
      <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Career</li>
     </ol>
    </nav>
   </div>
  </div>
 </section>



 <div class="inquiry-section w-100 float-left">
  <div class="counter-outer-layer">
   <div class="container">
    <div class="inquiry-inner-sec">
     <div class="inquiry-text-sec">
      <h2 data-aos="fade-up" data-aos-duration="700">Join Our Team</h2>
      <p data-aos="fade-up" data-aos-duration="700"><b>Opportunities:</b> Dive into a fulfilling career in domiciliary care with Dulcet Care. Our supportive work environment fosters growth, offering competitive salaries and avenues for professional development. Join us and make a meaningful impact in the lives of those we serve.</p>
      <p data-aos="fade-up" data-aos-duration="700"><b>Get in Touch:</b> </p>
      <div class="emergency-contact" data-aos="fade-up" data-aos-duration="700">
       <i class="fas fa-phone-alt"></i>
       <ul class="list-unstyled mb-0">
        <li>
         <h4>For Any Emergency Case</h4>
        </li>
        <li>Call us at: <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></li>
       </ul>
      </div>

      <div style="margin-top: 20px;" class="emergency-contact" data-aos="fade-up" data-aos-duration="700">
       <i class="fas fa-mail-bulk"></i>
       <ul class="list-unstyled mb-0">
        <li>Email: <a href="mailto:<?php print $siteEmail2; ?>"><?php print $siteEmail2; ?></a></li>
       </ul>
      </div>

      <div style="margin-top: 20px;" class="emergency-contact" data-aos="fade-up" data-aos-duration="700">
       <i class="fas fa-map-marker-alt"></i>
       <ul class="list-unstyled mb-0">
        <li>Office Location: <a href="#"><?php print $siteAddress; ?></a></li>
       </ul>
      </div>

      <div style="margin-top: 20px;" class="emergency-contact" data-aos="fade-up" data-aos-duration="700">
       <i class="fas fa-calendar"></i>
       <ul class="list-unstyled mb-0">
        <li>Hours of Operation: <a href="#">Monday to Friday, 9 AM to 5 PM</a></li>
       </ul>
      </div>
      <div class="col-12" style="padding-bottom: 50px;"></div>
     </div>
     <div class="inquiry-image-sec position-relative" data-aos="fade-up" data-aos-duration="700">

      <figure class="mb-0 inquiry-center-img">
       <img src="img/industrial-designers-working-3d-model.jpg" alt="retractor-img">
      </figure>

     </div>
    </div>
   </div>
  </div>
 </div>



 <?php require_once('footer.php'); ?>