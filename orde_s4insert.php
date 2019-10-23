<?php include("header01.php"); ?>

<form action=orde_s4insert.php>
<input name=ordeid value=>
<input name=proid value=>
<input name=uni value=>
<input name=qua value=>
<input name=dis value=>
<input type=submit value=orde_s4insert.php>
</form>
<?php

if (!isset($_GET['ordeid']) || !isset($_GET['proid'])) exit;
require("orde_s1connect.php");
$sql="insert into $tb values('".$_GET['ordeid']."','".$_GET['proid']."','".$_GET['uni']."','".$_GET['qua']."','".$_GET['dis']."')";
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