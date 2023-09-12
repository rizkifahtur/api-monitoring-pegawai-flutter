<?php
    include '../connection.php';

    $id_user= $_POST['id_user']; 
    $name = $_POST['name'];
    $nohp = $_POST['nohp'];
    $role = $_POST['role'];
    $address = $_POST['address'];
    $id_job = $_POST['id_job'];
    $reward = $_POST['reward'];
    $description =$_POST['description'];

    $sql = "UPDATE tb_user
            SET
            name='$name',
            nohp='$nohp',
            role='$role',
            address='$address',
            id_job='$id_job',
            reward='$reward',
            description='$description'
            WHERE
            id_user='$id_user'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>