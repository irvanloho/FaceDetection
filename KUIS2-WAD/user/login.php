<?php

session_start();

require('../config/conector.php');

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn_user, "SELECT * FROM user_irvan WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_array($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION['login'] = true;
            
            // remember me
            // if ( isset($_POST['remember'])) {
            //     setcookie('login', 'true', time() + 120);
            // }

            if($row['status_type'] == 'admin'){
                header('location: ../admin/home.php');
       
             }elseif($row['status_type'] == 'user'){
                header('location: home-login.php');
       
             }
            exit;
        } else {
            echo '<div class="alert alert-danger position-absolute w-100" role="alert">';
            echo 'Username atau password salah! ';
            echo '</div>';
        }
    } else {
        echo '<div class="alert alert-danger position-absolute w-100" role="alert">';
        echo 'Username atau password salah! ';
        echo '</div>';
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>loginuser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        body,
        html {
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            background-color: rgb(248, 172, 79);
            height: 100%;
            font-weight: 700;
        }
        
        .container {
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
        }
        
        .login-form {
            height: 500px;
            width: 430px;
            padding: 0 35px;
            background-color: white;
            border: none;
        }
        
        input[type="email"],
        input[type="password"] {
            border-radius: 20px;
            border: 2px solid rgb(224, 224, 224);
        }
        
        .btn-login {
            height: 35px;
            border-radius: 20px;
            font-weight: 700;
        }
        
        .link {
            color: #198754;
            text-decoration: none;
        }
        
        .link:hover {
            color: #198754;
            text-decoration: none;
        }
        
        .btn-gmail {
            height: 35px;
            border: 2px solid rgb(224, 224, 224);
            border-radius: 20px;
            font-weight: 700;
        }
        
        .img-google {
            height: 20px;
            width: 20px;
        }
        
        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Open Sans', sans-serif;
        }
        
        .wrapper {
            width: 1300px;
            margin: auto;
            position: relative;
        }
        
        .logo a {
            font-size: 50px;
            font-weight: 800;
            float: left;
            font-family: courier;
            color: #364f6b;
        }
        
        .menu {
            float: right;
        }
        
        span {
            color: hsla(345, 65%, 57%, 0.349);
        }
        
        nav {
            width: 100%;
            margin: auto;
            display: flex;
            line-height: 80px;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            background: #FFFFFF;
            z-index: 1;
            border-bottom: 1px solid #364f6b;
            background-color: #8da3bd;
            padding: 0px 16px 0px 16px;
        }
    </style>
</head>


<body>

    <div class="images">
        <nav>
            <div class="wrapper">
                <img src="./images/kana1.png" width="50" height="50" />
                <tr><b class="name">Rehoboth <span>
                    Church</span></b></tr>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">User</a></li>
                    <li><a class="dropdown-item" href="#">Admin</a></li>
                </ul>
            </div>

    </div>

    </nav>
    </div>


    <div class="container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="card-title" style="text-align:center;">Login</h2>
                <h6 class="card-subtitle text-muted mb-5 fw-bold" style="text-align:center;">Please login to use this site!</h6>

                <div class="d-grid mt-5 mb-4">
                    <button type="submit" class="btn btn-light btn-gmail"><i class="fa-solid fa-envelope" alt="Gmail" class="img-google me-2"></i>Sign up with Gmail</button>
                </div>

                <h6 class="card-subtitle text-muted mb-4 text-center">or login with Email</h6>

                <form action="" method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password*</label>
                        <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp" placeholder="Your Email">                    
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>

                        <div>
                            <a href="#" class="link">Forgot Password ?</a>
                        </div>
                    </div>

                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-success btn-login" name="login">Login</button>
                    </div>

                    <div class="mt-3">
                        <label>Not registered yet ? <a href="regist-akun.php" class="link">Create an account</a></label>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>