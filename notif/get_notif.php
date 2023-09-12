<?php
    include '../connection.php';

    $sql = "SELECT * FROM tb_notif ORDER BY id_notif DESC";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $notif = array();
        while ($row = $result->fetch_assoc()) {
            $notif[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "notif"=>$notif,
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>