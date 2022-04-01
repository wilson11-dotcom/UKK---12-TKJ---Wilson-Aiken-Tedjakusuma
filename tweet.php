<?php
include "koneksi.php";
include "secure.php";

//untuk mengambil data dari form new_tweet.php
$id = $_POST['id'];
$method = $_POST['method'];
//isset adalah kalau POST text memiliki value makanya dia akan mengambil data dari text, tag dan image
if(isset($_POST['text'])){
    $text = $_POST['text'];
    $tag = $_POST['tag'];
    $image = $_POST['image'];
    echo $image;
}

//untuk menambahkan data ke table tweet
if($method == "submit"){
    $sql = "insert into tweet (text, tag, image) values ('$text', '$tag', 'image/$image')";
    $query = mysqli_query($conn, $sql)or die ($sql);
//untuk menghapus data yang terdapat dalam table tweet
} else if ($method == "delete"){
    $sql = "delete from tweet where id='$id'";
    $query = mysqli_query($conn, $sql)or die ($sql);
}

header("location:indexuser.php");

?>