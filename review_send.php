<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>MAVIA | Register, Reservation, Questionare, Reviews form wizard</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="forms/css/bootstrap.min.css" rel="stylesheet">
	<link href="forms/css/style.css" rel="stylesheet">
	<link href="forms/css/responsive.css" rel="stylesheet">
	<link href="forms/css/animate.min.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="cforms/ss/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "index.html"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
						$mail = $_POST['email'];
						$to = "sales@designnearme.com";/* YOUR EMAIL HERE */
						$subject = "Popeyes King Wheels";
						$headers = "From: Review from Popeyes King Wheels <noreply@yourdomain.com>";
						$message = "DETAILS\n";
						$message .= "Service provided: " . $_POST['rating_input_1'];
						$message .= "\nProduct's quality: " . $_POST['rating_input_2'];
						$message .= "\nSupport: " . $_POST['rating_input_3'];
						$message .= "\nGeneral satisfaction: " . $_POST['rating_input_4'];
						$message .= "\nReview: " . $_POST['review'] . "\n";
						$message .= "\nUSER DETAILS";
						$message .= "\nFirst name: " . $_POST['firstname'];
						$message .= "\nLast name: " . $_POST['lastname'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelephone: " . $_POST['telephone'];
						$message .= "\nTerms and conditions accepted: " . $_POST['terms'];
												
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: sales@designnearme.com\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly.\n\nBELOW A SUMMARY\n\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
              <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                  <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                  <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
              </svg>
     </div>
<h4><span>Request successfully sent!</span>Thank you for your time</h4>
<small>You will be redirect back in 5 seconds.</small>
</div>
</body>
</html>