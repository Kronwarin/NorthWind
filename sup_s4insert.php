<?php include("header01.php"); ?>

<form action=sup_s4insert.php>
<input name=supid value=>
<input name=comname value=>
<input name=add value=>
<input name=post value=>
<input name=ph value=>
<input type=submit value=sup_s4insert.php>
</form>
<?php

if (!isset($_GET['supid']) || !isset($_GET['comname'])) exit;
require("sup_s1connect.php");
$sql="insert into $tb values('".$_GET['supid']."','".$_GET['comname']."','".$_GET['add']."','".$_GET['post']."','".$_GET['ph']."')";
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