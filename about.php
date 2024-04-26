<?php
require_once('include.php');
$active1 = 'active';
$title = 'About ' . $siteName;
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
    <?php require_once('header.php'); ?>

    <section class="sub-banner-section w-100 float-left d-flex align-items-center">
        <div class="container">
            <div class="sub-banner-inner-con text-center">
                <h1 data-aos="fade-up" data-aos-duration="700">About us</h1>
                <p data-aos="fade-up" data-aos-duration="700">Caring for You at Home, Where Your Heart Is</p>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                    <ol class="breadcrumb d-inline-block mb-0">
                        <li class="breadcrumb-item d-inline-block"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="about-main-section about-us-about padding-top padding-bottom w-100 float-left position-relative">
        <div class="container position-relative">
            <div class="about-inner-con">
                <div class="about-img-con">
                    <figure class="mb-0" data-aos="fade-up" data-aos-duration="700">
                        <img src="assets/images/about-us-about-img.jpg" alt="about-us-about-img">
                    </figure>
                </div>
                <div class="about-txt-con">
                    <div class="generic-title" data-aos="fade-up" data-aos-duration="700">
                        <span class="small-text">About Us</span>
                        <h2 class="mb-0">At Dulcet Care, we believe in the power of compassionate care to transform lives</h2>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="700">As a leading domiciliary social care organization, we are dedicated to providing exceptional support and assistance to individuals in need within the comfort of their own homes.</p>
                    <p data-aos="fade-up" data-aos-duration="700">Our mission is simple yet profound: to enhance the quality of life for our clients by delivering personalized care solutions tailored to their unique needs and preferences. Whether it's assistance with daily activities, companionship, or specialized care for individuals with specific conditions, our team of experienced caregivers is committed to fostering independence, dignity, and well-being.</p>
                    <p data-aos="fade-up" data-aos-duration="700">What sets Dulcet Care apart is our unwavering commitment to excellence in every aspect of our service delivery. We prioritize hiring compassionate and skilled caregivers who undergo rigorous training and background checks to ensure the highest standards of care. Our person-centered approach means that we listen attentively to our clients and their families, working collaboratively to develop customized care plans that meet their evolving needs and preferences.</p>
                    <p data-aos="fade-up" data-aos-duration="700">With Dulcet Care, families can have peace of mind knowing that their loved ones are receiving the highest quality of care from dedicated professionals who genuinely care. We strive to create a warm and supportive environment where individuals can thrive and maintain their independence while receiving the assistance they require.</p>
                </div>
            </div>
            <div class="about-special-txt" data-aos="fade-up" data-aos-duration="700">
                <figure>
                    <img src="assets/images/about-quote-img.png" alt="about-quote-img">
                </figure>
                <h4>Caring for You at Home, Where Your Heart Is</h4>
            </div>
        </div>

    </section>

    <div class="inquiry-section w-100 float-left" style="padding-bottom: 50px;">
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
                            <img src="assets/images/retractor-img.jpg" alt="retractor-img">
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php require_once('footer.php'); ?>