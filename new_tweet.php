<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS and meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Tweet</title>
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

<!-- untuk menampilkan input text untuk membuat tweet -->
<div class="container">
        <form action="tweet.php" method="POST" enctype="multipart/form-data">
            <h1 class="mt-3 mb-3">Post A New Tweet</h1>
            <div>
                <label class="form-label fs-4 text">Caption</label>
                <textarea placeholder="Write a caption..." class="form-control form-control-lg" name="text" id="text" style="width: 50%;" required></textarea>
            </div>
            <div>
            <label class="form-label fs-4 text">Your Tags</label>
                <textarea placeholder="Your Tags..." class="form-control form-control-lg mx5" name="tag" id="tag" style="width: 50%;"></textarea>
            </div>
            <br>
            <div>
            <input class="form-control form-control-lg mx5" name="image" id="image" style="width: 50%;" type="file" accept="image">
            </div>
            <div class="mt-3">
                <button class="btn btn-success" name="method" value="submit" style="width: 50%;">Post</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>