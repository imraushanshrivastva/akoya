<?php
$to = 'support@akoyaplus.com';
$siteName = "www.akoyaplus.com";
$yourname = $_POST['yourname'];
$yourphone= $_POST['yourphone'];
$message = '
<html>
<head>
<title></title>
</head>
<body>
<p><b>Dear Akoya Plus Team,</b></p>
<p><b>Enquiry From Visitor</b></p>
<p>Name : '.$yourname.' </p>
<p>Mobile No : '.$yourphone.' </p>
<p>Regards</p>
<p><b>Akoya Plus Team</b></p>
</body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Akoya Plus Team <support@akoyaplus.com>' . "\r\n";
if($yourname && $yourphone && $message!=NULL){
if(mail($to, $ssntax, $message, $headers))
{
$message= "Thank you for Contact US.";
header("Location:http://akoyaplus.com/thank-you.php");
}else{
	$message="Please try again.";
}
}
else{
	$message="All the fields marked by * should not be blank.";
}
?>