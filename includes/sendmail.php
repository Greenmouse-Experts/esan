<?php

function sendResetEmail($userEmail,$encrypted)
{
    $subject="Reset Password";
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Reset mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Please click on the link below to reset your password:.</p>
        <a href=http://associationofesanprofessionals.com/reset.php?token='.$encrypted.'>Reset Email!</a>
      </div>
    </body>

    </html>';

    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to  = $userEmail;
    // // Mail it
    mail($to, $subject, $body, $headers);
}

function sendContactEmail($senderemail,$sendername,$senderphone,$sendermessage,$subject)
{
    
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact Mail</title>
      <style>
   
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
      
        <p> Message received from '. $senderemail.' </p>
        <p>Senders Name '. $sendername.' </p>
        <p>Senders Phone '. $senderphone.' </p>
        <h2 style="font-weight:bolder;">Message</h2>
        <p>'. $sendermessage.' </p>
      </div>
    </body>

    </html>';

    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to  = "esanprofessionals@gmail.com";
    // // Mail it
    $result=mail($to, $subject, $body, $headers);
    

    if ($result > 0) {
      $_SESSION['message'] = " your message was sent successfully ";
      header('Location:../contact-us.php');
      die();
    } else {
      $_SESSION['error'] = " Your message  was not sent  ";
      header('Location:../contact-us.php');
      die();
    }
}



function sendApplyEmail($applyemail,$name,$attachment,$subject)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact Mail</title>
      <style>
      body{
        background-color:blue;
      }
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
      
        <p> Message received from '. $applyemail.' </p>
        <p>Senders Name '. $name.' </p>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message($subject))
        ->setFrom($applyemail)
        ->setTo('promisebeeceo@gmail.com')
        ->setReplyTo($applyemail)
        ->setBody($body, 'text/html')
        ->attach(Swift_Attachment::fromPath($_FILES['attachment']['tmp_name'])
        ->setFilename($_FILES['attachment']['name']));
    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
      $_SESSION['message'] = " your application was successful  ";
      header('Location:../aep-job.php');
      die();
    } else {
      $_SESSION['error'] = " Your Application was not sent please try again   ";
      header('Location:../aep-job.php');
      die();
    }
}


function sendApprovalEmail($email)
{
    $subject="Your Membership Application has been aprroved";
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Reset mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Your registeration has been approved</p>
        <p>Click on this link to login to your dashboard
          <a href=http://associationofesanprofessionals.com/login.php></a>
        </p>
      </div>
    </body>

    </html>';

    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to  = "esanprofessionals@gmail.com";
    // // Mail it
    $result=mail($to, $subject, $body, $headers);

}






