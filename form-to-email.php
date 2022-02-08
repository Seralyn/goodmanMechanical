<?php
    
    $client_name = $_POST['firstName'].' '.$_POST['lastName'];
    $client_email = $_POST['email'];
    $client_phone = $_POST['phoneNumber'];
    $client_street_address = $_POST['streetAddress'];
    $client_street_address_2 = $_POST['addressLineTwo'];
    $client_city = $_POST['customerCity'];
    $client_state = $_POST['customerState']; 
    $client_zip = $_POST['customerZip'];
    $client_preferred_contact_method = $_POST['flexRadioDefault'];
    $client_preferred_call_time = $_POST['timeOfDayCall'];
    $client_comment = $_POST['descriptionMessage'];

    $email_from = "GoodmanMechanical.net";
    $email_subject = "New Quote Request";
    $email_body = 
    "Hey, Chris! A new quote request has come in! Here are the details-\n".
    "\n".
    "Name: $client_name\n".
    "Email: $client_email\n".
    "Phone Number: $client_phone\n".
    "Address: $client_street_address, $client_street_address_2, $client_city, $client_state, $client_zip\n".
    "Preferred Contact Method: $client_preferred_contact_method\n".
    "If Phone is preferred contact, this time of day: $client_preferred_call_time\n".
    "Client Comments: $client_comment";

    $to = "seralyn.dev@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $client_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    
    if (mail($to, $subject, $message, $headers)) {
        header('Location: thank_you.html');
    }
    else {
        echo "failed";
    }
    
?>