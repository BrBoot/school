<?php

include 'db.php';

$id_aluno_curso = $_GET['id_aluno_curso'];

$query = "DELETE FROM alunos_cursos WHERE ID_ALUNO_CURSO = $id_aluno_curso";
mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');