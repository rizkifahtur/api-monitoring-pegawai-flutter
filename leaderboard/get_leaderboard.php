<?php
    include '../connection.php';

    $sql = "SELECT * FROM tb_respon ORDER BY score DESC";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $leaderboard = array();
        while ($row = $result->fetch_assoc()) {
            $leaderboard[] = $row;            
        }
        echo json_encode(array(
            "success"=> true,
            "leaderboard"=>$leaderboard,
        ));
    }else {
        echo json_encode(array(
            "success"=> false,
        ));
    }
?>