<?php

include ('./data.php');

// ==== Header ======

function HeaderMain ($header_top, $header_logo_link, $navbar_nav, $navbar_end) {
  echo '<div class="header_top">';
    echo '<div class="container">';
        echo '<div class="contact_nav">';
          foreach ($header_top as $top) 
          {
            echo '<a href=" ' .$top ['link']. ' ">';
            echo '<i class=" ' .$top ['class']. ' " aria-hidden="true"></i>';
            echo '<span>';
            echo ' ' . $top ['span']. ' ';
            echo '</span>';
            echo '</a>';
          }    
        echo '</div>';
    echo '</div>';
  echo '</div>';

  echo '<div class="header_bottom">';

    echo '<div class="container-fluid">';
      echo '<nav class="navbar navbar-expand-lg custom_nav-container ">';
        echo '<a class="navbar-brand" href="index.php">';
          echo '<img src="' .$header_logo_link. ' " alt="">';
        echo '</a>';

        echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
          echo '<span class=""> </span>';
        echo '</button>';

        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
          echo '<div class="d-flex mr-auto flex-column flex-lg-row align-items-center">';
            echo '<ul class="navbar-nav  ">';
              foreach ($navbar_nav as $nav) 
              {
                echo '<li class="nav-item . ' .$nav ['class']. ' ">';
                  echo '<a class="nav-link" href="' .$nav ['link']. '"> ' .$nav ['title']. ' <span class="' .$nav ['class2']. '">' .$nav ['span']. '</span></a>';
                echo '</li>';
              }              
            echo '</ul>';
          echo '</div>';

          echo '<div class="quote_btn-container">';
            foreach ($navbar_end as $end) 
            {
              echo '<a href=" ' .$end ['link']. ' ">';
              echo '<i class="fa fa-user" aria-hidden="true"></i>';
              echo '<span>';
              echo ' ' .$end ['title']. ' ';
              echo '</span>';
              echo '</a>';
            }
    
            echo '<form class="form-inline">';
              echo '<button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">';
                echo '<i class="fa fa-search" aria-hidden="true"></i>';
              echo '</button>';
            echo '</form>';
          echo '</div>';
        echo '</div>';
      echo '</nav>';
    echo '</div>';
  echo '</div>';

};

//  ==== end of Header ====



// ==== slider section =====


function sliderSection ($dotImageLink, $sliders, $carousel_btn) {

  echo '<section class="slider_section ">';
    echo '<div class="dot_design">';
      echo '<img src="' .$dotImageLink. '" alt="">';
    echo '</div>';

    echo '<div id="customCarousel1" class="carousel slide" data-ride="carousel">';
      echo '<div class="carousel-inner">';

        foreach ($sliders as $index => $slider) 
        {
          $activeClass = ($index == 0) ? 'active' : '';
          echo '<div class="carousel-item ' . $activeClass . '">';
            echo '<div class="container ">';
              echo '<div class="row">';
                echo '<div class="col-md-6">';
                  echo '<div class="detail-box">';
                    echo '<div class="play_btn">';
                      echo '<button>';
                        echo '<i class="fa fa-play" aria-hidden="true"></i>';
                      echo '</button>';
                    echo '</div>';
                    echo '<h1>';
                    echo ' '.$slider ['title'].' ' . '<br>';
                      echo '<span>';
                        echo ' '.$slider ['span'].'';
                      echo '</span>';
                    echo '</h1>';
                    echo '<p>';
                    echo ''.$slider ['text'].'';
                    echo '</p>';
                    echo '<a href="">';
                    echo ' '.$slider ['button'].'';
                    echo '</a>';
                  echo '</div>';
                echo '</div>';
                echo '<div class="col-md-6">';
                  echo '<div class="img-box">';
                    echo '<img src=" ' . $slider ['sliderImageLink'] . '" alt="">';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';   
        }

      echo '</div>';
      
      echo '<div class="carousel_btn-box">';
        foreach ($carousel_btn as $btn) 
        {
          echo '<a class="'.$btn ['class'].'" href="#customCarousel1" role="button" data-slide="prev">';
          echo '<img src="' .$btn ['link'] .' " alt="">';
          echo '<span class="sr-only">' .$btn ['title'] .'</span>';
          echo '</a>';
        }
          
      echo '</div>';

    echo '</div>';

  echo '</section>';

};


// ==== end of slider section =====



// ==== about hospital section ====

function abouthospital ($about_hospital)
{
 
  foreach ($about_hospital as $about)
  {
    echo '<div class="container  ">';
      echo '<div class="row">';
        echo '<div class="col-md-6 ">';
          echo '<div class="img-box">';
            echo '<img src="'.$about['img'].'" alt="">';
          echo '</div>';
        echo '</div>';

        echo '<div class="col-md-6">';
          echo '<div class="detail-box">';
            echo '<div class="heading_container">';
              echo '<h2>';
                echo ' ' . $about['title'] . ' <span>' . $about['span'] . '</span>';
              echo '</h2>';
            echo '</div>';

            echo '<p>';
              echo $about ['text'];
            echo '</p>';

            echo '<a href="">';
              echo $about ['button'];
            echo '</a>';

          echo '</div>';
        echo '</div>';
  
      echo '</div>';
    echo '</div>';
  }
  
};


// === end of about hospital section ====




//  ==== hospital treatment section ====

function treatmentSection ($treatment_side_img_link, $treatment_section_title, $treatments){
  
  echo '<div class="side_img">';
    echo '<img src="'.$treatment_side_img_link.'" alt="">';
  echo '</div>';

  echo '<div class="container">';
    echo '<div class="heading_container heading_center">';
      echo '<h2>';
        echo $treatment_section_title;
      echo '</h2>';
    echo '</div>';
       
    echo '<div class="row">';
    foreach ($treatments as $treatment)
    {  
      echo '<div class="col-md-6 col-lg-3">';
        echo '<div class="box ">';
          echo '<div class="img-box">';
            echo '<img src="'.$treatment ['img_link'].'" alt="">';
          echo '</div>';
          echo '<div class="detail-box">';
            echo '<h4>';
              echo $treatment ['title'];
            echo '</h4>';
            echo '<p>';
              echo $treatment ['text'];
            echo '</p>';
            echo '<a href="">';
            echo $treatment ['more_info_link'];
            echo '</a>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    }
    echo '</div>';
    
  echo '</div>';

};


// ==== end of hospital treatment section ====



// ==== team section ====

function ourDoctors ($team_section_title, $doctors){
  echo '<div class="container">';

    echo '<div class="heading_container heading_center">';
      echo '<h2>';
        echo ' ' . $team_section_title . '';
      echo '</h2>';
    echo '</div>';
    
    echo '<div class="carousel-wrap ">';
      echo '<div class="owl-carousel team_carousel">';

        foreach ($doctors as $doctor) 
        {
          echo '<div class="item">';
            echo '<div class="box">';
              echo '<div class="img-box">';
                echo '<img src="'.$doctor ['img'].'" alt="" />';
              echo '</div>';
              echo '<div class="detail-box">';
                echo '<h5>';
                  echo ''.$doctor ['name'].'';
                echo '</h5>';
                echo '<h6>';
                  echo ''.$doctor ['degree'].'';
                echo '</h6>';
                echo '<div class="social_box">';

                  foreach ($doctor['social_network'] as $social)
                  {
                    echo '<a href="">';
                      echo '<i class="'.$social.'" aria-hidden="true"></i>';
                    echo '</a>';
                  }
                  
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        }
        
      echo '</div>';
    echo '</div>';
    
  echo '</div>';

};


// ==== end of team section ====



//   ==== book (appointment) section ====


function bookSection (){
  echo '<div class="container">';
  echo '<div class="row">';
    echo '<div class="col">';
      echo '<form action="index.php" method="POST">';
        echo '<h4>';
          echo 'BOOK <span>APPOINTMENT</span>';
        echo '</h4>';
        echo '<div class="form-row ">';
          echo '<input type="hidden" name="form_type" value="appointment">';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputPatientName">Patient Name </label>';
            echo '<input type="text" class="form-control" id="inputPatientName" name="inputPatientName" placeholder="" required>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo "<label for='inputDoctorName'>Doctor's Name</label>";
            echo '<select name="inputDoctorName" class="form-control wide" id="inputDoctorName" required>';
                echo '<option value="normal distribution">normal distribution</option>';
                echo '<option value="Gega Jikuridze" data-department="Stomatology">Gega Jikuridze</option>';
                echo '<option value="Shota Khurtsikidze" data-department="Cardiology">Shota Khurtsikidze</option>';
                echo '<option value="Beka Koridze" data-department="Neurology">Beka Koridze</option>';
            echo '</select>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo "<label for='inputDepartmentName'>Department's Name</label>";
            echo '<select name="inputDepartmentName" class="form-control wide" id="inputDepartmentName" required>';
                  echo '<option value="normal distribution">normal distribution</option>';
                  echo '<option value="Stomatology">Stomatology</option>';
                  echo '<option value="Cardiology">Cardiology</option>';
                  echo '<option value="Neurology">Neurology</option>';
            echo '</select>';
          echo '</div>';
        echo '</div>';
        echo '<div class="form-row ">';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputPhone">Phone Number</label>';
            echo '<input type="number" class="form-control" id="inputPhone" name="inputPhone" placeholder="XXXXXXXXXX" required>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputSymptoms">Symptoms</label>';
            echo '<input type="text" class="form-control" id="inputSymptoms" name="inputSymptoms" placeholder="" required>';
          echo '</div>';
          echo '<div class="form-group col-lg-4">';
            echo '<label for="inputDate">Choose Date </label>';
            echo '<div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">';
              echo '<input type="text" class="form-control" readonly name="inputDate" required>';
              echo '<span class="input-group-addon date_icon">';
                echo '<i class="fa fa-calendar" aria-hidden="true"></i>';
              echo '</span>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
        echo '<div class="btn-box">';
          echo '<button type="submit" class="btn ">Submit Now</button>';
        echo '</div>';
      echo '</form>';
    echo '</div>';
  echo '</div>';
echo '</div>';
};


// ==== end of book (appointment) section ====




//  ==== contact section ==== 


function contactSection ($contact_form){
  echo '<div class="container">';
    echo '<div class="heading_container">';
      echo '<h2>';
        echo 'Get In Touch';
      echo '</h2>';
    echo '</div>';
    echo '<div class="row">';
      echo '<div class="col-md-7">';
        echo '<div class="form_container">';
          echo '<form action="index.php" method="POST">';
            echo '<div>';
              echo '<input name="form_type" type="hidden" value="contact">';
            echo '</div>';
            foreach ($contact_form as $form) 
            {
              echo '<div>';
                echo '<input name="'. $form ['name'] .'" type="'. $form ['type'] .'" class=" '. $form ['class'] .' " placeholder=" '.$form ['placeholder']  .' "/>';
              echo '</div>';
            }     
            echo '<div class="btn_box">';
              echo '<button>';
                echo 'SEND';
              echo '</button>';
            echo '</div>';
          echo '</form>';
        echo '</div>';
      echo '</div>';
      echo '<div class="col-md-5">';
        echo '<div class="img-box">';
          echo '<img src="images/contact-img.jpg" alt="">';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
};


//  ==== end of contact section  ==== 