<?php

session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

$msg="Deslogado com sucesso";

echo "<script> Alert('Deslogado!'); </script>";
header("Location: index.php");
