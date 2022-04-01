<!-- ini adalah file yang digunakan untuk menjalankan page register -->
<?php
//koneksi.php merupakan file yang digunakan untuk menghubungkan file dengan database
include "koneksi.php"; 
$nama = $_POST['nama']; 
$email = $_POST['email'];
$password= $_POST['password'];

//$sql ini memiliki beberapa macam command contohnya seperti yang saya gunakan ini digunakan untuk memasukan data kedalam table di database yang sudah dibuat
$sql = "insert into user (nama, email, password) values ('$nama','$email','$password')";
//$query merupakan variabel yang dibuat untuk menjalankan command $sql
$query = mysqli_query($conn, $sql)or die($sql);

header("location:indexlogin.php")

?>