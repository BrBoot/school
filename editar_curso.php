<?php
include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_hr = $_POST['carga_hr'];

$query = "UPDATE CURSOS SET NOME_CURSO = '$nome_curso', DURACAO = $carga_hr WHERE ID_CURSO = $id_curso";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');
