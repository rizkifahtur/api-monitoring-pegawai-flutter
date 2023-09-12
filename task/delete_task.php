<?php
    include '../connection.php';

    $id_task= $_POST['id_task'];

    $sql = "DELETE FROM tb_task WHERE id_task='$id_task'";
    $result = $connect->query($sql);

    echo json_encode(array("success"=>$result));
?>