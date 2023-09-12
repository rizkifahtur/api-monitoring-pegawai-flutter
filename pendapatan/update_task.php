<?php
    include '../connection.php';

    $id_task= $_POST['id_task'];
    $task_name = $_POST['task_name'];
    $description = $_POST['description'];

    $sql = "UPDATE tb_task
            SET
            task_name='$task_name',
            description='$description'
            WHERE
            id_task='$id_task'
            ";
    $result = $connect->query($sql);
    echo json_encode(array("success"=>$result));
?>