<?php
require_once('include.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $user_id = $_GET['id'];
} else {
    header("location:blog-detail");
}

$sql = query_sql("SELECT * FROM $news WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);

$active1 = 'active';
$title = $row['title'];
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
    <?php require_once('header.php'); ?>

    <section class="service-banner sub-banner-section w-100 float-left d-flex align-items-center">
        <div class="container">
            <div class="sub-banner-inner-con text-center">
                <h1 data-aos="fade-up" data-aos-duration="700">Blog Detail</h1>
                <p data-aos="fade-up" data-aos-duration="700"><?php print $row['title']; ?></p>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                    <ol class="breadcrumb d-inline-block mb-0">
                        <li class="breadcrumb-item d-inline-block"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="singleblog-section blogpage-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="main-box">
                        <figure class="image1" data-aos="fade-up" data-aos-duration="700">
                            <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="" class="img-fluid">
                        </figure>
                        <div class="content1" data-aos="fade-up" data-aos-duration="700">
                            <h4><?php print $row['title']; ?></h4>
                            <i class="fa-solid fa-user"></i>
                            <span class="text-size-14 text-mr">By : <?php print $row['admin_name']; ?></span>
                            <i class="mb-0 calendar fa-solid fa-calendar-days"></i>
                            <span class="mb-0 text-size-14"><?php print $row['date_post']; ?></span>
                            <p class="text-size-14"><?php print $row['news']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-12 column">

                    <div class="box1 box5" data-aos="fade-up" data-aos-duration="700">
                        <h5>Feeds</h5>
                        <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT 10");
                        if (mysqli_num_rows($sql) > 0) {
                            $c = 0;
                            while ($row = mysqli_fetch_assoc($sql)) { ?>
                                <div class="feed">
                                    <figure class="feed-image mb-0" data-aos="fade-up">
                                        <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="" class="img-fluid">
                                    </figure>
                                    <a href="blog-detail?id=<?php print $row['id']; ?>" class="mb-0"><?php print $row['title']; ?></a>
                                </div>
                            <?php $c++;
                            }
                        } else { ?>
                            <h4 style="padding: 20px;">No updates found!</h4>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('footer.php'); ?>