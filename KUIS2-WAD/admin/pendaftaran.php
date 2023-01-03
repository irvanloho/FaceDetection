<?php


include('../config/conector.php');

$regists = query("SELECT * FROM wad_kuis2");


?>

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
    <nav>
                <div class="wrapper">
                    <img src="../user/images/kana1.png" width="50" height="50" />
                    <tr><b class="name">Rehoboth <span>
                    Church</span></b></tr>
                    <div class="menu">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="login.php" class="tbl-biru">Logout</a></li>
                        </ul>
                    </div>
                </div>

    </nav>

     <!-- Header -->
    <header>
        <div class="container">
            <div class="container text-center">
                <h2 style="margin-top: 100px;">Registrasi Jemaat</h2>
            </div>
        </div>
    </header>
    
    <!-- Table -->
    <div class="container" style="min-height: 492px;">
        <div class="table-responsive">     
            <table class="table table-striped table-light  align-middle">
                <thead>
                    <tr>
                        <th scope="col">No.Regist</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Sesi Ibadah</th>
                        <th scope="col">Jemaat</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>
                <?php 
                    if (isset($_POST['submit'])) {

                        if (add($_POST) > 0) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo ' Berhasil Ditambahkan!';
                            echo '</div>';
                            } else {
                            echo '<div class="alert alert-warning" role="alert">';
                            echo ' Gagal Ditambahkan!';
                            echo '</div>';
                        }
                    }

                    if (isset($_POST['ubah'])) {

                        if(isset($_POST['ubah'])){
                            $id = $_POST['id'];
                            $status = $_POST['status'];
                         
                            $insert_query = mysqli_query($conn_user, "UPDATE `pesanan` SET status = '$status' WHERE id='$id'") or die('query failed');
                         
                         };
                    }

                    if (isset($_GET['id'])) {

                        $id = $_GET['id'];

                    }

                ?>
                
                <?php
            $query = query("SELECT * FROM pesanan");

            if ($query) {
                while ($data = mysqli_fetch_assoc($query)) {

            ?>
            <tr>
              <th scope="row"><?= $data['id']; ?></th>
              <td><?= $data['nama']; ?></td>
              <td><?= $data['email']; ?></td>
              <td><?= $data['no_hp']; ?></td>
              <td><?= $data['sesi']; ?></td>
              <td><?= $data['member']; ?></td>
              <td><?= $data['gender']; ?></td>  
              <td>
              <form action="" method="post">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <select class="form-select" aria-label="Default select example" name="status">
                     <option value="Accept">Acc</option>
                     <option value="Refuse">Tolak</option>
                  </select>
                  <button type="submit" name="ubah" class="btn btn-primary">Ubah Status</button>
               </form>
              </td>
            </tr>
            <?php
                    }
                }
            ?>
          </tbody>
        </table>
    </div>
</div>
  

  <!-- Footer -->
  <div class="container mt-5">
        <p class= text-center> Created by Irvan_1202202392 </p>
  </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>