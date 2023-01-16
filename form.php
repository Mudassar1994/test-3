<?php
if(!empty($_POST["send"]))
    {
        
	$userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];


	$toEmail = "naseebshakhan@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Phone: ". $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

<?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>