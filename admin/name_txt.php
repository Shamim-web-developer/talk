<?php
// Get the input text from the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $input_text = $_POST['name'];

// Open the text file for writing
$file = fopen('name.txt', 'w');

// Write the input text to the file
fwrite($file, $input_text);

// Close the file
fclose($file);

// Redirect the user back to the form page
header('Location: index.php');
exit();
}
?>
