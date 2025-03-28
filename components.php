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