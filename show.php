<?php
  // Won't display errors when variables aren't filled
  ini_set('display_errors', 0);
  
  // Connect to the Database
  include('inc/connect.php');
  
  // Get POST variables
  $submit   = $_POST['submit'];
  $date     = $_POST['date'];
  $location = $_POST['location'];
  $desc     = $_POST['desc'];
  
  // String messages
  $dateEr1  = 'Please enter a valid date.<br/><br/>';
  $dateEr2  = 'Please enter your date.<br/>';
  $locationEr1 = 'Please enter a valid location.<br/>';
  $locationEr2 = 'Please enter a location.<br/>';
  $msgEr    = 'Please enter a description.<br/><br/>';
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
 
  // When the submit button is pressed Validates and Sanitizes the data
  if(isset($submit)) {
      // Checking Date
      $error = cleanData($date, $dateEr1, $dateEr2);
      $errors .= $error;
      // Checking Location
      $error = cleanData($location, $locationEr1, $locationEr2);
      $errors .= $error;
      // Checking Description
      $error = cleanData($desc, $msgEr, $msgEr);
      $errors .= $error;
    
      // Check to see if there is errors
      if(!$errors) {
	  
          //Insert data in mysql database;
		  $sql = "INSERT INTO `blazing`.`vacation` (`id`, `date`, `location`, `desc`) VALUES (NULL, '$date', '$location', '$desc')";
		  
		  if(!mysql_query($sql)) {
					echo "<br /> Didn't work";
				} else {
					echo "Saved Results:<br>";
					echo $date . " | " . $location . " | " . $desc ."<br><br>";
					echo '<h1 style="color:green; margin-left:35%; margin-right:50%;">Vacation SUCCESSFULLY CREATED</h1>';
				}
		  
          echo "You have successfully submitted data!<br><br>";
      } else {
          echo $errors;
      }
  }
?>