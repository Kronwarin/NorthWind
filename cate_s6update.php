<?php include("header01.php"); ?>
<form action="cate_s6update.php">
<input name="idd" value="">
<input name="namee" value="">
<input name="des" value="">
<input type="submit" value="cate_s6update.php">
</form>
<?php

if (!isset($_GET['idd'])) { exit; }
require("cate_s1connect.php");
$sql.="update Categories set ";
$sql.="categoryid ='". $_GET['idd'] ."', ";
$sql.="categoryname ='". $_GET['namee'] ."', ";
$sql.="description ='". $_GET['des'] ."' ";
$sql.="where categoryid ='". $_GET['idd'] ."'";
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