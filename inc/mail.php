<?php
  // Won't display errors when variables aren't filled
  ini_set('display_errors', 0);
  
  // Get POST variables
  $submit     = $_POST['submit'];
  $user_name  = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $msg        = $_POST['msg'];
  // String messages
  $nameEr1  = 'Please enter a valid name.<br/><br/>';
  $nameEr2  = 'Please enter your name.<br/>';
  $emailEr1 = 'Please enter a valid email address.<br/>';
  $emailEr2 = 'Please enter your email address.<br/>';
  $msgEr    = 'Please enter a message to send.<br/><br/>';
  $errors     = '';
  
  // CleanData function Filters and Sanitizes user input data 
  function cleanData($data, $er1, $er2) {
    if (!empty($data)) {
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        echo $data."<br>";
        if (empty($data)) {
           $errors .= $er1;
           echo $errors;
        }
    } else {
          $errors .= $er2;
      }
    return $errors;
  }
  
  // When the submit button is pressed Validates and Santizes the data
  if(isset($submit)) {
      // Checking User Name
      $error = cleanData($user_name, $nameEr1, $nameEr2);
      $errors .= $error;
      // Checking User Email
      $error = cleanData($user_email, $emailEr1, $emailEr2);
      $errors .= $error;
      // Checking Message
      $error = cleanData($msg, $msgEr, $msgEr);
      $errors .= $error;
    
      // Check to see if there is erros
      if(!$errors) {
          $mail_to = 'wesleegalloway@gmail.com';
          $header  = 'From: '. $_POST['user_name'];
          $subject = 'New Mail from Business website Form Submission';
          $message = 'From: '. $_POST['user_name'] . "\n".
                     'Email: '. $_POST['user_email'] . "\n".
                     'Message:\n'. $_POST['msg']. "\n\n";
          mail($mail_to, $subject, $message, $header);
          //echo $message;
          echo "Thank you for your email!<br><br>";
      } else {
          echo $errors;
      }
  }
?>