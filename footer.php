 <section class="footer-main-section w-100 float-left position-relative">
   <div class="container">
     <div class="subscribe-con d-flex">
       <h4>We are one call away</h4>
       <div class="form-sec">
         <a href="appointment"><button type="button" id="submit" class="sign-up-btn">Book Appointment</button></a>
       </div>
     </div>
     <div class="footer-inner-sec">
       <div class="footer-boxes">
         <div class="footer-logo-con">
           <a href="./">
             <figure>
               <img width="200" src="img/logo.png" alt="logo">
             </figure>
           </a>
           <p>At Dulcet Care, we believe in the power of compassionate care to transform lives. As a leading domiciliary social care organization, we are dedicated to providing exceptional support and assistance to individuals in need within the comfort of their own homes.</p>
           <div class="social-links">
             <ul class="list-unstyled mb-0 d-flex ">
               <li class="d-flex justify-content-center align-items-center"><a href="<?php print $siteFacebook; ?>"><i class="fab fa-facebook-f"></i></a>
               </li>
               <li class="d-flex justify-content-center align-items-center"><a href="<?php print $siteTwitter; ?>"><i class="fab fa-twitter"></i></a></li>
               <li class="d-flex justify-content-center align-items-center"><a href="<?php print $siteInstagram; ?>"><i class="fab fa-instagram"></i></a>
               </li>
             </ul>
           </div>
         </div>
       </div>
       <div class="footer-text-boxes">
         <h4>About Us</h4>
         <ul class="mb-0 list-unstyled">
           <li class="position-relative"><a href="about"><i class="fas fa-angle-right"></i>About
               us</a></li>
           <li class="position-relative"><a href="services"><i class="fas fa-angle-right"></i>Services</a></li>
           <li class="position-relative"><a href="blog"><i class="fas fa-angle-right"></i>Blog</a></li>
           <li class="position-relative"><a href="faqs"><i class="fas fa-angle-right"></i>FAQs</a></li>
           <li class="position-relative mb-0"><a href="contact"><i class="fas fa-angle-right"></i>Contact us</a>
           </li>
         </ul>
       </div>
       <div class="footer-text-boxes">
         <h4>Our Services</h4>
         <ul class="mb-0 list-unstyled">
           <li class="position-relative"><a href="services"><i class="fas fa-angle-right"></i>Personal Care</a>
           </li>
           <li class="position-relative"><a href="services"><i class="fas fa-angle-right"></i>Companion Care</a></li>
           <li class="position-relative"><a href="services"><i class="fas fa-angle-right"></i>Specialized Care</a>
           </li>
           <li class="position-relative"><a href="services"><i class="fas fa-angle-right"></i>Live-in Care</a>
           </li>
           <li class="position-relative mb-0"><a href="services"><i class="fas fa-angle-right"></i>Daily Assistance</a></li>
         </ul>
       </div>
       <div class="footer-text-boxes">
         <h4>Contact Info</h4>
         <ul class="mb-0 list-unstyled">
           <li class="position-relative"><a href="tel:<?php print $sitePhone; ?>"><i class="fas fa-phone-alt"></i><?php print $sitePhone; ?></a></li>
           <li class="position-relative"><a href="mailto:<?php print $siteEmail; ?>"><i class="fas fa-envelope"></i><?php print $siteEmail; ?></a></li>
           <li class="position-relative mb-0"><i class="fas fa-map-marker-alt"></i><?php print $siteAddress; ?></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
 <div class="copy-rihgt-sec w-100 float-left text-center">
   <p class="mb-0"><?php print $siteName; ?> copyright © <?php print $siteYear; ?>. All Rights Reserved. <br> Developed by <a target="_blank" href="https://centadesk.com">Centadesk</a></p>
 </div>
 <a id="button"></a>
 <!-- FOOTER SECTION END -->
 <script src="assets/js/jquery.min.js"></script>
 <script src="assets/js/popper.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/owl.carousel.js"></script>
 <script src="assets/js/aos.js"></script>
 <script src="assets/js/jquery.validate.js"></script>
 <script src="assets/js/contact-form.js"></script>
 <script src="assets/js/custom.js"></script>
 <script>
   $(window).on('load', function() {
     // Preloader
     $('.loader').fadeOut();
     $('.loader-mask').delay(350).fadeOut('slow');
   });
 </script>
 <script>
   $(window).on('load', function() {
     // Preloader
     $('.loader').fadeOut();
     $('.loader-mask').delay(350).fadeOut('slow');
   });
 </script>
 <script>
   AOS.init();
 </script>
 <script>
   var btn = $('#button');

   $(window).scroll(function() {
     if ($(window).scrollTop() > 300) {
       btn.addClass('show');
     } else {
       btn.removeClass('show');
     }
   });
   btn.on('click', function(e) {
     e.preventDefault();
     $('html, body').animate({
       scrollTop: 0
     }, '300');
   });
 </script>
 <script>
   $('#owl-carouselone').owlCarousel({
     loop: true,
     margin: 30,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       500: {
         items: 2,
         margin: 15
       },
       600: {
         items: 3,
         margin: 15
       },
       1000: {
         items: 3
       },
       1400: {
         items: 3
       },
       1600: {
         items: 4
       }
     }
   })
   $('#owl-carouseltwo').owlCarousel({
     loop: true,
     margin: 30,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       500: {
         items: 2,
         margin: 15
       },
       600: {
         items: 3,
         margin: 15
       },
       700: {
         items: 3,
         margin: 15
       },
       1000: {
         items: 3
       }
     }
   })
   $('#owl-carouselfour').owlCarousel({
     loop: true,
     margin: 30,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       500: {
         items: 2,
         margin: 15
       },
       600: {
         items: 3,
         margin: 15
       },
       700: {
         items: 3,
         margin: 15
       },
       1000: {
         items: 3
       }
     }
   })
 </script>
 <script>
   AOS.init();

   function lightbox_open() {
     var lightBoxVideo = document.getElementById("VisaChipCardVideo");
     //   window.scrollTo(0, 0);
     document.getElementById('light').style.display = 'block';
     document.getElementById('fade1').style.display = 'block';
     lightBoxVideo.play();
   }

   function lightbox_close() {
     var lightBoxVideo = document.getElementById("VisaChipCardVideo");
     document.getElementById('light').style.display = 'none';
     document.getElementById('fade1').style.display = 'none';
     lightBoxVideo.pause();
   }
 </script>
 <script>
   $(document).ready(function() {

     var counters = $(".count");
     var countersQuantity = counters.length;
     var counter = [];

     for (i = 0; i < countersQuantity; i++) {
       counter[i] = parseInt(counters[i].innerHTML);
     }

     var count = function(start, value, id) {
       var localStart = start;
       setInterval(function() {
         if (localStart < value) {
           localStart++;
           counters[id].innerHTML = localStart;
         }
       }, 40);
     }

     for (j = 0; j < countersQuantity; j++) {
       count(0, counter[j], j);
     }
   });

   $('.count').each(function() {
     $(this).prop('Counter', 0).animate({
       Counter: $(this).text()
     }, {
       duration: 3300,
       easing: 'swing',
       step: function(now) {
         $(this).text(Math.ceil(now));
       }
     });
   });
 </script>


 <script src="toast/jquery.toast.js"></script>
 <script src="toast/toast-functions.js"></script>

 <script>
   function appointmentMail() {
     $('i#sp5').attr("class", "fa fa-spinner fa-spin");
     var hr = new XMLHttpRequest();
     var url = "reg_process.php";
     var email = document.getElementById('email').value;
     var name = document.getElementById('name').value;
     var datepicker = document.getElementById('date').value;
     var doctor = document.getElementById('doctor').value;
     var department = document.getElementById('department').value;
     var phone = document.getElementById('phone').value;
     var message = document.getElementById('message').value;
     var appointmentMail = 'appointmentMail';

     var vars = "email=" + email + "&name=" + name + "&message=" + message + "&phone=" + phone + "&datepicker=" + datepicker + "&doctor=" + doctor + "&department=" + department + "&appointmentMail=" + appointmentMail;
     if (email == "" || name == "" || message == "") {
       sweetUnpre("Please fill all necessary fields!");
       $('i#sp5').attr("class", "");
     } else {
       var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       if (!emailReg.test(email)) {
         sweetUnpre('Please use a valid email address!');
         $('i#sp5').attr("class", "");
       } else {

         hr.open("POST", url, true);
         hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         // Access the onreadystatechange event for the XMLHttpRequest object
         hr.onreadystatechange = function() {
           //  console.log(hr);
           if (hr.readyState == 4 && hr.status == 200) {
             var return_data = hr.responseText;
             sweetUnpre(return_data);
             $('i#sp5').attr("class", "");
             //setTimeout(refreshPage,2000);
             if (return_data == 'Internal error. Mail fail to send') {

             } else {
               document.getElementById('email').value = "";
               document.getElementById('name').value = "";
               document.getElementById('message').value = "";
               document.getElementById('date').value = "";
               document.getElementById('doctor').value = "";
               document.getElementById('department').value = "";
               document.getElementById('phone').value = "";
             }
           }
         }
         hr.send(vars); // Actually execute the request
       } //email
       sweetUnpre('processing...');
     } //else empty
   }
 </script>

 <script>
   function contatMail() {
     $('i#sp5').attr("class", "fa fa-spinner fa-spin");
     var hr = new XMLHttpRequest();
     var url = "reg_process.php";
     var cotactmail = document.getElementById('email').value;
     var name = document.getElementById('name').value;
     var sname = document.getElementById('sname').value;
     var phone = document.getElementById('phone').value;
     var message = document.getElementById('message').value;
     var vars = "cotactmail=" + cotactmail + "&name=" + name + "&message=" + message + "&sname=" + sname + "&phone=" + phone;
     if (cotactmail == "" || name == "" || message == "") {
       sweetUnpre("Please fill all necessary fields!");
       $('i#sp5').attr("class", "");
     } else {
       var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       if (!emailReg.test(cotactmail)) {
         sweetUnpre('Please use a valid email address!');
         $('i#sp5').attr("class", "");
       } else {

         hr.open("POST", url, true);
         hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         // Access the onreadystatechange event for the XMLHttpRequest object
         hr.onreadystatechange = function() {
           //  console.log(hr);
           if (hr.readyState == 4 && hr.status == 200) {
             var return_data = hr.responseText;
             sweetUnpre(return_data);
             $('i#sp5').attr("class", "");
             //setTimeout(refreshPage,2000);
             if (return_data == 'Internal error. Mail fail to send') {

             } else {
               document.getElementById('email').value = "";
               document.getElementById('name').value = "";
               document.getElementById('sname').value = "";
               document.getElementById('message').value = "";
               document.getElementById('subject').value = "";
               document.getElementById('phone').value = "";
             }
           }
         }
         hr.send(vars); // Actually execute the request
       } //email
       sweetUnpre('processing...');
     } //else empty
   }
 </script>


 <script>
   $('#owl-carouselone').owlCarousel({
     loop: true,
     margin: 30,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       600: {
         items: 2,
         margin: 15
       },
       1000: {
         items: 4
       }
     }
   })
   $('#owl-carouseltwo').owlCarousel({
     loop: true,
     margin: 29,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       600: {
         items: 2,
         margin: 15
       },
       1000: {
         items: 2
       }
     }
   })
   $('#owl-carouselthree').owlCarousel({
     loop: true,
     margin: 30,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       600: {
         items: 2,
         margin: 15
       },
       1000: {
         items: 3
       }
     }
   })
   $('#owl-carouselfour').owlCarousel({
     loop: true,
     margin: 30,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       600: {
         items: 2
       },
       1000: {
         items: 3
       }
     }
   })
   $('#owl-carouselfive').owlCarousel({
     loop: true,
     margin: 30,
     nav: true,
     responsive: {
       0: {
         items: 1
       },
       600: {
         items: 1
       },
       1000: {
         items: 2
       }
     }
   })
 </script>
 </body>

 </html>