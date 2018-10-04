<?php
 
require_once("db.php");
?>


<html>
<table border="1" align="center">
<head >
	<th>Id</th>
	<th>Nama</th>
	<th>Nim</th>
	<th>Tgl Lahir</th>
	<th>Action</th>
</head>
<body>


<?php
 $sql = "SELECT * FROM siswa";
 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0){
 	//output data each row
 	while ( $row = mysqli_fetch_assoc($result)) {
 		# code...
 		$id= $row['id'];
 		echo "<tr>";
 		echo "<td>".$row['id']."</td>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['nim']."</td>";
 		echo "<td>".$row['tgal_lahir']."</td>";
 		echo "<td>"."<a href='edit.php?id=$id'>Edit</a>       <a href='del.php?id=$id'>Delete</a>"."</td>";
 		echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }
mysqli_close($conn);

?>

</body>
</table>
</html>