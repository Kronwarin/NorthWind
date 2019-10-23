<?php include("header01.php"); ?>
<form action="orde_s6update.php">
<input name="ordeid" value="">
<input name="prouid" value="">
<input name="unit" value="">
<input name="quan" value="">
<input name="disc" value="">
<input type="submit" value="orde_s6update.php">
</form>
<?php

if (!isset($_GET['ordeid'])) { exit; }
require("orde_s1connect.php");
$sql.="update Orderdetails set ";
$sql.="orderid ='". $_GET['ordeid'] ."', ";
$sql.="productid ='". $_GET['prouid'] ."', ";
$sql.="unitprice ='". $_GET['unit'] ."', ";
$sql.="quantity ='". $_GET['quan'] ."', ";
$sql.="discount ='". $_GET['disc'] ."' ";
$sql.="where orderid ='". $_GET['ordeid'] ."'";
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