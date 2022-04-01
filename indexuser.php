<?php
include "koneksi.php";

$getData = "select * from tweet";
$queryData = mysqli_query($conn, $getData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Bootstrap CSS and meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Untuk bagian tampilan page user -->
<!-- class nav merupakan class untuk bagian navbar yang bisa kita buat maupun ambil dari bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="indexuser.php">UKK XYZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="new_tweet.php">Tweet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="indexlogin.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" onchange="search()">
        <button class="btn btn-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
<!-- untuk membuat tabel -->
<table class="table">
  <tr>
    <td>Id</td>
    <td>Comment</td>
    <td>Tags</td>
    <td>image</td>
    <td>Action</td>
  </tr>
  <?php
  //foreach digunakan untuk melakukan looping untuk setiap isi dari queryData
  foreach ($queryData as $result):
    $id = $result['id'];
    $text = $result['text'];
    $tag = $result['tag'];
    $image = $result['image'];
  
?>
<!-- echo merupakan fungsi untuk menampilkan teks ke layar, fungsi ini dapat digunakan dengan tanda kurung maupun tanpa tanda kurung. -->
<tr>
  <td><?php echo $result['id']?></td>
  <td><?php echo $result['text']?></td>
  <td><?php echo $result['tag']?></td>
  <td><?php echo $result['image']?></td>
  <td>
    <form action="tweet.php" method="POST">
    <button class="btn btn-warning" type="submit" name="method" id="method" value="delete">Delete</button>
    <button class=" btn btn-success" onclick="f_edit(<?php echo "'$id', '$text','$tag','$image'" ?>)">Edit</button>
    <input type="hidden" name="id" id="id" value="<?php echo $result['id'] ?>">
    </form>
  </td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>