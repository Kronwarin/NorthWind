<?php
require("ord_s1connect.php");
$sql="select * from Orders";

if((int)phpversion() >= 7) {
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<center> idord: " . $row["ordid"]. "- cusid: " . $row["cusid"]. "- empid: " . $row["empid"]."- orddate: " . $row["orddate"]."- ship: " . $row["ship"]. "<br/>";
		}
	} else {
		echo "no results";
	}
	$connect->close();
} else {	
	if (!$result=mysql_db_query($db,$sql)) die("Query : failed");
	echo "Display all records : <br/>";
	while ($object = mysql_fetch_object($result)) {
		echo $object->PID . "  " . $object->Pname . "<br/>";
	}
	echo "Total " . mysql_num_rows($result) ." records";
	mysql_close($connect);
}
echo "<center><a href=index.php>back</a>";
?>
