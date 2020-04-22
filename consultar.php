<?php
$con = mysqli_connect("localhost","id8994286_cano","123454321","id8994286_datos") or die ("Error1");
$result = mysqli_query($con, "(select * from fichero where tipo = 'verbo')") or die ("Error2");

$array = array();
while($row = mysqli_fetch_array($result)){
	array_push($array, $row);
}
echo json_encode($array);
?>