<?php include("header01.php"); ?>
<form action="sup_s6update.php">
<input name="supid" value="">
<input name="supcom" value="">
<input name="supadd" value="">
<input name="suppo" value="">
<input name="supph" value="">
<input type="submit" value="sup_s6update.php">
</form>
<?php

if (!isset($_GET['supid'])) { exit; }
require("sup_s1connect.php");
$sql.="update Suppliers set ";
$sql.="supid ='". $_GET['supid'] ."', ";
$sql.="comname ='". $_GET['supcom'] ."', ";
$sql.="address ='". $_GET['supadd'] ."', ";
$sql.="post ='". $_GET['suppo'] ."', ";
$sql.="phone ='". $_GET['supph'] ."' ";
$sql.="where supid='". $_GET['supid'] ."'";
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