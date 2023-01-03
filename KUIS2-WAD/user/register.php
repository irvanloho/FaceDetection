
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
                    <li><a href="home-login.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="pastor.php">Pastor</a></li>
                    <li><a href="sunday.php">Sunday Services</a></li>
                    <li><a href="register.php">Registrasi</a></li>
                    <li><a href="login.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <section class="daft" id="regist">
        <div class="container">
            <div class="title" style="text-align:center;">Registrasi</div>
            <div class="content">
                <form action="daftar.php" method="post" enctype="multipart/form-data">
                    <div class="user-details">
                        <div class="input-box">
                            <span for="name" class="details"> Nama Lengkap</span>
                            <input type="text" placeholder="Masukkan Nama"  id="nama" name="nama">
                        </div>
                        <div class="input-box">
                            <span for="email "class="details">Email</span>
                            <input type="text" placeholder="Masukkan Email"  id="email" name="email" required>
                        </div>
                        <div class="input-box">
                            <span for="no_hp"class="details">Nomor Handphone</span>
                            <input type="text" placeholder="Enter your number"  id="no_hp" name="no_hp">
                        </div>
                        <div class="input-box">
                            <span for="sesi"class="details">Ibadah Kebaktian</span>
                            <input type="text" placeholder="Pilih"  id="sesi" name="sesi" required>
                        </div>
                        <div class="input-box">
                            <span for="member" class="details">Ingin Jadi Jemaat?</span>
                            <input type="text" placeholder="Ya/Tidak"  id="member" name="member" required>
                        </div>
                        <div class="input-box">
                            <span for="gender"class="details">Gender</span>
                            <input type="text" placeholder="L/P" name="gender" id="gender" name="gender" required>
                        </div>




                    </div>
                    <div class="button">
                        <input type="submit"    value="Register" name="submit">
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