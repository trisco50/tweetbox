<?php
//Change for github practice
require 'db.php';

//PREPARE DATABASE FOR NEW ENTRY
$query = "SELECT * FROM Messages ORDER BY MessageID ASC";

//CALL QUERY
$results = mysqli_query($db, $query);

if (isset($_POST['submit'])) {
	$message = $_POST[('messageText')];
	echo $_POST[('messageText')];
}

$message = 'messageText';
if (!empty($message)) {
//INSERT COMMENT INTO tweetbox DATABASE
$insert_query = "INSERT INTO tweetbox (Message) VALUES (?)";

//PREPARE SQL STATEMENT
$stmt = mysqli_prepare($db, $insert_query);

//BIND PARAMETERS
mysqli_stmt_bind_param($stmt,'s', $message);

//EXECUTE STATEMENT
mysqli_stmt_execute($stmt);

//IF ADDED TO DATABASE, DISPLAY ALL TWEETS (MESSAGES)
echo "";
mysqli_insert_id($db);
include("message.php");
}
mysqli_close($db);
?>