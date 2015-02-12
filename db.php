<?php
define ("HOST","localhost");
define ("USERID","root");
define ("PASSWORD","");
define ("DB","tweetbox");

$db = mysqli_connect(HOST,USERID,PASSWORD,DB); 
	

if (mysqli_connect_errno()) {
	echo 'ERROR -- COULD NOT CONNECT TO DB';
	exit;
}
?>