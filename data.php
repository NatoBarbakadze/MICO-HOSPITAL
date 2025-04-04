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



// ====== Book (appointment) and contact sections logic ====


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['form_type'])) {
        $formType = $_POST['form_type'];

        if ($formType === 'appointment') {
            $patientName = $_POST['inputPatientName'];
            $doctorName = $_POST['inputDoctorName'];
            $departmentName = $_POST['inputDepartmentName'];
            $phone = $_POST['inputPhone'];
            $symptoms = $_POST['inputSymptoms'];
            $appointmentDate = $_POST['inputDate'];

            if (($doctorName === 'Gega Jikuridze' && $departmentName !== 'Stomatology') ||
                ($doctorName === 'Shota Khurtsikidze' && $departmentName !== 'Cardiology') ||
                ($doctorName === 'Beka Koridze' && $departmentName !== 'Neurology')) {
            
                if ($doctorName === 'Gega Jikuridze') {
                    $departmentName = 'Stomatology';
                } elseif ($doctorName === 'Shota Khurtsikidze') {
                    $departmentName = 'Cardiology';
                } elseif ($doctorName === 'Beka Koridze') {
                    $departmentName = 'Neurology';
                }
            }
            if (($departmentName === 'Stomatology' && $doctorName !== 'Gega Jikuridze') ||
                ($departmentName === 'Cardiology' && $doctorName !== 'Shota Khurtsikidze') ||
                ($departmentName === 'Neurology' && $doctorName !== 'Beka Koridze')){
                    if ($departmentName === 'Stomatology') {
                        $doctorName = 'Gega Jikuridze';
                    } elseif ($departmentName === 'Cardiology') {
                        $doctorName = 'Shota Khurtsikidze';       
                    } elseif ($departmentName === 'Neurology') {
                        $doctorName = 'Beka Koridze';
                    }
        }
   
            $_SESSION['appointment'] = [
                'patientName' => $patientName,
                'doctorName' => $doctorName,
                'departmentName' => $departmentName,
                'phone' => $phone,
                'symptoms' => $symptoms,
                'appointmentDate' => $appointmentDate
            ];

    
            header('Location: confirmation.php');
            exit();


        } elseif ($formType === 'contact') {
    
            $fullName = htmlspecialchars($_POST['FullName']);
            $email = htmlspecialchars($_POST['Email']);
            $phoneNumber = htmlspecialchars($_POST['PhoneNumber']);
            $message = htmlspecialchars($_POST['Message']);

    
            $_SESSION['contact'] = [
                'fullName' => $fullName,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'message' => $message
            ];

       
            header('Location: patient.php');
            exit();
        }
    }
};


// ==== end of Book (appointment) and contact sections logic ====



// === book section ===


$visit_doctors = [
    [
        'value' => 'Gega Jikuridze',
        'data-department' => 'Stomatology',
        'name' => 'Gega Jikuridze'
    ],
    [
        'value' => 'Shota Khurtsikidze',
        'data-department' => 'Cardiology',
        'name' => 'Shota Khurtsikidze'
    ],
    [
        'value' => 'Beka Koridze',
        'data-department' => 'Neurology',
        'name' => 'Beka Koridze'
    ],
];


$departments = [
    [
        'value' => 'Stomatology',
        'name' => 'Stomatology' 
    ],
    [
        'value' => 'Cardiology',
        'name' => 'Cardiology' 
    ],
    [
        'value' => 'Neurology',
        'name' => 'Neurology' 
    ],

];


//  ==== end of book section ====



//  ==== contact section === 


$contact_form =[
    [
     'name' => 'FullName',
     'type' => 'text',
     'class' => ' ',
     'placeholder' => 'Full Name'
 ],
 [
     'name' => 'Email',
     'type' => 'email',
     'class' => ' ',
     'placeholder' => 'Email'
 ],
 [
     'name' => 'PhoneNumber',
     'type' => 'number',
     'class' => ' ',
     'placeholder' => 'Phone Number'
 ],
 [
     'name' => 'Message',
     'type' => 'text',
     'class' => 'message-box',
     'placeholder' => 'Message'
 ],
];


// ==== end of contact section ====




// === client section  ===

$testimonialData = [
    [
        'title' => 'Morijorch',
        'default' => 'Default model text',
        'paragraph' => "editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various",
    ],
    [
        'title' => 'Rochak',
        'default' => 'Default model text',
        'paragraph' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.",
    ],
    [
        'title' => 'Brad Johns',
        'default' => 'Default model text',
        'paragraph' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various",
    ]
];


// === end of client section  ====



// ==== info section ====

$info_top = [
        'img' => 'images/logo.png',
        'input' => 'email',
        'placeholder' => 'Your email',
        'button' => 'Subscribe'
];

$addresses = [
    [
        'icon' => 'fa fa-map-marker',
        'addr_placeholder' => 'Location',
        'aria' => 'aria-hidden="true"'
    ],
    [
        'icon' => 'fa fa-phone',
        'addr_placeholder' => 'Call +01 1234567890',
        'aria' => 'aria-hidden="true"'
    ],    
    [
        'icon' => 'fa fa-envelope',
        'addr_placeholder' => 'demo@gmail.com',
        'aria' => null
    ]
];

$social_boxes = [
    [
        'icon' => 'fa fa-facebook'
    ],
    [
        'icon' => 'fa fa-twitter'
    ],
    [
        'icon' => 'fa fa-linkedin'
    ],
    [
        'icon' => 'fa fa-instagram'
    ]
];

$useful_links = [
    [
        'link' => 'index.php',
        'addr_placeholder' => 'Home'
    ],
    [
        'link' => 'about.php',
        'addr_placeholder' => 'About'
    ],
    [
        'link' => 'treatment.php',
        'addr_placeholder' => 'Treatment'
    ],
    [
        'link' => 'doctor.php',
        'addr_placeholder' => 'Doctors'
    ],
    [
        'link' => 'testimonial.php',
        'addr_placeholder' => 'Testimonial'
    ],
    [
        'link' => 'contact.php',
        'addr_placeholder' => 'Contact us'
    ]
];

$latest_posts = [
    [
        'img' => 'images/post1.jpg',
        'placeholder' => 'Normal distribution'
    ],
    [

        'img' => 'images/post2.jpg',
        'placeholder' => 'Normal distribution'
    ]
];

$news = [
    [
        'img' => 'images/post3.jpg',
        'placeholder' => 'Normal distribution'
    ],
    [
        'img' => 'images/post4.png',
        'placeholder' => 'Normal distribution'
    ]
];


// ==== end of info section ====


// ==== footer section ====

$footer = [
    'text' => 'All Rights Reserved By',
    'link' => 'https://html.design/',
    'text_link' => 'Free Html Templates'
];

// ==== end of footer section ====