<?php
    include '../connection.php';

    $sql = "SELECT * FROM tb_resi";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $resi = array();
        while ($row = $result->fetch_assoc()) {
            $resi[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "resi"=>$resi,
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>