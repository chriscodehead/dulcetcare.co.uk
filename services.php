<?php
require_once('include.php');
$active1 = 'active';
$title = 'Our Services - ' . $siteName;
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
    <?php require_once('header.php'); ?>

    <section class="service-banner sub-banner-section w-100 float-left d-flex align-items-center" style="background: url(img/social-worker-taking-care-senior-woman_23-2149031335.jpg) no-repeat center; background-size: auto; background-size: cover; width: 100%; height: 640px;">
        <div class="container">
            <div class="sub-banner-inner-con text-center">
                <h1 data-aos="fade-up" data-aos-duration="700">Services</h1>
                <p data-aos="fade-up" data-aos-duration="700">Our services are flexible and can be adjusted as your needs change. Whether you need a few hours of care a week or more extensive daily support, we are here to assist you.</p>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                    <ol class="breadcrumb d-inline-block mb-0">
                        <li class="breadcrumb-item d-inline-block"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="index3-service-section w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="generic-title text-center">
                <span class="small-text" data-aos="fade-up" data-aos-duration="700">Services We Provide</span>
                <h2 data-aos="fade-up" data-aos-duration="700">Comprehensive Home Care Solutions
                    <br />
                    You Can Choose
                </h2>
            </div>
            <div class="index3-service-con">

                <?php $sql = query_sql("SELECT * FROM $services_tb ORDER BY id ASC LIMIT 6");
                if (mysqli_num_rows($sql) > 0) {
                    $c = 0;
                    while ($row = mysqli_fetch_assoc($sql)) { ?>
                        <div class="service-type-box" data-aos="fade-up" data-aos-duration="700">
                            <figure>
                                <img src="<?php print 'photo/' . $row['image']; ?>" alt="service-couple">
                            </figure>
                            <h4><?php print $row['title']; ?></h4>
                            <p><?php print $bassic->reduceTextLength($row['description'], 120); ?></p>
                            <a href="service-details?id=<?php print $row['id']; ?>">Read More <i class="fas fa-angle-right"></i></a>
                        </div>

                    <?php $c++;
                    }
                } else { ?>
                    <h4 style="padding: 20px;">No services found!</h4>
                <?php } ?>



            </div>
        </div>
    </section>

    <section class="process-main-section w-100 float-left padding-top padding-bottom light-bg">
        <div class="container">
            <div class="process-inner-con">
                <div class="process-left-sec" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/process-left-img.jpg" alt="process-left-img">
                    </figure>
                </div>
                <div class="process-right-sec">
                    <div class="generic-title">
                        <span class="small-text" data-aos="fade-up" data-aos-duration="700">How it Works</span>
                        <h2 data-aos="fade-up" data-aos-duration="700">Discover our streamlined process for seamless access to personalized care solutions tailored to you.</h2>
                    </div>
                    <ul class="mb-0 list-unstyled" data-aos="fade-up" data-aos-duration="700">
                        <li>
                            <div class="process-img-sec">
                                <figure>
                                    <img src="assets/images/process-icon1.png" alt="process-icon1">
                                </figure>
                            </div>
                            <div class="process-text-con">
                                <h4>Talk to Us First</h4>
                                <p>Reach out for expert guidance and personalized care solutions tailored to your needs.</p>
                            </div>
                        </li>
                        <li>
                            <div class="process-img-sec">
                                <figure>
                                    <img src="assets/images/process-icon2.png" alt="process-icon2">
                                </figure>
                            </div>
                            <div class="process-text-con">
                                <h4>Book an Appointment</h4>
                                <p>Secure your spot easily and efficiently for prompt access to our exceptional services.</p>
                            </div>
                        </li>
                        <li>
                            <div class="process-img-sec">
                                <figure>
                                    <img src="assets/images/process-icon3.png" alt="process-icon3">
                                </figure>
                            </div>
                            <div class="process-text-con">
                                <h4>Come Sit With Us</h4>
                                <p>Join us for a warm and welcoming discussion about your care needs and preferences.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="generic-btn">
                        <a href="appointment">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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