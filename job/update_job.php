<?php
    include '../connection.php';
    
    $job_name = $_POST['job_name'];
    $salary = $_POST['salary'];
    $id_job = $_POST['id_job'];

    $sql = "UPDATE tb_job
            SET            
            job_name='$job_name',
            salary='$salary'
            WHERE
            id_job='$id_job'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>