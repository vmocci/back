<?php

session_start();

if(!empty($_SESSION['id'])){
   // var_dump($_SESSION); <-- código para ver o que temos de ativo na sessão
    $valida = $_SESSION['nivel'];
include_once 'conn/connect.php';

  }else{
  header("Location: index.php");
    
}




$btnCadastro = filter_input(INPUT_POST, 'btnCadastro', FILTER_SANITIZE_STRING); // Busca um input do formulário post que direciona para a página dessa função

if($btnCadastro){
  include_once 'conn/connect.php';
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); // Pega todos os dados dos inputs desse formulário como array 
  //var_dump($dados);
  

  $result_usuario = "INSERT INTO relac_email (dono_email, ctt_email, status_email) VALUES (
      '".$dados['nome']."',
      '".$dados['email']."',
      '".$dados['status']."'
      
)";

$resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_insert_id($conn)){
echo "Foi!";
//header("Location: createuser.php"); // Aqui pode ser apenas uma mensagem via Javascript também, ou como preferir
}else{
  
echo "Erro ao cadastrar usuário!" . "<br>";
echo $dados['nome'] . "<br>";
echo $dados['email'] . "<br>";

}

}




?>
