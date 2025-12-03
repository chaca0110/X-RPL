<?php
$houst = "localhost";
$user = "root";
$password = "";
$db = "fbsekolah";
$sql = "select * from tblsiswa";
$query= mysqli_query($koneksi, $sql);
$siswa = mysqli_fatch_assdc(squary);
var_dump(siswa);
echo "<br>";
echo $siswa[2];


?>