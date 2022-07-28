<?php

if(isset($_POST['submit1'])){
    $status=1;
    $name=$_POST['name'];  
    $email=$_POST['email'];    
    $select=$_POST['select'];
      
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = 'Enquiry <dkeshari094@gmail.com>';
  $subject = 'Contact Form';
  // $fields = array( 'name' => 'name' );
  $from = 'Aayushi water purifier';
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  
  $emailText = '
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="x-apple-disable-message-reformatting"> 
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
      <style>
          html,
  body {
      margin: 0 auto !important;
      padding: 0 !important;
      height: 100% !important;
      width: 100% !important;
      background: #f1f1f1;
  }
  * {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
  }
  
      </style>
  </head>
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
  <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Agreerent</a>
    </div>
    <p style="font-size:1.1em">Hi '.$name.'</p>
    <p>Please enter below OTP to verify your Email id.</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$select.'</h2>
    <p style="font-size:0.9em;">Regards,<br />Your Brand</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>Your Brand Inc</p>
      <p>1600 Amphitheatre Parkway</p>
      <p>California</p>
    </div>
  </div>
  </div>
  </body>
  </html>';
  
  try{
    foreach($_POST as $key => $value){
      if(isset($fields[$key])){
        $emailText.="$fields[$key]: $value\n";
      }
    }
   if( mail($sendTo,$subject,$emailText, "From:" .$from)){
    echo "<script>alert('message send sucessfully!')</script>";
   
   }else{
      echo "$sendTo $subject $emailText $from";
   }
  }
  catch(\Exception $e){
    echo "not done";
  }
 
  }
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/insurhtml/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 09:08:03 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Vaishali || Enterprises ||  </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Insurance & Finance Consultant. " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/insur.css" />
    <link rel="stylesheet" href="assets/css/insur-responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-address">
                            <ul class="list-unstyled main-header__top-address-list">
                                <li>
                                <i class="fas fa-phone"></i>
                                    <div class="text">
                                        <p> <a href="https://wa.me/91 9082391945">+91 9082391945</a></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon">
                                        <span class="icon-email"></span>
                                    </i>
                                    <div class="text">
                                        <p><a href="mailto:vaishalienterprises922@gmail.com">vaishalienterprises922@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            
                            <div class="main-header__top-social-box">
                                <div class="main-header__top-social">
                                    
                                    <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                                    
                                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="index.php"><img src="assets/images/resources/logo-1.png" alt=""></a>
                                </div>
                                <div class="main-menu__main-menu-box">
                                    <div class="">
                                         <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li class="activeclass">
                                                <a href="#home">Home </a>
                                            </li>
                                            <li class="dropdown activeclass">
                                                <a href="#insurance">Insurance</a>
                                               
                                            </li>
                                            <li class="dropdown activeclass">
                                                <a href="#services">Services</a>
                                                <ul>
                                                    
                                                    <li><a href="#car">Car insurance</a></li>
                                                    <li><a href="#life">Life insurance</a></li>
                                                    <li><a href="#home">Home insurance</a>
                                                    </li>
                                                    <li><a href="#health">Health insurance</a></li>
                                                    <li><a href="#business">Business insurance</a></li>
                                                    <li><a href="#fire">Fire insurance</a></li>
                                                    <li><a href="#marriage">Marriage insurance</a></li>
                                                    <li><a href="#travel">Travel insurance</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown activeclass">
                                                <a href="#team">Team</a>
                                                
                                            </li>
                                            <li class="activeclass">
                                                <a href="#about">About </a>
                                            </li>
                                            <li class="activeclass">
                                                <a href="#contact">Contact </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-menu__main-menu-box-search-get-quote-btn">
                                      
                                        <div class="main-menu__main-menu-box-get-quote-btn-box" >
                                            <a href="#contact"
                                                class="thm-btn main-menu__main-menu-box-get-quote-btn">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" style="height:430px;" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/page-header-bg.webp);height:420px;" ></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.webp" alt="" style="height:420px;">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content" id="home">
                                    <h2>Insurance for the <br>  better family
                                            <span>life.</span></h2>
                                        <br><p class="main-slider__text"><b>Let Your Money Work For You & Secured You...</b> </p>
                                        <div class="main-slider__btn-box">
                                            <a href="#" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-3.webp);height:420px; "></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.webp" alt="" style="height:420px;">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                    <h2>Insurance for the <br>  better family
                                            <span>life.</span></h2>
                                        <br><p class="main-slider__text"><b>Let Your Money Work For You & Secured You...</b> </p>
                                        <div class="main-slider__btn-box">
                                            <a href="#" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-3-1.webp);height:420px;"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-shape-1.webp" alt="" style="height:420px;">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                    <h2>Insurance for the <br>  better family
                                            <span>life.</span></h2>
                                        <br><p class="main-slider__text"><b>Let Your Money Work For You & Secured You...</b> </p>
                                        <div class="main-slider__btn-box">
                                            <a href="#" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms" id="insurance">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-insurance"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="assets/images/shapes/feature-one-shape-1.webp" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="#">Life Insurance</a></h3>
                                    <p class="feature-one__text"> The life insurance calculator gives you the 
                                        flexibility to design your life plan as per your needs. You can pick, 
                                         choose the premium payment life and payout method as per your financial plan.
                                   </p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms" id="insurance">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-cashback"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="assets/images/shapes/feature-one-shape-1.webp" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="#">Business Insurance</a></h3>
                                    <p class="feature-one__text">Business Insurance Policy (CGL) protects your organization and your business against any liability arising due to bodily injury, property damage or any personal injury caused to a third-party.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" id="insurance">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-house"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="assets/images/shapes/feature-one-shape-1.webp" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="#">Home Insurance 
                                    </a></h3>
                                    <p class="feature-one__text">Home insurance policy covers damage to the home and its contents against all the 12 perils specified under standard fire insurance policy including fire, lightning, explosion, aircraft damage, and impact damage.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url(assets/images/backgrounds/about-one-bg.webp);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/shapes/b1.webp" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="assets/images/shapes/b2.webp" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <h2 class="about-one__experience-year">20</h2>
                                    <p class="about-one__experience-text">Years of <br> Experience</p>
                                </div>
                                <div class="about-one__shape-1">
                                    <img src="assets/images/shapes/about-one-shape-1.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" id="about">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">About company</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.webp" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.webp" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">We provide the best insurance policy</h2>
                            </div>
                            <p class="about-one__text-1">A Better Future Starts Here...</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Customized plans from 10 different insurers.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Instant purchase, Immediate receipt.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Customer Support for all Endorsements Requests.</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="about-one__text-2">The insurance contract or agreement is a contract whereby the insurer promises to pay benefits to the insured or on their behalf to a third party if certain defined events occur. Subject to the "fortuity principle", the event must be uncertain. The uncertainty can be either as to when the event will happen </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Our services</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/section-title-shape-1.webp" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="assets/images/shapes/section-title-shape-2.webp" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">We’re covering all the insurance fields</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text">Live a Long Life with Protection. We insure quality. We GO Where You Go. A Business of Caring. We'll chase the recession </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="services-one__container">
                    <div class="row" id="services">
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/car1.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-drive"></span>
                                    </div>
                                    <h2 class="service-one__title" id="car"><a href="#">Car insurance</a></h2>
                                    <p class="service-one__text">The fastest growing sector in India as it is compulsory for all new cars. The value of the car, state where the car is registered and the year of manufacture. This amount can be reduced by asking the insurer for a no claim bonus (NCB) if no claim is made for insurance in previous year.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/blog-1.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-family"></span>
                                    </div>
                                    <h2 class="service-one__title" id="life"><a href="#">Life insurance</a></h2>
                                    <p class="service-one__text">A life insurance plan is a contract between an insurance policyholder, where the insurer promises to pay a sum of money in exchange for a premium after set period or upon the death of an insured person. Life insurance offers you and your family financial. </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/blog-2.jpg" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-home"></span>
                                    </div>
                                    <h2 class="service-one__title" id="home"><a href="#">Home insurance</a></h2>
                                    <p class="service-one__text">Home insurance policy covers damage to the home and its contents against all the 12 perils specified under standard fire insurance policy including fire, lightning, explosion, aircraft damage, and impact damage.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/medi1.webp" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-heart-beat"></span>
                                    </div>
                                    <h2 class="service-one__title" id="health"><a href="#">Health insurance</a>
                                    </h2>
                                    <p class="service-one__text">Health insurance policy is a product that protects you against the financial implications of a wide variety of health-related expenses, ranging from those caused by minor illnesses and injuries to critical diseases.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/s2.webp" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-briefcase"></span>
                                    </div>
                                    <h2 class="service-one__title" id="business"><a href="#">Business
                                            insurance</a></h2>
                                    <p class="service-one__text">Business Insurance Policy (CGL) protects your organization and your business against any liability arising due to bodily injury, any personal injury caused to a third-party.Business insurance protects businesses from any financial loss

                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/s3.webp" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-fire"></span>
                                    </div>
                                    <h2 class="service-one__title" id="fire"><a href="#">Fire insurance</a></h2>
                                    <p class="service-one__text">Fire insurance is property insurance that provides additional coverage for loss or damage to a structure damaged or destroyed in a fire.Fire insurance may be capped at a rate that is less than the cost of the losses accrued, fire insurance policy</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/s4.webp" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-ring"></span>
                                    </div>
                                    <h2 class="service-one__title" id="marriage"><a href="#">Marriage
                                            insurance</a></h2>
                                    <p class="service-one__text">Wedding is an auspicious event that marks a beginning of a new chapter in your life. It is the starting point of creating a family of your own. It is a once in a lifetime event that continues to bring you joy for the rest of your life. </p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="assets/images/shapes/s5.webp" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-plane"></span>
                                    </div>
                                    <h2 class="service-one__title"id="travel" ><a href="#">Travel insurance</a>
                                    </h2>
                                    <p class="service-one__text">Travel insurance is a unique product that offers you financial help in case something were to go wrong while you’re travelling. It covers a range of scenarios, including medical and dental emergencies, theft of your money</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one-shape-1"
                style="background-image: url(assets/images/shapes/why-choose-one-shape-1.webp);"></div>
            <div class="why-choose-one-shape-2 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-2.webp" alt="">
            </div>
            <div class="why-choose-one-shape-3 float-bob-x">
                <img src="assets/images/shapes/why-choose-one-shape-3.webp" alt="">
            </div>
            <div class="why-choose-one-shape-4 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-4.webp" alt="">
            </div>
            <div class="why-choose-one-shape-5 float-bob-y">
                <img src="assets/images/shapes/why-choose-one-shape-5.webp" alt="">
            </div>
            <div class="why-choose-one-shape-6 float-bob-x">
                <img src="assets/images/shapes/why-choose-one-shape-6.webp" alt="">
            </div>
            <div class="why-choose-one-img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="assets/images/shapes/img.webp" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Why choose</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-3.webp" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-4.webp" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Few reasons for people choosing insurance</h2>
                            </div>
                            <p class="why-choose-one__text">Term Insurance plan is a simple and pure risk cover form of life insurance.<br> It provides financial protection to your family against a fixed premium paid for a specified term. <br>You can get a large amount of term insurance cover (sum assured)<br> at affordable premiums.<br> The nominee receives the term insurance amount in case of death of the policyholder</p>
                            <div class="why-choose-one__list-box">
                                <ul class="list-unstyled why-choose-one__list">
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-easy-to-use"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Best Rates & Coverage</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">We help you discover any protection inclusions that are ideal for you.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-contract"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Easy Online Insurance</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">We can save you money.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-policy"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Control over policy</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Our life insurance is flexible, Support banking loan.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-fund"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Save your money</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">LA fast & easy application and
                                                    Growing your business</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Get Insurance Start-->
        <section class="get-insurance">
            <div class="get-insurance-bg"
                style="background-image: url(assets/images/backgrounds/get-insurance-bg.webp);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-insurance__left">
                            <div class="get-insurance__img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="assets/images/resources/get-insurance-img-1.webp" alt="">
                            </div>
                            <div class="get-insurance__author">
                                <p>Aleesha Rose</p>
                            </div>
                            <div class="get-insurance__circle"></div>
                            <div class="get-insurance__shape-1 float-bob-x">
                                <img src="assets/images/shapes/get-insurance-shape-1.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" id="contact">
                        <div class="get-insurance__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Free quote</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.webp" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.webp" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get an insurance quote <br> to get started!</h2>
                            </div>
                            <div class="get-insurance__tab">
                                <div class="get-insurance__tab-box tabs-box">
                                    <!-- <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#home2" class="tab-btn active-btn"><span>Home</span></li>
                                        <li data-tab="#vehicles" class="tab-btn"><span>Vehicles</span></li>
                                        <li data-tab="#health" class="tab-btn"><span>health</span></li>
                                        <li data-tab="#life" class="tab-btn"><span>Life</span></li>
                                    </ul> -->
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="home2">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form" method="post">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker" name="select"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit1">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!-- <div class="tab" id="vehicles">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div> -->
                                        <!--tab-->
                                        <!-- <div class="tab" id="health">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div> -->
                                        <!--tab-->
                                        <!-- <div class="tab" id="life">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select service</option>
                                                                <option value="1">service One</option>
                                                                <option value="2">service Two</option>
                                                                <option value="3">service Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="thm-btn get-insurance__btn" name="submit">Get a Quote
                                                        </button>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Get Insurance End-->

        <!--Counter One Start-->
     
        <!--Counter One End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="team-one__shape-1 float-bob-y">
                <img src="assets/images/shapes/team-one-shape-1.webp" alt="">
            </div>
            <div class="container">
            <div class="row">
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="section-title text-center">
                    <div class="section-sub-title-box" id="team">
                        <p class="section-sub-title">Our experts</p>
                        <div class="section-title-shape-1">
                            <img src="assets/images/shapes/section-title-shape-1.webp" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="assets/images/shapes/section-title-shape-2.webp" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Meet our experienced <br> team people</h2><br>
                    <br><h4 >Caring You because your Life is important.</h4>
                </div>
            </div>
                    <!--Team One Single Start-->
                    <!-- <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="assets/images/shapes/t2.jpg" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="#">Vedant Naidu</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="assets/images/shapes/t1.jpg" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    
                                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="#">Vaishali Salunkhe</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <!-- <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="assets/images/shapes/t3.jpg" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="#">Aniket Nangare</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!--Team One Single End-->
                </div>
                
            </div>
        </section>
        <!--Team One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-shape-2 float-bob-y">
                <img src="assets/images/shapes/testimonial-one-shape-2.webp" alt="">
            </div>
            <div class="testimonial-one-shape-3 float-bob-y">
                <img src="assets/images/shapes/testimonial-one-shape-3.webp" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__top">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">testimonials</p>
                                        <div class="section-title-shape-1">
                                            <img src="assets/images/shapes/section-title-shape-1.webp" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="assets/images/shapes/section-title-shape-2.webp" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">What our customers are <br> talking about</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-right">
                                <p class="testimonial-one__top-text">Always helpful and always available. The folks at (IC) are my insurance people, for everything…cars, boats, houses and that makes my life easier. Peace of mind would be enough, I Definitely recommend this family agency!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-2.webp" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/shapes/t5.webp" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.webp"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Sarikha Bhosale</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Our goal is to epitomize the dedicated local independent insurance agency. We prioritize listening to our clients then educate and advise them on the best coverage options and provide the most competitive price in the insurance marketplace.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-2.webp" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/shapes/t4.webp" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.webp"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Reema Varma</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text"> (the company) is committed to improving the quality of our community by insuring your life’s hard work. Setting a standard of excellence, our professional staff will help you understand your current and future risk exposures by building a lifelong relationship.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-1.webp" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/shapes/t6.webp" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.webp"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Aditya Shinde</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">This agency does a fantastic job finding me the right coverage and insurance company at a very competitive price every time my insurance renews. Very happy with them as my agent  all of your information will be  secure and private!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="assets/images/shapes/testimonial-one-shape-1.webp" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="assets/images/shapes/t7.webp" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="assets/images/testimonial/testimonial-1-quote.webp"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Snehal Ambvale</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Great local insurance company for personal and business related insurance. Get immediate insurance proof and easy payment options. Our mission is to help people manage the risks of everyday life, recover from the unexpected and realize their dreams.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--News One Start-->
      
        <!--News One End-->

       

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.webp);">
            </div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.php"><img src="assets/images/resources/footer-logo_11zon.webp" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    
                                    <p class="footer-widget__about-text">Let Your Money Work For You & Secured You...</p>
                                </div>
                                <div class="site-footer__social">
                                    
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contact</h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:vaishalienterprises922@gmail.com">vaishalienterprises922@gmail.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>Shop No.3, Suyash Society, sec.10, k.k Navi Mumbai-400709</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="footer-widget__open-hour">
                                    <h3 class="footer-widget__open-hour-title">Open Hours</h3>
                                    <h3 class="footer-widget__open-hour-text">Mon – Sat: 8:00 am to 6:00 pm Sunday:
                                        Closed</h3>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <p class="footer-widget__newsletter-text">Subscribe our newsletter to get our <br>
                                    latest update.</p>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                        <button type="submit" name="submit" class="footer-widget__newsletter-btn"><i
                                                class="far fa-paper-plane"></i></button>
                                    </div>
                                </form>
                                <div class="footer-widget__phone">
                                    <div class="footer-widget__phone-icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="footer-widget__phone-text">
                                        <a href="tel:+91 9082391945">+91 9082391945</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text" style="float:left;">© All Copyright 2022 by <a href="#">Vaishali Enterprises</a>
                                </p> <p class="site-footer__bottom-text" style="float:right;"><a href="https://tectignis.in" target="_blank">Designed By Tectignis IT Solutions.</a></p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo-2-11zon.webp" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:vaishalienterprises922@gmail.com">vaishalienterprises922@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+91 9082391945">+91 9082391945</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                  
                    <a href="https://www.facebook.com" class="fab fa-facebook-square"></a>
                    <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>


<script>
    $(".activeclass").click(function(){
        $(this).addClass('current');
    });
</script>
    <!-- template js -->
    <script src="assets/js/insur.js"></script>
</body>


<!-- Mirrored from layerdrops.com/insurhtml/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 09:08:03 GMT -->
</html>