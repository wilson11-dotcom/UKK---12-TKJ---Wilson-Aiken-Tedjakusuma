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
<center>
    <!-- Untuk bagian tampilan page ragister -->
    <div class="container">
    <h1>Register</h1>
    <!-- register.php merupakan file function yang digunakan untuk menjalankan page register -->
    <!-- method POST digunakan untuk mengirimkan variabel yang diinginkan oleh action -->
    <form action="register.php" method="POST">
        <input class="mb-2" type="text" name="nama" id="nama" placeholder="Enter your name" style="width: 50%; height: 40px;">
        <input class="mb-2" type="text" name="email" id="email" placeholder="Enter your email" style="width: 50%; height: 40px;">
        <input class="mb-2" type="text" name="password" id="password" placeholder="Enter your password" style="width: 50%; height: 40px;">
        <p>Already have account? <a href="indexlogin.php" class="text-decoration-none text-secondary">Login</a></p>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
</center>

</body>
</html>