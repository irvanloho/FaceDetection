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
    <section>

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
                        <li><a href="Login" class="tbl-biru">Logout</a></li>
                    </ul>
                </div>
            </div>

        </nav>


        <!-- untuk sunday -->
        <section class="suns" id="sunday">
            <div class="row">
                <div class="kolom ">
                    <p class="deskripsi ">Sunday Service</p>
                    <h2>IBADAH </h2>
                    <p> Jadwal Ibadah Rehoboth Kana</p>
                </div>

                <div class="partner-list ">
                    <div class="card-group">
                        <div class="card-ibadah">
                            <img src="./images/ku.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Kebaktian Umum 1</h5>
                                <p class="card-text"> Hari Minggu Tanggal ... pukul 08.00 WIB</p>
                                <a class="btn btn-primary" href="register.php">Daftar</a>

                            </div>
                        </div>
                        <div class="card-ibadah">
                            <img src="./images/ku.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"> Kebaktian Umum 2</h5>
                                <p class="card-text">Hari Minggu Tanggal ... pukul 10.00 WIB</p>
                                <a class="btn btn-primary" href="register.php">Daftar</a>

                            </div>
                        </div>
                        <div class="card-ibadah">
                            <img src="./images/glow.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Youth Glow </h5>
                                <p class="card-text"> Kebaktian muda-mudi hari Minggu tanggal ... pukul 12.00 WIB</p>
                                <a class="btn btn-primary" href="register.php">Daftar</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </section>
</body>