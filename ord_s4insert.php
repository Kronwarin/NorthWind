<?php include("header01.php"); ?>

<form action=ord_s4insert.php>
<input name=ordid value=>
<input name=cusid value=>
<input name=empid value=>
<input name=orddate value=>
<input name=ship value=>
<input type=submit value=ord_s4insert.php>
</form>
<?php

if (!isset($_GET['ordid']) || !isset($_GET['cusid'])) exit;
require("ord_s1connect.php");
$sql="insert into $tb values('".$_GET['ordid']."','".$_GET['cusid']."','".$_GET['empid']."','".$_GET['orddate']."','".$_GET['ship']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
<?php include("footer1.php"); ?>