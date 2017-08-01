<?php

/* Coding by : Super Developer
   Design by : Super Developer
   
   Contact Us 
   Twitter   : @sudeveloperid
   Facebook  : @sudeveloperid
   Instagram : @sudeveloperid
   E-mail    : sudev719@gmail.com
*/

include_once("fungsi/db.php");
if(isset($_POST['pwg_id'])) {
	$pwg_id = trim($_POST['pwg_id']);
	$sql = "DELETE FROM sementara WHERE id in ($pwg_id)";
	$resultset = mysqli_query($MySQLiconn, $sql) or die("database error:". mysqli_error($MySQLiconn));
	echo $pwg_id;
}
?>
