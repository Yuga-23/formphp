<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];


//check input fields


if (empty($name)|| empty($email) || empty($message)) {
	echo "please fill all the fields";
	}
	else{
		mail("mdashik8900@gmail.com", "demo", $message, "From: $name <$email>");
		echo "<script type='text/javascript'>
		alert('your message sent successfully');
		window.history.log(-1);

		</script>";
	}
?>