<?php
    include '../connection.php';

    $id_income= $_POST['id_income'];

    $sql = "DELETE FROM tb_income WHERE id_income='$id_income'";
    $result = $connect->query($sql);

    echo json_encode(array("success"=>$result));
?>