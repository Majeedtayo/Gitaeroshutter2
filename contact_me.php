<?php
// Check for empty fields
$name = $_POST['full_name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = 'info@aeroshuttergh.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Aeroshutter Support Center:  $name";
$email_body = "You have received a new message from your website Support Center.\n\n" . "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";




if(empty($_POST['full_name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	//echo "All fields required";
      $message = "All fields required";

      echo "<script type='text/javascript'>alert('$message');

window.location.href='contact.php';

</script>";


   }


	// Create the email and send the message


elseif(mail($to, $email_subject, $email_body, $headers)==true);
{
   $message = "Message sent!";

   echo "<script type='text/javascript'>alert('$message');

window.location.href='contact.php';

</script>";

}


//echo ("Mail Sent. We'll get back to you shortly ");


?>

