<?php

include 'db.php';

$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];

$query = "INSERT INTO alunos_cursos(ALUNO_CURSO_ID, CURSO_ALUNO_ID, DATA_DA_CRIACAO) VALUES('$id_aluno', '$id_curso', NOW())";
mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');