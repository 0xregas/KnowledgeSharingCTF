<?php
	
	session_start();

	function validateOTP($userOTP){
		$otp = $_COOKIE['otp'];

		if ($userOTP == $otp){
			return true;
		}

		return false;
	}

	if (isset($_POST['otp'])){
		if (validateOTP($_POST['otp'])){
			#echo "valid OTP";
			header("Location: user.php");
		} else {
			echo "Invalid credentials";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OTP validation</title>
</head>
<body>

<div class="header">
	<h2>OTP Validation</h2>
</div>

<form action="/otp.php" method="post">
  <div class="container">

    <label for="otp"><b>OTP:</b></label>
    <input type="otp" placeholder="Enter OTP" name="otp" required>
        
    <button type="submit">Ok</button>
  </div>

</form>

</body>
</html>