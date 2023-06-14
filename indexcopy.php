<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="header" align="center">
        <div class="logo"></div>
        <div class="posisi">
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="kj.php">TENTANG</a></li>
                    <li><a href="i.php">SEWA MOBIL</a></li>
                    <li><a href="login.php">LOGIN/DAFTAR</a></li>
                </ul>
            </nav>
            <form action="" method="POST">
            <div class="row">
            <div class="col-md-4 offset-md-4">
                    <div class="signup">
                        <div class="form-group">
                        <form action="login.php" method="post">
                        <div class="card-title text-center">
                        <br><br><br><br><br><br><br><br><h1 class="pad">Login</h1>
                            </div>
                            <label for="username"></label>
                            <input class="kotak" type="text" name="username" placeholder="Username atau email" />
                        </div>
                            <label for="password"></label>
                            <input class="kotak" type="password" name="password" placeholder="Password" />
                        </div>
                            <a href="register.php">Sign Up</a>
                            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>