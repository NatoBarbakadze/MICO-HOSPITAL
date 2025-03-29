<?php
// ===== Header ======

$header_top = [
    ['link' => ' ' ,
     'class'=> 'fa fa-phone',
     'span' => 'Call : +01 123455678990',
    ],
    ['link' => ' ' ,
     'class'=> 'fa fa-envelope',
     'span' => 'Email : demo@gmail.com',
    ],
    ['link' => ' ' ,
     'class'=> 'fa fa-map-marker',
     'span' => 'Location',
    ],

];


$header_logo_link='images/logo.png';


$navbar_nav= [
    ['class'=> 'active',
     'link'=> 'index.php',
     'title'=> 'Home',
     'class2' => 'sr-only',
     'span' => '(current)',
    ],
    ['class'=> ' ',
     'link'=> 'about.php',
     'title'=> 'About',
     'class2' => ' ',
     'span' => ' ',
    ],
    ['class'=> ' ',
     'link'=> 'treatment.php',
     'title'=> 'Treatment',
     'class2' => ' ',
     'span' => ' ',
    ],
    ['class'=> ' ',
     'link'=> 'doctor.php',
     'title'=> 'Doctors',
     'class2' => ' ',
     'span' => ' ',
    ],
    ['class'=> ' ',
     'link'=> 'testimonial.php',
     'title'=> 'Testimonial',
     'class2' => ' ',
     'span' => ' ',
    ],
    ['class'=> ' ',
     'link'=> 'contact.php',
     'title'=> 'Contact Us',
     'class2' => ' ',
     'span' => ' ',
    ],

];


$navbar_end = [
    [
     'link' => ' ',
     'title' => 'Login'
    ],
    [
     'link' => ' ',
     'title' => 'Sign Up'
    ],
];


//  ==== end of Header ====



// ==== slider section =====

$dotImageLink ='images/dots.png';



$sliders = [
    [
        'title'=> 'Mico',
        'span' => 'Hospital',
        'text'=> 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'button'=> 'Contact Us',
        'sliderImageLink'=> 'images/slider-img.jpg',
    ],
    [
        'title'=> 'Mico',
        'span' => 'Hospital',
        'text'=> 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'button'=> 'Contact Us',
        'sliderImageLink'=> 'images/slider-img.jpg',
    ],
    [
        'title'=> 'Mico',
        'span' => 'Hospital',
        'text'=> 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'button'=> 'Contact Us',
        'sliderImageLink'=> 'images/slider-img.jpg',
    ],
];

$carousel_btn = [
    [
        'class'=> 'carousel-control-prev',
        'link' => 'images/prev.png',
        'title' => 'Previous',
    ],
    [
        'class'=> 'carousel-control-next',
        'link' => 'images/next.png',
        'title' => 'Next',
    ],
];

// ==== end of slider section =====



//  ==== about hospital section ===

$about_hospital = [
    [
        'img' => 'images/about-img.jpg',
        'title' => 'About',
        'span' => 'Hospital',
        'text' => "has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors",
        'button' => 'Read More'
    ],

];


//  ==== end of about hospital section ====



// ==== hospital treatment section =====

$treatment_side_img_link='images/treatment-side-img.jpg';

$treatment_section_title= 'Hospital <span>Treatment</span>';

$treatments = [
    [
        'img_link'=>'images/t1.png',
        'title'=> 'Nephrologist Care',
        'text'=> "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'more_info_link'=> 'Read More',
    ],
    [
        'img_link'=>'images/t2.png',
        'title'=> 'Eye Care',
        'text'=> "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'more_info_link'=> 'Read More',
    ],
    [
        'img_link'=>'images/t3.png',
        'title'=> 'Pediatrician Clinic',
        'text'=> "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'more_info_link'=> 'Read More',
    ],
    [
        'img_link'=>'images/t4.png',
        'title'=> 'Parental Care',
        'text'=> "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        'more_info_link'=> 'Read More',
    ],
];



// ==== end of hospital treatment section ====



//  ==== team section ====

$team_section_title ='Our <span>Doctors</span>';

$doctors= [
    [
        'img' => 'images/team1.jpg',
        'name' => 'Hennry',
        'degree' => 'MBBS',
        'social_network' => ['fa fa-facebook', 'fa fa-twitter', 'fa fa-linkedin', 'fa fa-instagram']
    ],
    [
        'img' => 'images/team2.jpg',
        'name' => 'Jenni',
        'degree' => 'MBBS',
        'social_network' => ['fa fa-facebook', 'fa fa-twitter', 'fa fa-linkedin', 'fa fa-instagram']
    ],
    [
        'img' => 'images/team3.jpg',
        'name' => 'Morco',
        'degree' => 'MBBS',
        'social_network' => ['fa fa-facebook', 'fa fa-twitter', 'fa fa-linkedin', 'fa fa-instagram']
    ],

];


// ==== end of team section ====