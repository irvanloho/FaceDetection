<?php

require '../config/conector.php';

if (isset($_POST['daftar'])) {

    if (registrasi($_POST) > 0) {
        echo '<div class="alert alert-success position-absolute w-100" role="alert">';
        echo 'User '. $_POST['nama'] .' Berhasil Registrasi!';
        echo '</div>';
        header('Location: login.php');
        exit;
    } else {
        echo mysqli_error($conn_user);
    }
}

?> 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <nav>
        <div class="wrapper">
            <img src="./images/kana1.png" width="50" height="50" />
            <tr><b class="name">Rehoboth <span>
                Church</span></b></tr>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <section class="daft" id="regist">
        <div class="container">
            <div class="title" style="text-align:center;">Registrasi</div>
            <div class="content">
                <form action="" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span for="nama" class="details"> Nama Lengkap</span>
                            <input type="text" placeholder="Masukkan Nama" name="nama" id="nama" required>
                        </div>
                        <div class="input-box">
                            <span for="email" class="details">Email</span>
                            <input type="text" placeholder="Masukkan Email" name="email" id="email"  required>
                        </div>
                        <select name="user_type">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                        <div class="input-box">
                            <span for="sandi" class="details">Password</span>
                            <input type="password" placeholder="Password" name="sandi" id="sandi" required>
                        </div>
                        <div class="input-box">
                            <span for="konfir_sandi" class="details">Confirm Password</span>
                            <input type="password" placeholder="Password" name="konfir_sandi" id="konfir_sandi" required>
                        </div>

                    </div>
                    

                        
                        <div class="button">
                            <input type="submit" value="Register" name="daftar">
                            <div class="modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                </div>
            </div>



    </section>