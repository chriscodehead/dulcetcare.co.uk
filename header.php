<!-- Preloader -->
<div class="loader-mask">
 <div class="loader">
  <div></div>
  <div></div>
 </div>
</div>

<div class="header-main-con w-100 float-left">
 <div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light p-0">
   <a class="navbar-brand" href="./">
    <figure class="mb-0">
     <img src="img/logo.png" width="220" alt="logo">
    </figure>
   </a>
   <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
     <li class="nav-item"><a class="nav-link p-0" href="./">Home</a></li>
     <li class="nav-item">
      <a class="nav-link p-0" href="about">About</a>
     </li>
     <li class="nav-item">
      <a class="nav-link p-0" href="services">Services</a>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Help & Advice
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
       <!-- <a class="dropdown-item" href="faq">FQAs</a> -->
       <a class="dropdown-item" href="blog">Blog</a>
       <a class="dropdown-item" href="career">Career</a>
      </div>
     </li>
     <li class="nav-item">
      <a class="nav-link p-0" href="contact">Contact</a>
     </li>
    </ul>
    <div class="header-contact d-flex align-items-center">
     <div class="phone d-flex align-items-center">
      <figure class="mb-0">
       <img src="assets/images/phone.png" alt="phone">
      </figure>
      <div class="phone-txt">
       <span class="d-block">Call us now:</span>
       <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a>
      </div>
     </div>
    </div>
   </div>
   <div class="cart-box">
    <!-- <a href="#">
     <figure class="mb-0"><img src="assets/images/search-img.png" alt="search-img"></figure>
    </a>
    <a href="cart.html">
     <figure class="mb-0"><img src="assets/images/cart.png" alt="cart"></figure>
    </a> -->
   </div>
  </nav>
 </div>
</div>

<style>
 .card {
  width: 100%;
  height: 300px;
  border: 1px solid #ccc;
  border-radius: 10px;
  overflow: hidden;
 }

 .card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
 }
</style>