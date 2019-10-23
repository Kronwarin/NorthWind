<?php include("header01.php"); ?>

<form action=emp_s4insert.php>
<input name=empid value=>
<input name=empname value=>
<input name=empbd value=>
<input name=empadd value=>
<input name=empph value=>
<input type=submit value=emp_s4insert.php>
</form>
<?php

if (!isset($_GET['empid']) || !isset($_GET['empname'])) exit;
require("emp_s1connect.php");
$sql="insert into $tb values('".$_GET['empid']."','".$_GET['empname']."','".$_GET['empbd']."','".$_GET['empadd']."','".$_GET['wmpth']."')";
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