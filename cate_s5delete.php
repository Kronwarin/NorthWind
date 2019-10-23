<?php include("header01.php"); ?>
<?php

$myForm = '<body>
<form action="cate_s5delete.php">
<input name="delid" value=".....">
<input type="submit" value="cate_s5delete.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("cate_s1connect.php");
$sql="delete from $tb ";
$sql.="where categoryid ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: index.php.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: cate_s0index.php");
	mysql_close($connect);
}
?>
<?php include("footer.php"); ?>