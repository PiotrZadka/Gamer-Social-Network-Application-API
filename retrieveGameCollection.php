<?php
include 'credentials.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];

    $sql = "SELECT collection_id, user_id, game_name FROM user_collection WHERE user_id='$id' ";

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['collection'] = array();

    if(mysqli_num_rows($response) > 0){
      while($row = mysqli_fetch_assoc($response)){

        $h['game_id'] = $row['collection_id'];
        $h['game_name'] = $row['game_name'];

        array_push($result["collection"], $h);
      }
      $result["success"] = "1";
      echo json_encode($result);
    }
  }else{

    $result["success"] = "0";
    $result["message"] = "Error!";
    echo json_encode($result);

    mysqli_close($conn);
}
 ?>
