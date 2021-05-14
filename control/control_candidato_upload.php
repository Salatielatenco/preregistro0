<?php
  session_start();
  if(file_exists("../archivo/".$_SESSION['usuario'])){
    echo 1;
  }else{
    echo 0;
  }
?>