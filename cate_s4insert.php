<?php include("header01.php"); ?>

<form action=cate_s4insert.php>
<input name=cateid value=>
<input name=coname value=>
<input name=conn value=>
<input type=submit value=cate_s4insert.php>
</form>
<?php

if (!isset($_GET['cateid']) || !isset($_GET['coname'])) exit;
require("cate_s1connect.php");
$sql="insert into $tb values('".$_GET['cateid']."','".$_GET['coname']."','".$_GET['conn']."')";
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