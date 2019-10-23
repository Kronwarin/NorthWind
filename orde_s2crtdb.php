<?php include("header01.php"); ?>
<?php
if(file_exists("orde_s1connect.php"))
  require("orde_s1connect.php");
else
  die("File not found");


if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (orderid char(5),productid char(40),unitprice char(40),quantity char(40),discount char(40))");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="orde_s0index.php">back</a>';

function dbWork($sql) {
	global $db,$host,$uname,$upass,$connect;	
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else {
			echo "$sql : succeeded<br/>";
			$connect = new mysqli($host, $uname, $upass, $db);
		}
	} else { 
		if (!$result=mysql_query($sql,$connect))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
function qWork($sql) {
	global $connect,$db;
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else 
			echo "$sql : succeeded<br/>";
	} else {   
		if (!$result=mysql_db_query($db,$sql))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}
?>
<?php include("footer1.php"); ?>
