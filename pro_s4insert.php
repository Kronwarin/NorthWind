<?php include("header01.php"); ?>

<form action=pro_s4insert.php>
<input name=nid value=>
<input name=nname value=>
<input name=sup value=>
<input name=qpu value=>
<input name=up value=>
<input type=submit value=s4insert.php>
</form>
<?php

if (!isset($_GET['nid']) || !isset($_GET['nname'])) exit;
require("pro_s1connect.php");
$sql="insert into $tb values('".$_GET['nid']."','".$_GET['nname']."','".$_GET['sup']."','".$_GET['qpu']."','".$_GET['up']."')";
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