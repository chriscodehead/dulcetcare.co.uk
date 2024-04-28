<?php
require_once('include.php');
$active1 = 'active';
$title = 'Welcome to ' . $siteName;
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
    <?php require_once('header.php'); ?>

    <section class="banner-main-section w-100 float-left d-flex align-items-center">
        <div class="container-fluid">
            <div class="banner-inner-con">
                <div class="banner-txt-section">
                    <span class="small-txt position-relative" data-aos="fade-up" data-aos-duration="700">
                        Caring for You at Home, Where Your Heart Is
                    </span>
                    <h1 data-aos="fade-up" data-aos-duration="700">Welcome to <?php print $siteName; ?></h1>
                    <p data-aos="fade-up" data-aos-duration="700">At <?php print $siteName; ?>, we understand the importance of comfortable and compassionate home care. We are committed to providing personalized care services that uphold dignity, foster independence, and enhance the quality of life for each individual we serve.</p>
                    <div class="banner-btns generic-btn" data-aos="fade-up" data-aos-duration="700">
                        <a href="appointment">Book Appointment</a>
                        <a href="about">Read More</a>
                    </div>
                </div>
                <div class="banner-images-con" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/banner-right-img1.png" alt="banner-right-img1">
                    </figure>
                    <figure class="mb-0">
                        <img src="assets/images/banner-right-img2.png" alt="banner-right-img2">
                    </figure>
                    <figure class="mb-0">
                        <img src="assets/images/banner-right-img3.png" alt="banner-right-img3">
                    </figure>
                </div>
            </div>
            <div class="social-links" data-aos="fade-up" data-aos-duration="700">
                <ul class="list-unstyled mb-0">
                    <li><a href="<?php print $siteFacebook; ?>"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="<?php print $siteTwitter; ?>"><i class="fab fa-twitter"></i></a></li>
                    <li class="mb-0"><a href="<?php print $siteInstagram; ?>"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
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

    <section style="display: none;" class="service-main-section w-100 float-left padding-top padding-bottom light-bg">
        <div class="container">
            <div class="generic-title text-center">
                <span class="small-text" data-aos="fade-up" data-aos-duration="700">Services We Provide</span>
                <h2 class="mb-0" data-aos="fade-up" data-aos-duration="700">Comprehensive Home Care Solutions
                    <br>
                    You Can Choose
                </h2>
            </div>
            <div class="service-slider" data-aos="fade-up" data-aos-duration="700">
                <div id="owl-carouselone" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="treatment-types text-center">
                            <figure>
                                <img src="assets/images/treatment-img1.jpg" alt="treatment-img1">
                            </figure>
                            <div class="type-img">
                                <figure class="mb-0">
                                    <img src="assets/images/type-img1.png" alt="type-img1">
                                </figure>
                            </div>
                            <h4>Couple Therapy</h4>
                            <p>Duis aute irure dolor
                                reprehenderit in volutae
                                velit esse fugiat...</p>
                            <a href="services.html">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="treatment-types text-center">
                            <figure>
                                <img src="assets/images/treatment-img2.jpg" alt="treatment-img2">
                            </figure>
                            <div class="type-img">
                                <figure class="mb-0">
                                    <img src="assets/images/type-img2.png" alt="type-img2">
                                </figure>
                            </div>
                            <h4>Family Counseling</h4>
                            <p>Ruis aute irure dolor
                                reprehenderit in volutae
                                velit esse fugiat...</p>
                            <a href="services.html">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="treatment-types text-center">
                            <figure>
                                <img src="assets/images/treatment-img3.jpg" alt="treatment-img3">
                            </figure>
                            <div class="type-img">
                                <figure class="mb-0">
                                    <img src="assets/images/type-img3.png" alt="type-img3">
                                </figure>
                            </div>
                            <h4>Anxiety Disorder</h4>
                            <p>Nuis aute irure dolor
                                reprehenderit in volutae
                                velit esse fugiat...</p>
                            <a href="services.html">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="treatment-types text-center">
                            <figure>
                                <img src="assets/images/treatment-img4.jpg" alt="treatment-img4">
                            </figure>
                            <div class="type-img">
                                <figure class="mb-0">
                                    <img src="assets/images/type-img4.png" alt="type-img4">
                                </figure>
                            </div>
                            <h4>Personal Meeting</h4>
                            <p>Guis aute irure dolor
                                reprehenderit in voluptae
                                velit esse fugiat...</p>
                            <a href="services.html">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="treatment-types text-center">
                            <figure>
                                <img src="assets/images/treatment-img3.jpg" alt="treatment-img3">
                            </figure>
                            <div class="type-img">
                                <figure class="mb-0">
                                    <img src="assets/images/type-img3.png" alt="type-img3">
                                </figure>
                            </div>
                            <h4>Anxiety Disorder</h4>
                            <p>Nuis aute irure dolor
                                reprehenderit in volutae
                                velit esse fugiat...</p>
                            <a href="services.html">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-main-section padding-top w-100 float-left position-relative">
        <div class="container position-relative">
            <div class="about-inner-con">
                <div class="about-img-con" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/about-img.jpg" alt="about-img">
                    </figure>
                </div>
                <div class="about-txt-con">
                    <div class="generic-title">
                        <span class="small-text" data-aos="fade-up" data-aos-duration="700">About Us</span>
                        <h2 class="mb-0" data-aos="fade-up" data-aos-duration="700">At <?php print $siteName; ?>, we believe in the power of compassionate care to transform lives.</h2>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="700">As a leading domiciliary social care organization, we are dedicated to providing exceptional support and assistance to individuals in need within the comfort of their own homes.</p>
                    <p data-aos="fade-up" data-aos-duration="700">Our mission is simple yet profound: to enhance the quality of life for our clients by delivering personalized care solutions tailored to their unique needs and preferences. Whether it's assistance with daily activities, companionship, or specialized care for individuals with specific conditions, our team of experienced caregivers is committed to fostering independence, dignity, and well-being.</p>
                    <p data-aos="fade-up" data-aos-duration="700">What sets <?php print $siteName; ?> apart is our unwavering commitment to excellence in every aspect of our service delivery. We prioritize hiring compassionate and skilled caregivers who undergo rigorous training and background checks to ensure the highest standards of care...</p>
                    <ul class="list-unstyled" data-aos="fade-up" data-aos-duration="700">
                        <li>Personal Care</li>
                        <li>Live-In Care</li>
                        <li>Specialized Care</li>
                        <li>Companion Care</li>
                    </ul>
                    <div class="generic-btn" data-aos="fade-up" data-aos-duration="700">
                        <a href="about">Read More</a>
                    </div>
                </div>
            </div>
            <div style="margin-top: -100px;" class="about-video-box">
                <figure class="mb-0">
                    <img src="assets/images/about-video-img.jpg" alt="about-video-img">
                </figure>
                <div class="btn-outer">
                    <!-- <a href="javascript:void(0)" onclick="lightbox_open();">
                        <div class="video-wrap">
                            <img src="assets/images/video-play-icon.png" alt="video-play-icon">
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
        <div id="light">
            <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
            <iframe src="" allowfullscreen=""></iframe>
        </div>

        <div id="fade1" onClick="lightbox_close();"></div>
    </section>


    <div class="inquiry-section w-100 float-left">
        <div class="counter-outer-layer">
            <div class="container">
                <div class="inquiry-inner-sec">
                    <div class="inquiry-text-sec">
                        <h2 data-aos="fade-up" data-aos-duration="700">Join Our Team</h2>
                        <p data-aos="fade-up" data-aos-duration="700"><b>Opportunities:</b> Dive into a fulfilling career in domiciliary care with Dulcet Care. Our supportive work environment fosters growth, offering competitive salaries and avenues for professional development. Join us and make a meaningful impact in the lives of those we serve.</p>
                        <p data-aos="fade-up" data-aos-duration="700"><b>Start your application:</b> </p>
                        <div class="banner-btns generic-btn" data-aos="fade-up" data-aos-duration="700">
                            <a href="<?php print $siteApplicationLink; ?>">Apply Now</a>
                        </div>

                        <div class="col-12" style="padding-bottom: 50px;"></div>
                    </div>
                    <div class="inquiry-image-sec position-relative" data-aos="fade-up" data-aos-duration="700">

                        <figure class="mb-0 inquiry-center-img">
                            <img src="img/meeting-sitting-office-table.jpg" alt="retractor-img">
                        </figure>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="process-main-section w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="process-inner-con">
                <div class="process-left-sec" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="assets/images/process-left-img.jpg" alt="process-left-img">
                    </figure>
                </div>
                <div class="process-right-sec">
                    <div class="generic-title">
                        <span class="small-text" data-aos="fade-up" data-aos-duration="700">Why Choose Us?</span>
                        <h2 data-aos="fade-up" data-aos-duration="700">Compassionate Care in the Comfort of Your Home</h2>
                        <p data-aos="fade-up" data-aos-duration="700">At <?php print $siteName; ?>, we bring professional care right to your doorstep. Our personalized home care services are designed to ensure that you or your loved one can enjoy life to the fullest, with dignity and independence, right where you feel most comfortable—at home.</p>
                    </div>
                    <ul class="mb-0 list-unstyled">
                        <li data-aos="fade-up" data-aos-duration="700">
                            <div class="process-img-sec">
                                <figure>
                                    <img src="assets/images/process-icon1.png" alt="process-icon1">
                                </figure>
                            </div>
                            <div class="process-text-con">
                                <h4>Trusted Expertise:</h4>
                                <p>With years of experience and a passionate team of certified professionals, we provide reliable and high-quality care tailored to meet the unique needs of each client.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="700">
                            <div class="process-img-sec">
                                <figure>
                                    <img src="assets/images/process-icon2.png" alt="process-icon2">
                                </figure>
                            </div>
                            <div class="process-text-con">
                                <h4>Comprehensive Services:</h4>
                                <p>From personal care and specialized care to live-in support and companion services, we offer a complete range of solutions to ensure that all your health and daily living needs are met.</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="700">
                            <div class="process-img-sec">
                                <figure>
                                    <img src="assets/images/process-icon3.png" alt="process-icon3">
                                </figure>
                            </div>
                            <div class="process-text-con">
                                <h4>Dedicated Support:</h4>
                                <p>Our staff are not just caregivers, they are advocates and friends who are committed to enhancing the wellbeing and happiness of our clients.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="generic-btn" data-aos="fade-up" data-aos-duration="700">
                        <a href="appointment">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 float-left contact-con position-relative">
        <div class="padding-top padding-bottom contact-inner-con position-relative">
            <div class="container">
                <div class="contact-form ">
                    <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">Book With Us Now</span>
                    <h2 data-aos="fade-up" data-aos-duration="700">Get an Appointment</h2>
                    <p data-aos="fade-up" data-aos-duration="700">Secure your spot effortlessly with our convenient appointment booking service, ensuring prompt access to the care and attention you deserve.
                    </p>
                    <form class="form-box" enctype="multipart/form-data" method="post" id="contactpage">
                        <ul class="list-unstyled ">
                            <li data-aos="fade-up" data-aos-duration="700">
                                <input type="text" name="name" id="name" placeholder="Your Name:">
                                <i class="fas fa-user"></i>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="700">
                                <input type="email" placeholder="Email address:" name="email" id="email">
                                <i class="fas fa-envelope"></i>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="700">
                                <select name="department" id="department">
                                    <option value="department">Choose department</option>
                                    <option value="department1">department 1</option>
                                    <option value="department2">department 2</option>
                                    <option value="department3">department 3</option>
                                </select>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="700">
                                <select name="doctor" id="doctor">
                                    <option value="doctor">Choose doctor</option>
                                    <option value="doctor1">doctor 1</option>
                                    <option value="doctor2">doctor 2</option>
                                    <option value="doctor3">doctor 3</option>
                                </select>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="700">
                                <input placeholder="Date & Time" type="date" id="date" name="date">
                            </li>
                            <li data-aos="fade-up" data-aos-duration="700">
                                <input type="tel" name="phone" id="phone" placeholder="Phone Number">
                                <i class="fas fa-phone-alt"></i>
                            </li>
                        </ul>
                        <div class="for-group">
                            <textarea class="form-control" name="message" id="message" rows="5" style="border: none;font-size: 14px; height: 100px; color: #fff !important; width: 100%; background: #ef916c; box-shadow: 0 0 0 1px #f3ad91; padding: 10px 35px 10px 23px; border-radius: 5px;" placeholder="Write Your Message Here....."></textarea>
                        </div>
                        <div style="margin-top: 30px;" class="submit-btn" data-aos="fade-up" data-aos-duration="700">
                            <button type="button" id="submit" onclick="appointmentMail()">
                                Make an Appointment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs-section w-100 float-left padding-top padding-bottom light-bg">
        <div class="container">
            <div class="generic-title text-center">
                <span class="small-text d-block" data-aos="fade-up" data-aos-duration="700">Articles & Tips</span>
                <h2 data-aos="fade-up" data-aos-duration="700">Latest News & Blogs</h2>
            </div>
            <div class="blogs-inner-con" data-aos="fade-up" data-aos-duration="700">
                <div id="owl-carouselfour" class="owl-carousel owl-theme">

                    <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT 3");
                    if (mysqli_num_rows($sql) > 0) {
                        $c = 0;
                        while ($row = mysqli_fetch_assoc($sql)) { ?>
                            <div class="item">
                                <div class="blog-box">
                                    <div class="blog-img-box card">
                                        <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="#">
                                    </div>
                                    <div class="blog-details">
                                        <span class="d-block"><i class="fas fa-calendar-alt"></i> <?php print $row['date_post']; ?></span>
                                        <h4><a href="blog-detail?id=<?php print $row['id']; ?>"><?php print $row['title']; ?></a></h4>
                                        <p><?php print $bassic->reduceTextLength($row['news'], 100); ?></p>
                                        <a href="blog-detail?id=<?php print $row['id']; ?>">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php $c++;
                        }
                    } else { ?>
                        <h4 style="padding: 20px;">No updates found!</h4>
                    <?php } ?>

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