<?php 
function add($data)
{
    global $conn_user;
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $sesi = $_POST['sesi'];
    $member = $_POST['member'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];

    $add = "INSERT INTO pesanan VALUES ('', '$nama', '$email', '$no_hp', '$sesi', '$member','$gender', '$status')";
    query($add);

    return mysqli_affected_rows($conn_user);
}

?>