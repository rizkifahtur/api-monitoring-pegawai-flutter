<?php
    include '../connection.php';

    $role = $_POST['role'];

    $sql = "SELECT * FROM tb_user CROSS JOIN tb_job
            ON
            tb_user.id_job=tb_job.id_job
            WHERE
            tb_user.role='$role'
            ";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $user = array();
        while ($row = $result->fetch_assoc()) {
            $user[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "user"=>$user,
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>