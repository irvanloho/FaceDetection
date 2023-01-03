
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../user/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <section>
        <div class="images">
            <nav>
                <div class="wrapper">
                    <img src="../user/images/kana1.png" width="50" height="50" />
                    <tr><b class="name">Rehoboth <span>
                    Church</span></b></tr>
                    <div class="menu">
                        <ul>
                            <li><a href="home">Home</a></li>
                            <li><a href="pendaftaran.php">Pendaftaran</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>

            </nav>


            <div class="wrapper">
                <!-- untuk home -->
                <section id="home">

                    <img src="../user/images/sc.png" width="10%" />
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
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
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
    <section class="vidio">
        <div class="row">
            <div class="kolom ">
                <p class="deskripsi ">Social Media</p>
                <h2><i class="fa-brands fa-youtube"></i>YouTube</h2>
                <div class="indiv">
                    <iframe src="https://www.youtube.com/embed/97DEyRv3r9U" title="YouTube video" allowfullscreen style="text-align: center;"></iframe>
                </div>
                <center>
                    <h2>
                        <i class="fa-brands fa-instagram"></i>Instagram</h2>
                </center>
            </div>
        </div>

    </section>

    <section>
        <!-- footer -->
        <!--Footer-->
        <footer class="text-muted" data-bs-toggle="modal" data-bs-target="#modal" style="background-color: #5080b8;">
            <a da>
                <div class="text-center p-3" style="color: white;">
                    Created By Irvan Sihaloho_1202202392_SI4404
                </div>
            </a>
        </footer>

        <!-- Copyright -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modallabel">Confirm</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hope You Joyfull and God Bless</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

    </section>
</body>