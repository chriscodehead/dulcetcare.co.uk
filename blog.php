<?php
require_once('include.php');
$active1 = 'active';
$title = 'Blog - ' . $siteName;
$description = $siteName . ' Caring for You at Home, Where Your Heart Is';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php');

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$no_of_records_per_page = 100;
$offset = ($page - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $news";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
?>

<body>
  <?php require_once('header.php'); ?>
  <style>
    .card {
      width: 100%;
      height: 200px;
      border: 1px solid #ccc;
      border-radius: 10px;
      overflow: hidden;
    }

    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .pagination .pagination-list li {
      margin-right: 5px;
      display: inline-block;
    }

    .pagination .pagination-list li a {
      background: #f6f7fb;
      color: #666;
      padding: 6px 18px;
      font-weight: 400;
      border: 1px solid #e1e1e1;
      font-size: 16px;
      border-radius: 4px;
    }
  </style>
  <section class="service-banner sub-banner-section w-100 float-left d-flex align-items-center">
    <div class="container">
      <div class="sub-banner-inner-con text-center">
        <h1 data-aos="fade-up" data-aos-duration="700">Blog Post</h1>
        <p data-aos="fade-up" data-aos-duration="700">
          At Dulcet Care, we bring professional care right to your doorstep.
        </p>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
          <ol class="breadcrumb d-inline-block mb-0">
            <li class="breadcrumb-item d-inline-block">
              <a href="./">Home</a>
            </li>
            <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">
              Blog
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <div class="blog-posts blogpage-section w-100 float-left">
    <div class="container">
      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
        <div id="blog" class="col-xl-12">
          <div class="row">


            <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
            if (mysqli_num_rows($sql) > 0) {
              $c = 0;
              while ($row = mysqli_fetch_assoc($sql)) { ?>

                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="blog-box fourcolumn-blog float-left w-100 post-item mb-4" data-aos="fade-up" data-aos-duration="700">
                    <div class="post-item-wrap position-relative">
                      <div class="post-image">
                        <a href="blog-detail?id=<?php print $row['id']; ?>" class="card">
                          <img alt="" src="<?php print 'photo/' . $row['post_image']; ?>" />
                        </a>
                      </div>
                      <div style="padding: 26px 20px 20px;">
                        <i class="fas fa-user"></i>
                        <span class="text-size-14 text-mr">By : <?php print $row['admin_name']; ?></span>
                        <h3><a href="blog-detail?id=<?php print $row['id']; ?>" style="color: #06c !important;"><?php print $bassic->reduceTextLength($row['title'], 20); ?></a></h3>
                        <p class="mb-0 text-size-16">
                          <?php print $bassic->reduceTextLength($row['news'], 80); ?>
                        </p>
                      </div>
                      <div class="button-portion">
                        <div class="date">
                          <i class="fas fa-calendar-alt"></i>
                          <span class="mb-0 text-size-14"><?php print $row['date_post']; ?></span>
                        </div>
                        <div class="button">
                          <a class="mb-0 text-decoration-none" href="blog-detail?id=<?php print $row['id']; ?>">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php $c++;
              }
            } else { ?>
              <h4 style="padding: 20px;">No updates found!</h4>
            <?php } ?>


            <div class="col-12" style="margin-top: 50px;">

              <div class="pagination">
                <!-- <ul class="pagination-list">
         <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
         <li class="active"><a href="#">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
        </ul> -->


                <ul class="pagination-list">
                  <li><a href="?page=1">First</a></li>
                  <li class="<?php if ($page <= 1) {
                                echo 'disabled';
                              } ?>">
                    <a href="<?php if ($page <= 1) {
                                echo '#';
                              } else {
                                echo "?page=" . ($page - 1);
                              } ?>"><i class="icofont-rounded-left"></i> Prev</a>
                  </li>
                  <li class="<?php if ($page >= $total_pages) {
                                echo 'disabled';
                              } ?>">
                    <a href="<?php if ($page >= $total_pages) {
                                echo '#';
                              } else {
                                echo "?page=" . ($page + 1);
                              } ?>">Next <i class="icofont-rounded-right"></i></a></a>
                  </li>
                  <li><a href="?page=<?php echo $total_pages; ?>">Last</a></li>
                </ul>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('footer.php'); ?>