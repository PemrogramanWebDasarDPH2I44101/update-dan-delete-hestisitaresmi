<?php

require_once("db.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim	= $_POST['nim'];
$tgal_lahir= $_POST['tgal_lahir'];


$sql = "INSERT INTO siswa (id, nama, nim, tgal_lahir)
		VALUES('$id', '$nama', '$nim', '$tgal_lahir')";

// echo $sql;

if(mysqli_query($conn, $sql)){
	header("Location:conn2.php");
}else{
	echo "Error: ".$sql. "<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>