<?php
  function render($file_path){
    $content = file_get_contents($file_path);
    echo $content;
  }
?>