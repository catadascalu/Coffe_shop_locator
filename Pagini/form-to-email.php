<?php
$numec=$_post['q'];
$servicu1=$_post['criteriu1'];
$servicu2=$_post['criteriu2'];
$servicu3=$_post['criteriu3'];
$servicu4=$_post['criteriu4'];
$servicu5=$_post['criteriu5'];
$servicu6=$_post['criteriu6'];
$servicu7=$_post['criteriu7'];
$servicu8=$_post['criteriu8'];
$pret=$_post['raspuns'];
$oras=$_post['oras']
$nume=$_post['name'];
$email=$_post['email'];
$descriere=$_post['descriere'];
$email_subject="New Form submission";
$email_body="You have received a new message form the user $nume.\n"."Here is the message:\n $numec $servicu1 $servicu2 $servicu3 $servicu4 $servicu5 $servicu6 $servicu7 $servicu8 $oras 
$descriere
$to="coffeemaps@yahoo.com";
$headers="Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
function IsInjected($str)
{
$injections = array('(\n+)',
'(\r+)',
'(\t+)',
'(%0A+)',
'(%0D+)',
'(%08+)',
'(%09+)'
);
$inject = join('|', $injections);
$inject = "/$inject/i";
if(preg_match($inject,$str))
{
return true;
}
else
{
return false;
}
}
if(IsInjected($email))
{
echo "Bad email value!";
exit;
}
?>

