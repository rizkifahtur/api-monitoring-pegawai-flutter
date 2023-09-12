<?php
    include '../connection.php';
    
    $kdResi = $_POST['kd_resi'];
    $keterangan = $_POST['keterangan'];    

    $sql1 = "SELECT * FROM tb_resi WHERE kd_resi='$kdResi'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;
    if ($check->num_rows > 0) {
        $success = false;
        $reason = "ID Resi sudah ada";
    }else{
        $sql2 = "INSERT INTO tb_resi SET            
            kd_resi='$kdResi',
            keterangan='$keterangan',
            date = CURDATE()
            ";
        $result = $connect->query($sql2);
        if (!$result) {
            $success = false;
            $reason = "Gagal add Resi";
        }
    }
    echo json_encode(array(
        "success"=>$success,
        "reason"=>$reason,
    ));
?>