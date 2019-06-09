<?php
include 'credentials.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $id = $_POST['id'];
  $game_details = $_POST['game_details'];

  if(strpos($game_details, "'")){
      $game_details = str_replace("'","''",$game_details);
  }

  $sql = "INSERT INTO user_collection (user_id, game_name) VALUES ('$id','$game_details')";


  if(mysqli_query($conn, $sql)){
    $result["success"] = "1";
    $result["message"] = "success";

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
