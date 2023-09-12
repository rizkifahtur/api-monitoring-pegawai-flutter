<?php
    include '../connection.php';

    $id_user = $_POST['id_user'];

    $sql = "SELECT * FROM tb_income";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $task = array();
        while ($row = $result->fetch_assoc()) {
            $task[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "task"=>$task,
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>