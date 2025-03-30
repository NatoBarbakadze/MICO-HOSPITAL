<?php
include ('data.php');


//  ==== appointment function ====


function AppointmentConfirmation ($appointment)
{
    echo '<div class="new-container">';
        echo '<h2>Appointment Confirmation</h2>';
        echo "<p>Thank you, <strong>" . htmlspecialchars($appointment['patientName']) . "</strong>. Your appointment has been successfully booked!</p>";
        echo "<p><strong>Doctor's Name:</strong>" . ' ' . htmlspecialchars($appointment['doctorName']) . "</p>";
        echo "<p><strong>Department:</strong>" . ' ' . htmlspecialchars($appointment['departmentName']) ."</p>";
        echo "<p><strong>Phone Number:</strong>" . ' ' . htmlspecialchars($appointment['phone']) ."</p>";
        echo "<p><strong>Symptoms:</strong>" . ' ' . htmlspecialchars($appointment['symptoms'])."</p>";
        echo "<p><strong>Appointment Date:</strong>" . ' ' . htmlspecialchars($appointment['appointmentDate'])."</p>";
        echo "<p>We will contact you shortly to give further information. Thank you!</p>";
    echo '</div>';
};


// ==== end of appointment function ====




//  ==== contact function ==== 


function contact ($contact){
    echo '<div class="new-container">';
        echo '<h2>Contact Confirmation</h2>';
        echo '<p>Your form has been successfully submitted!</p>';
        echo '<p>Thank you for getting in touch. We will respond to your query soon.</p>';  
    echo '</div>';
};

//  ==== end of contact function  =====


?>
