<?php 

$to ="anilb9850@gmail.com";
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$subtect =$_REQUEST['subject'];
$message =$_REQUEST['message'];
$header ="From : $email , name is $name";

//check input field

if(empty($name)|| empty($email) || empty($subtect) || empty($message))
{

	echo "Please fill all the field";
}
else
{
    mail($to,$subtect,$message,$header);


     echo "<script type='text/javascript'>alert(your message sent successfully)</script>";

}


?>