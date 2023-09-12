<?php
    include '../connection.php';

    $pendapatan = $_POST['pendapatan'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO tb_income
            SET
            pendapatan='$pendapatan',
            keterangan='$keterangan',
            date = NOW(),
            id_user='8'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>