<?php include("header01.php"); ?>
<?php
if(file_exists("sh_s1connect.php"))
  require("sh_s1connect.php");
else
  die("File not found");


if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (shid char(4),comname char(40),phone char(40))");
//qWork("insert into $tb values('1001','Tom')");
//qWork("insert into $tb values('1002','Dang')");
//qWork("insert into $tb values('1003','Pom')");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="index.php">back</a>';

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
