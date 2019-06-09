<?php
include 'credentials.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = "SELECT * FROM users";

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['users'] = array();

    if(mysqli_num_rows($response) > 0){
      while($row = mysqli_fetch_assoc($response)){

        $h['id'] = $row['id'];
        $h['name'] = $row['name'];
        $h['email'] = $row['email'];

        array_push($result["users"], $h);
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
