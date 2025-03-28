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
