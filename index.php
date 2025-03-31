<?php
session_start();
?>


<?php
include ('./components.php');
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- favicon -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

</head>

<body>

  <div class="hero_area">

    <!-- header section starts -->
     
    <header class="header_section">

      <?php
        HeaderMain ($header_top, $header_logo_link, $navbar_nav, $navbar_end);
      ?>

    </header>

    <!-- end header section -->


    
    <!-- slider section -->
  

    <?php
      sliderSection ($dotImageLink, $sliders, $carousel_btn);
    ?>
      
   
    <!-- end slider section -->

  </div>


  <!-- book section -->

    <section class="book_section layout_padding">

      <?php
        bookSection ($visit_doctors, $departments);
      ?>
    </section>


  <!-- end book section -->



  <!-- about section -->

  <section class="about_section">

    <?php
      abouthospital ($about_hospital);
    ?>

  </section>

  <!-- end about section -->


  
  <!-- treatment section -->

    <section class="treatment_section layout_padding">

      <?php
        treatmentSection ($treatment_side_img_link, $treatment_section_title, $treatments);
      ?>
      
    </section>

  <!-- end treatment section -->
   


  <!-- team section -->

  <section class="team_section layout_padding">

    <?php
      ourDoctors ($team_section_title, $doctors);
    ?>

  </section>

  <!-- end team section -->


  
  <!-- client section -->

    <?php
      setTestimonial($testimonialData);
    ?>

  <!-- end client section -->

  

  <!-- contact section -->

    <section class="contact_section layout_padding-bottom">
      <?php
        contactSection ($contact_form);
      ?>
    </section>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section ">

    <?php
      infoSection($info_top, $addresses, $social_boxes, $useful_links, $latest_posts, $news);
    ?>

  </section>

  <!-- end info section -->


  <!-- footer section -->

  <footer class="footer_section">

    <?php
      footer($footer);
    ?>

  </footer>
  
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>