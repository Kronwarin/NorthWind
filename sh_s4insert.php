<?php include("header01.php"); ?>

<form action=sh_s4insert.php>
<input name=shid value=>
<input name=comname value=>
<input name=phone value=>
<input type=submit value=sh_s4insert.php>
</form>
<?php

if (!isset($_GET['shid']) || !isset($_GET['comname'])) exit;
require("sh_s1connect.php");
$sql="insert into $tb values('".$_GET['shid']."','".$_GET['comname']."','".$_GET['phone']."')";
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