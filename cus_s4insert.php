<?php include("header01.php"); ?>

<form action=cus_s4insert.php>
<input name=cusid value=>
<input name=comname value=>
<input name=con value=>
<input name=add value=>
<input name=phone value=>
<input type=submit value=cus_s4insert.php>
</form>
<?php

if (!isset($_GET['cusid']) || !isset($_GET['comname'])) exit;
require("cus_s1connect.php");
$sql="insert into $tb values('".$_GET['cusid']."','".$_GET['comname']."','".$_GET['con']."','".$_GET['add']."','".$_GET['phone']."')";
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