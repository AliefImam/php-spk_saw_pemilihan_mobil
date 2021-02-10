<?php
include "koneksi.php";

$term = $_GET['term'];

$query = mysqli_query($connect,"SELECT * FROM alternatifhp WHERE merk_hp like '%".$term."%'");
$json = array();
while ($ketik = mysqli_fetch_array($query)) {
	$json[] = array(
		'label' => $ketik['merk_hp'],
		'value' => $ketik['merk_hp'],
		'idhp' => $ketik['idhp']);
}
header("Content-Type: text/json");
echo json_encode($json);
?>