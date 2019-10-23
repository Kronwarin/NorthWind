<?php include("header01.php"); ?>
<form action="cus_s6update.php">
<input name="cusid" value="">
<input name="com" value="">
<input name="con" value="">
<input name="add" value="">
<input name="ph" value="">
<input type="submit" value="cus_s6update.php">
</form>
<?php

if (!isset($_GET['cusid'])) { exit; }
require("cus_s1connect.php");
$sql.="update Customers set ";
$sql.="cus ='". $_GET['cusid'] ."', ";
$sql.="company ='". $_GET['com'] ."', ";
$sql.="contact ='". $_GET['con'] ."', ";
$sql.="address ='". $_GET['add'] ."', ";
$sql.="phone ='". $_GET['ph'] ."' ";
$sql.="where cus ='". $_GET['cusid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";
	mysql_close($connect);
}
?>

<?php include("footer1.php"); ?>