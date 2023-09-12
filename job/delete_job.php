<?php
    include '../connection.php';

    $id_job = $_POST['id_job'];

    $sql = "DELETE FROM tb_job WHERE id_job='$id_job'";
    $result = $connect->query($sql);

    echo json_encode(array("success"=>$result));
?>