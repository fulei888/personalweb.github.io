<?php
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$address = $_POST["address"];
$subject = $_POST["subject"];
$other = $_POST["other"];
$message = $_POST["message"];
echo $name.",  ";
$msg = $name." ".$email." ".$website." ".$address." ".$subject." ".$other." ".$message;
echo "    thank you for your letter. I will contact you as soon as possible!";
$msg = wordwrap($msg,70);
mail("532630938@qq.com","This email is from your personal website",$msg);
?>