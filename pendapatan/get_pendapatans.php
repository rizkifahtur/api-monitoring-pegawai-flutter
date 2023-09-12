<?php
    include '../connection.php';

    $sql = "SELECT * FROM tb_income";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $pendapatan = array();
        while ($row = $result->fetch_assoc()) {
            $pendapatan[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "pendapatan"=>$pendapatan,
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>