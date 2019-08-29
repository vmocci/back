<?php

$btnCadastro = filter_input(INPUT_POST, 'btnCadastro', FILTER_SANITIZE_STRING); // Busca um input do formulário post que direciona para a página dessa função

if($btnCadastro){
  include_once 'conn/connect.php';
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); // Pega todos os dados dos inputs desse formulário como array 
  //var_dump($dados);


  $verify = "SELECT email FROM usuarios WHERE email='".$dados['email']."'";
  $verifyResult = mysqli_query($conn, $verify);
  if(($verifyResult) AND ($verifyResult -> num_rows != 0)){

    header("Location: errorcreateuser.php");
  }else{

  $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT); // Resgata via name ("senha") o item de senha e adiciona criptografia hash

  $result_usuario = "INSERT INTO usuarios (nome, sobrenome, email, nivel, senha) VALUES (
      '".$dados['nome']."',
      '".$dados['sobrenome']."',
      '".$dados['email']."',
      '".$dados['nivel']."',
      '".$dados['senha']."'
)";

$resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_insert_id($conn)){
echo "Foi!";
//header("Location: createuser.php"); // Aqui pode ser apenas uma mensagem via Javascript também, ou como preferir
}else{
  
echo "Erro ao cadastrar usuário!" . "<br>";
echo $dados['nome'] . "<br>";
echo $dados['sobrenome'] . "<br>";
echo $dados['email'] . "<br>";
echo $dados['nivel'] . "<br>";
echo $dados['senha'] . "<br>";
}

  }


}


?>
