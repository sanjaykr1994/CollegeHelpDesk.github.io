<?php
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

//echo "$name $email";
$date=date("Y/m/d");
mysql_connect("localhost","root","");
mysql_select_db("helpdesk_db");
$insert="INSERT INTO `contact_table`(`id`, `Curdate`, `name`, `email`, `message`) VALUES ('','$date','$name','$email','$message')";
$query=mysql_query($insert);
if($query)
{
	echo "Your Information Saved";
	header('Refresh: 3; URL=project2.html');
}
else
	echo "Error";

?>