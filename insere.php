<?php
    require_once "banco.php";

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $telefone = $_POST['telefone'];



    if(empty($nome)){
      die("Nome obrigatório!");
    }
    $tamNome = strlen($nome);
    if($tamNome > 30){
      die("Por favor, insira um nome menor que 30 caracteres.");
    }

    $tamApelido = strlen($apelido);
    if($tamApelido > 30){
      die("Por favor, insira um apelido menor que 30 caracteres.");
    }

    if(empty($email)){
      die("Email obrigatório!");
    }
    $tamEmail = strlen($email);
    if($tamEmail > 50){
      die("Por favor, insira um email menor que 50 caracteres.");
    }

    if(empty($telefone)){
      die("Telefone obrigatório!");
    }
    $tamTel = strlen($telefone);
    if($tamTel > 20){
      die("Por favor, insira um telefone menor que 20 caracteres.");
    }

    $username = 'root';
    $password = '';

    try{

      $sql = 'INSERT INTO registros (nome,apelido,telefone,email) VALUES (:nome, :apelido, :telefone, :email)';
      $stmt = getConnection()->prepare($sql);
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':apelido', $apelido);
      $stmt->bindParam(':telefone', $telefone);
      $stmt->bindParam(':email', $email);

      if($stmt->execute()){
        echo "Parabéns! Seu cadastro foi realizado com sucesso!";
      }else{
        echo "ERRO! Falha ao cadastrar";
      }
    }catch(PDOException $e){
      echo 'Erro: '.$e->getMessage();
    }
?>
