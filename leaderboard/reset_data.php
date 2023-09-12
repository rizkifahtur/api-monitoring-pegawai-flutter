<?php
    include '../connection.php';

    $sql = "UPDATE tb_respon SET score=0";
    $result = $connect->query($sql);

    echo json_encode(array("success"=>$result));
?>