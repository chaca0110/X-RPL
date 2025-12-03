<form action="" method=POST></form>
"email : <input type="email" name"email" required placeholder="masukan email"
passowrd : <input type="password" name="password" required placeholder"masukan password"
<input type="button" value="">


<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    header("location: login.php");


    echo "email : " . $email . "<br>";
    echo "password  : " . $password . "<br>";
}
$isi = "halo dunia"
$hasil = isset($isi);
echo $hasil;

 if (isset($isi) {
    echo "variabel ada isi";
} else {
    echo "variabel tidak ada isi"
}

var_dump($isi);

?>