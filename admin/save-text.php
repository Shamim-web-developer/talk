<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the user's input text
  $userText = $_POST['userText'];
  $txt ='name.txt';
  $userName = file_get_contents($txt);
  
date_default_timezone_set('Asia/Dhaka'); // Set the timezone to Dhaka

$current_time = date('Y-m-d, h:i A'); // Get the current time in 12-hour format with AM/PM

  $float = 'float: right;';
  $size = 'width:60px;border-radius:50%;padding-right: 10px;';
  $div ='display:flex;align-items: center;';
  // Create a string containing the time and the user's text 
//  $userName ='Md Shamim Hasan';
  $textToSave = "\n<div style='$div'><img style='$size' src='logo.png'><strong><h3>$userName</h3></div><br>=></strong>\n $userText\n <br><br><div style='$float'>[$current_time]</div><br><hr>\n\n";

  // Open the file for writing (or create it if it doesn't exist)
  $file = fopen('../text.txt', 'a');
  
  // Write the text to the file
  fwrite($file, $textToSave);
  
  // Close the file
  fclose($file);
  
  // Redirect the user back to the form
  header('Location: index.php');
  exit();
}
?>
