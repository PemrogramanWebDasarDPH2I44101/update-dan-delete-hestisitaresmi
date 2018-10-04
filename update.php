
<?php
require_once("db.php");
// menyimpan data kedalam variabel
$id   = $_POST['id'];
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$tgal_lahir        = $_POST['tgal_lahir'];

// query SQL untuk insert data
$sql="UPDATE siswa SET nim='$nim',nama='$nama',tgal_lahir='$tgal_lahir' where id='$id'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman index.php
header("location:conn2.php");
?>




