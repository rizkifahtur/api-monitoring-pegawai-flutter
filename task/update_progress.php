<?php
    include '../connection.php';

    $id_task= $_POST['id_task'];
    $progress = $_POST['progress'];
    $image = $_POST['image'];
    $imageBase64 = $_POST['image_file'];
    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $point_tugas = $_POST['point_tugas'];
    $id_user = $_POST['id_user'];
    
    $sql = "UPDATE tb_task
            SET
            id_user='$id_user',
            progress='$progress',
            image='$image',
            task_name='$task_name',
            description='$description'
            WHERE
            id_task='$id_task'
            ";
    $result = $connect->query($sql);

    $sql3 = "INSERT INTO tb_notif SET id_user='$id_user', progress='$progress', task_name='$task_name', description='$description', point_tugas='$point_tugas'";
    $result3 = $connect->query($sql3);

    if ($progress == 100){
    $sql2 = "UPDATE tb_respon SET score=score+'$point_tugas' WHERE id_user='$id_user'";
    $result2 = $connect->query($sql2);
    }

    if($result){
        $imageFile = base64_decode($imageBase64);
        file_put_contents("../images/".$image, $imageFile);
        echo json_encode(array("success"=>$result));
    }
    else{
        echo json_encode(array("success"=>false));
    }
?>