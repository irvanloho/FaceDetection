<?php 
function ubahh($data)
{
    global $connect;
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $sesi = $_POST['sesi'];
    $member = $_POST['member'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    


    $update = "UPDATE pesanan SET nama = '$nama', 
                                                email = '$email', 
                                                no_hp = '$no_hp', 
                                                sesi = '$sesi', 
                                                member = '$member',
                                                gender = '$gender'
                                                status = '$status'  
                                                WHERE id_register = $id";
    query($update);

    return mysqli_affected_rows($connect);
}
?>