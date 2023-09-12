<?php
    include 'connection.php';

    $nohp = $_POST['nohp'];
    $pass = md5($_POST['pass']);

    $sql = "SELECT * FROM tb_user CROSS JOIN tb_job
            ON
            tb_user.id_job=tb_job.id_job
            WHERE
            tb_user.nohp='$nohp' AND tb_user.pass='$pass'
            ";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $user = array();
        while ($row = $result->fetch_assoc()) {
            $user[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "user"=>$user[0],
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>