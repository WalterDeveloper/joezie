<?php
$statusMsg='';

    $email = $_POST['email'];
    $name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $birth = $_POST['birth'];
   

 $subject= $subject;

 // Sender
 $from = $name;
 $fromemail = $email;
 $fromName = 'DesignR Inc. Events & Decor';
 
  // Sender
                $from = 'ronaldowalter7@gmail.com';
                $fromName = 'JoeZie Fashion';
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";
 
 // Subject
 $emailSubject = 'Contact Request Submitted by '.$name;
 
 
 // Header for sender info
$headers = "From: $fromemail"." <".$from.">";
$email_message = 'Contact Request Submitted
                Name:                   '.$name.'
                Email:                   '.$email.'
                Surname:            '.$surname.'
                Phone Number: '.$phone.'
                Address:                '.$address.'
                City:                     '.$city.'
                Collection Or Deliver:    '.$state.'
                Cake Flavour:             '.$birth.'';
   




$toemail="ronaldowalter7@gmail.com";	

if(mail($toemail,$emailSubject, $email_message, $headers)){
  echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}else{
   $statusMsg= "Not sent";
}

   ?>