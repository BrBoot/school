<?php

$conexao = mysqli_connect('localhost','root','','escola');	
    mysqli_set_charset($conexao, "utf8");
    if($conexao){
        echo "Conectado com sucesso";
    }
	else{
        echo "Erro na conexão:";
    }

    $query = "SELECT * FROM cursos";
    $consulta_cursos = mysqli_query($conexao, $query);

    $query = "SELECT * FROM alunos";
    $consulta_alunos = mysqli_query($conexao, $query);

    $query = "SELECT alunos.NOME_ALUNO, cursos.NOME_CURSO
                    FROM alunos, cursos, alunos_cursos
                    WHERE alunos_cursos.ALUNO_CURSO_ID = alunos.ID_ALUNO
                    AND alunos_cursos.CURSO_ALUNO_ID = cursos.ID_CURSO";
    $consulta_matriculas = mysqli_query($conexao, $query);