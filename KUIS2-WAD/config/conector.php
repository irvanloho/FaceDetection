<?php

include('add.php');
include('status.php');

$conn_user = mysqli_connect("localhost", "root", "", "wad_kuis2", 3308);


if (!$conn_user) {
    die("Koneksi gagal:" . mysqli_connect_error());
}

function query($query)
{
    global $conn_user;
    return mysqli_query($conn_user, $query);
}



function registrasi($data) {
    global $conn_user;

    $email = strtolower(stripslashes($data['email']));
    $nama = $data['nama'];
    $user_type = $data['user_type'];
    $sandi = mysqli_real_escape_string($conn_user, $data['sandi']); 
    $konfir_sandi = mysqli_real_escape_string($conn_user, $data['konfir_sandi']);

    $result = mysqli_query($conn_user, "SELECT email FROM user_irvan WHERE email = '$email'");
    if ( mysqli_fetch_assoc($result)) {
        echo '<div class="alert alert-warning position-absolute w-100" role="alert">';
        echo 'Email sudah terdaftar! ';
        echo '</div>';
        return false;
    }

    if( $sandi != $konfir_sandi) {
        echo '<div class="alert alert-danger position-absolute w-100" role="alert">';
        echo 'password tidak sesuai! ';
        echo '</div>';
        return false;
    }

    $sandi = password_hash($sandi, PASSWORD_DEFAULT);

    mysqli_query($conn_user, "INSERT INTO user_irvan VALUES('', '$nama', '$email', '$sandi', '$user_type')");

    return mysqli_affected_rows($conn_user);
}


