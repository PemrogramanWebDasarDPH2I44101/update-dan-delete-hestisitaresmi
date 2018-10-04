<?php
require_once("db.php");

//menyimpan data id kedalam variable
$id=$_GET['id'];
//query sql untuk indert data
$sql ="DELETE from siswa where id =$id ";
mysqli_query($conn, $sql);
//mengalihkan ke halaman index
header("Location:conn2.php");

?>