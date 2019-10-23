<?php include("header01.php"); ?>
<form action="pro_s6update.php">
<input name="id" value="">
<input name="name" value="">
<input name="sup" value="">
<input name="qpu" value="">
<input name="up" value="">
<input type="submit" value="s6update.php">
</form>
<?php

if (!isset($_GET['id'])) { exit; }
require("pro_s1connect.php");
$sql.="update productsTest set ";
$sql.="PID ='". $_GET['id'] ."', ";
$sql.="Pname ='". $_GET['name'] ."', ";
$sql.="SupID ='". $_GET['sup'] ."', ";
$sql.="QPU ='". $_GET['qpu'] ."', ";
$sql.="UP ='". $_GET['up'] ."' ";
$sql.="where PID ='". $_GET['id'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro_s0index.php'/>";
	mysql_close($connect);
}
?>

<?php include("footer1.php"); ?>