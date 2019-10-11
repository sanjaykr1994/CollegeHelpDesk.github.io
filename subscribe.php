<?php
$email=$_POST["email"];

$date=date("Y/m/d");
mysql_connect("localhost","root","");
mysql_select_db("helpdesk_db");
$insert="INSERT INTO `subscribe`(`id`, `email`, `date`)  VALUES ('','$email','$date')";
$query=mysql_query($insert);
if($query)
{
	echo "you Subscribed";
	header('Refresh: 3; URL=project2.html');
}
else
	echo "Error";

?>