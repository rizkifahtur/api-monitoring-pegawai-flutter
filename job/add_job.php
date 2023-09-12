<?php
    include '../connection.php';
    
    $job_name = $_POST['job_name'];
    $salary = $_POST['salary'];
    $id_job = $_POST['id_job'];

    $sql1 = "SELECT * FROM tb_job WHERE id_job='$id_job'";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;
    if ($check->num_rows > 0) {
        $success = false;
        $reason = "ID Job sudah ada";
    }else{
        $sql2 = "INSERT INTO tb_job SET            
            id_job='$id_job',
            job_name='$job_name',
            salary='$salary'
            ";
        $result = $connect->query($sql2);
        if (!$result) {
            $success = false;
            $reason = "Gagal add job";
        }
    }
    echo json_encode(array(
        "success"=>$success,
        "reason"=>$reason,
    ));
?>