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
    <!-- Untuk bagian tampilan page ragister -->
<center>
    <h1>Login</h1>
    <!-- login.php merupakan file function yang digunakan untuk menjalankan page login -->
    <!-- method POST digunakan untuk mengirimkan variabel yang diinginkan oleh action -->
    <form action="login.php" method="POST">
        <input class="mb-2" type="text" name="email" id="email" placeholder="Enter your email" style="width: 50%; height: 40px;">
         <input class="mb-2" type="text" name="password" id="password" placeholder="Enter your password" style="width: 50%; height: 40px;">
         <p>Dont have account?<a href="indexregister.php" class="text-decoration-none text-secondary">Register</a></p>
         <button type="submit" class="btn btn-success">Login</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</center>
</body>
</html>