<?php

$host="localhost"; //yout host name
$username="root";  //yout user name
$password="";      // your password

$db_name="asai";  // your database name
$tresponse="response";
$tquery="query";

$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysqli_select_db($con,"$db_name")or die("can not select DB"); //select your database
?>