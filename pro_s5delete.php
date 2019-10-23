<?php include("header01.php"); ?>
<?php

$myForm = '<body>
<form action="pro_s5delete.php">
<input name="delid" value="1001">
<input type="submit" value="pro_s5delete.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("pro_s1connect.php");
$sql="delete from $tb ";
$sql.="where PID ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: pro_s0index.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: pro_s0index.php");
	mysql_close($connect);
}
?>
<?php include("footer1.php"); ?>