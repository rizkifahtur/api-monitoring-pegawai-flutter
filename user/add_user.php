<?php
    include '../connection.php';

    $name = $_POST['name'];
    $nohp = $_POST['nohp'];
    $pass = md5($_POST['pass']);
    $role = $_POST['role'];
    $address = $_POST['address'];
    $id_job = $_POST['id_job'];

    $sql1 = "SELECT * FROM tb_user WHERE nohp='$nohp'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;
    if ($check->num_rows > 0) {
        $success = false;
        $reason = "No.Hp sudah ada";        
    }else{
        $sql2 = "INSERT INTO tb_user SET
            name='$name',
            nohp='$nohp',
            pass='$pass',
            role='$role',
            address='$address',
            id_job='$id_job'
            ";
        $result = $connect->query($sql2);

        if($role == 'Operator'){
            $sql3 = "DELETE FROM tb_respon WHERE name='$name'";
            $result = $connect->query($sql3);
        }

        if (!$result) {
            $success = false;
            $reason = "Gagal add user";
        }
    }
    echo json_encode(array(
        "success"=>$success,
        "reason"=>$reason,
    ));
?>