<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, email, password) 
            VALUES (:name, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Pesbuk</title>
    <link rel="stylesheet" href="css3.css">
</head>
<body class="bg-light">

<div class="header" align="center">
        <div class="logo"></div>
        <div class="posisi">
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="tentang.php">TENTANG</a></li>
                    <li><a href="listsewa.php">SEWA MOBIL</a></li>
                    <li><a href="register.php">LOGIN/DAFTAR</a></li>
                </ul>
            </nav>
        <a href="index.php"></a>

        <p>CREATE ACCOUNT <a href="index.php"></a></p>

        <form action="" method="POST">
            <div class="row">
            <div class="col-md-4 offset-md-4">

                <div class="signup">
                    <div class="card-title text-center">
                        <br><br><br><br><br><br><br><br><h1 class="pad">CREATE ACCOUNT</h1>
                    </div>
            <div class="card-body">

            <br><br><br><br><div class="form-group">
                <label for="name"></label>
                <input class="kotak" type="text" name="name" placeholder="Full Name" />
            </div><br><br>

            <div class="form-group">
                <label for="email"></label>
                <input class="kotak" type="email" name="email" placeholder="Email or Phone Number" />
            </div><br><br>

            <div class="form-group">
                <label for="password"></label>
                <input class="kotak" type="password" name="password" placeholder="Create Password" />
            </div><br><br>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Sign Up" />
        </form>
            
        </div>
    </div>
</div>

</body>
</html>