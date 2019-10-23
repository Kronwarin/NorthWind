<?php
require("sup_s1connect.php");
$sql="select * from Suppliers";

if((int)phpversion() >= 7) {
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<center> id: " . $row["supid"]. "- companyName: " . $row["comname"]. "- address: " . $row["address"]."- post: " . $row["post"]."- phone: " . $row["phone"]. "<br/>";
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
