<?php
include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$email_aluno = $_POST['email_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query = "UPDATE ALUNOS SET DATA_NASCIMENTO = '$data_nascimento', EMAIL = '$email_aluno', NOME_ALUNO = '$nome_aluno'
                WHERE ID_ALUNO = $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');