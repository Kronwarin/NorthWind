<?php include("header01.php"); ?>
<form action="sh_s6update.php">
<input name="shid" value="">
<input name="commname" value="">
<input name="phh" value="">
<input type="submit" value="sh_s6update.php">
</form>
<?php

if (!isset($_GET['shid'])) { exit; }
require("sh_s1connect.php");
$sql.="update Shippers set ";
$sql.="shid ='". $_GET['shid'] ."', ";
$sql.="comname ='". $_GET['commname'] ."', ";
$sql.="phone ='". $_GET['phh'] ."' ";
$sql.="where shid ='". $_GET['shid'] ."'";
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