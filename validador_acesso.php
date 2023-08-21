<?php
  session_start();
  if (!isset($_SESSION['logged']) || $_SESSION['logged']==='nao') {
    header('location: index.php?login=erro2');
  }
?>