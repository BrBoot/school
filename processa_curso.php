<?php

include 'db.php';

$nome_curso = $_POST['nome_curso'];
$carga_hr = $_POST['carga_hr'];

$query = "INSERT INTO cursos(DATA_DA_CRIACAO, DURACAO, NOME_CURSO) VALUES(NOW(), '$carga_hr', '$nome_curso')";
mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');