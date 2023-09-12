<?php
    include '../connection.php';

    $id_resi = $_POST['id_resi'];

    $sql = "DELETE FROM tb_resi WHERE id_resi='$id_resi'";
    $result = $connect->query($sql);

    echo json_encode(array("success"=>$result));
?>