<?php

$connection = mysqli_connect(
  '127.0.0.1', 'root', '', 'task-php-ajax'
);

// for testing connection
#if($connection) {
#  echo 'Desconectado';
#}

?>
