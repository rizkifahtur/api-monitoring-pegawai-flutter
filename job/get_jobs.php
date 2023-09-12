<?php
    include '../connection.php';

    $sql = "SELECT * FROM tb_job";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $job = array();
        while ($row = $result->fetch_assoc()) {
            $job[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "job"=>$job,
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>