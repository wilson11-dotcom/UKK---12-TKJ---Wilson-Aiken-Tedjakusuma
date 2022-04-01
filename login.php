<?php
include "koneksi.php";
//function ini digunakan untuk login manual
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //function ini digunakan untuk otomatis setelah register
} else {
    $email = $_GET['email'];
    $password = $_GET['password'];
}

//$sql ini memiliki beberapa macam command contohnya seperti yang saya gunakan ini digunakan untuk mengecek apakah usernya ada atau tidak
$sql = "select * from user where email='$email' and password='$password'";
//$query merupakan variabel yang dibuat untuk menjalankan command $sql
$query = mysqli_query($conn, $sql)or die($sql);

//digunakan untuk menghitung apakah ada valuenya 
$check = mysqli_num_rows($query);
session_start();
if($check != null){ 
    $result = mysqli_fetch_array($query);
    $_SESSION['authentication'] = true;
    $_SESSION['user'] = $result;
    header("location:indexuser.php");
} else {
    $_SESSION['authentication'] = false;
    header("location:indexlogin.php");
}


?>