<?php 
$myemail = "templates@creative-era.com"; // Change this email ID with your email ID
//$myemail = "inquiry@rapid-coder.com"; // Change this email ID with your email ID
$email = strip_tags($_POST['email']);
$formcontent = "<div style='width: 300px;'>";
$formcontent .= "<div style='background-color:#ff3b30; padding:4px; text-align:center; color:#ffffff;'>TICTOC CONTACT FORM</div>";
$formcontent .= "<div><p><b>Email:</b> " . $email . "</p></div>";
$formcontent .= "</div>";
$subject = "TICTOC contact form";
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($myemail, $subject, $formcontent, $headers) or die("Error");
?>