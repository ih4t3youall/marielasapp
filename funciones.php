<?php


function getTable(){

  $página_inicio = file_get_contents('tabla.html');

  echo json_encode($página_inicio)
  


}


 ?>
