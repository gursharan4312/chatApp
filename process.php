<?php
  if(isset($_POST['username'])){
    if(isset($_POST['message'])){
      $array = array("username"=>$_POST['username'],
                      "message"=>$_POST['message']);
      echo json_encode($array);
    }
  }
?>
