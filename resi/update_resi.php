<?php
    include '../connection.php';
    
    $keterangan = $_POST['keterangan'];
    $kdResi = $_POST['kd_resi'];

    $sql = "UPDATE tb_resi
            SET            
            keterangan='$keterangan',
            kd_resi='$kdResi'
            WHERE
            kd_resi='$kdResi'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>