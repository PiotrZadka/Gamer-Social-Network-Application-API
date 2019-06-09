<?php
include 'credentials.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = "SELECT * FROM users";

    $response = mysqli_query($conn, $sql);

    if(mysqli_num_rows($response) > 0){

      $count = mysqli_num_rows($response);

      $result["success"] = "1";
      $result["message"] = "Success!";
      $result["count"] = $count;
      echo json_encode($result);
    }
  }else{

    $result["success"] = "0";
    $result["message"] = "Error!";
    echo json_encode($result);

    mysqli_close($conn);
}
 ?>
