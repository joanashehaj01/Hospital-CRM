<?php
//inicializo sessionin
  session_start();

// Fshi nje session te caktuar
  unset($_SESSION['email']);

 header('Location: html.php');

  ?>