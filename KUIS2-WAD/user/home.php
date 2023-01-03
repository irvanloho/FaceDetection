
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
        <div class="images">
            <nav>
                <div class="wrapper">
                    <img src="./images/kana1.png" width="50" height="50" />
                    <tr><b class="name">Rehoboth <span>
                    Church</span></b></tr>
                    <div class="menu">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="login.php" class="tbl-biru">Login</a></li>
                        </ul>
                    </div>
                </div>

            </nav>


            <div class="wrapper">
                <!-- untuk home -->
                <section id="home">

                    <img src="./images/sc.png" width="10%" />
                    <div class="kolom">
                        <p class="deskripsi">Welcome To Our Church!</p>
                        <h2>Rehoboth Kana Church</h2>
                        <p class="tema">The Power Of Love</p>
                        <div class="newslatter">
                            <form>
                                <input type="email" name="email" id="mail" placeholder="Search">
                                <input type="submit" name="submit" value="Search" />
                            </form>
                        </div><br><br><br><br><br><br>
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>
    
</body>