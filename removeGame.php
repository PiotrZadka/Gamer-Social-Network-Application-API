<?php
include 'credentials.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $user_id = $_POST['id'];
  $game_id = $_POST['game_id'];

  $sql_delete = "DELETE from user_collection where collection_id = '$game_id' and user_id = '$user_id' ";

  if(mysqli_query($conn, $sql_delete)){
    $result["success"] = "1";
    $result["message"] = "success";
    $result["sql"] = $sql_delete;

    echo json_encode($result);
    mysqli_close($conn);
  }
  else{

    $result["success"] = "0";
    $result["message"] = "error";

    echo json_encode($result);
    mysqli_close($conn);
  }

}
 ?>
