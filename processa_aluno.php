<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];
$email_aluno = $_POST['email_aluno'];

$query = "INSERT INTO alunos(DATA_DA_CRIACAO, DATA_NASCIMENTO, EMAIL, NOME_ALUNO) VALUES(NOW(), '$data_nascimento', '$email_aluno', '$nome_aluno')";
mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
