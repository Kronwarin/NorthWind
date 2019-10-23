<?php include("header01.php"); ?>
<form action="emp_s6update.php">
<input name="empid" value="">
<input name="empname" value="">
<input name="empbd" value="">
<input name="empadd" value="">
<input name="empph" value="">
<input type="submit" value="emp_s6update.php">
</form>
<?php

if (!isset($_GET['empid'])) { exit; }
require("emp_s1connect.php");
$sql.="update Employees set ";
$sql.="empid ='". $_GET['empid'] ."', ";
$sql.="empname ='". $_GET['empname'] ."', ";
$sql.="empbd ='". $_GET['empbd'] ."', ";
$sql.="empaddress ='". $_GET['empadd'] ."', ";
$sql.="empphone ='". $_GET['empph'] ."' ";
$sql.="where empid ='". $_GET['empid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";
	mysql_close($connect);
}
?>

<?php include("footer1.php"); ?>