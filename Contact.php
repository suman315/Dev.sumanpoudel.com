<?php
error_reporting(E_ALL ^ E_NOTICE);
function displayForm(){
$form = "<form action='http://dev.sumanpoudel.com/?page=4' method='post' class='form'>
<h2><b>Name <span>(required)</span></b></h2><input type='text' name='name' placeholder='Name' class='text' autofocus><br>
		<h2><b>Email <span>(required)</span></b></h2><input type='email' name='email' placeholder='Email' class='text'><br>
		<h2><b>Message <span>(required)</span></b></h2><textarea name='message' rows='6' cols='50' maxlength='500' placeholder='please put your message here'>
		</textarea><br>
		<input type='submit' name='Submit' value='Submit' class='submit'>
		</form>";
if($_POST['Submit']){
	$from =$_POST['email'];
	$message = $_POST['message'];
	$name = $_POST['name'];
	if(!empty($name)){
		if(!empty($from) && filter_var($from ,FILTER_VALIDATE_EMAIL)){
	if(!empty($message)){
	$message= htmlentities(htmlentities($message));
	$name= htmlentities(htmlentities($name));
$to = "suman.poudel2227@gmail.com";
$headers = "From: $from";
$subject = 'from my website';
if(mail($to, $subject, $message, $from)){
echo "<h2> thank you for contacting me</h2>";
echo"<b> i will try to reply ASAP</b>";
echo"<script type='text/javascript'>function gotohome(){
	setInterval(function(){window.location = '/'}, 3000);
}
gotohome();
</script>";
}else{
	echo "unabel to send mail at the moment please try again".$form;
}
}
else{
	echo "please provide message".$form;
}
}
else{
	echo "please provide your email".$form;
}
}
else{
	echo "please provide your name".$form;
}
}else{
	echo $form;
}
}