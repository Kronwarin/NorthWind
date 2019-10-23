<?php include("header01.php"); ?>
<form action="ord_s6update.php">
<input name="ordide" value="">
<input name="cusid" value="">
<input name="empid" value="">
<input name="orddate" value="">
<input name="ship" value="">
<input type="submit" value="ord_s6update.php">
</form>
<?php

if (!isset($_GET['ordide'])) { exit; }
require("ord_s1connect.php");
$sql.="update Orders set ";
$sql.="ordid ='". $_GET['ordide'] ."', ";
$sql.="cusid ='". $_GET['cusid'] ."', ";
$sql.="empid ='". $_GET['empid'] ."', ";
$sql.="orddate ='". $_GET['orddate'] ."', ";
$sql.="ship ='". $_GET['ship'] ."' ";
$sql.="where ordid ='". $_GET['ordide'] ."'";
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
		echo "<meta http-equiv='refresh' content='0; index.php'/>";
	mysql_close($connect);
}
?>

<?php include("footer1.php"); ?>