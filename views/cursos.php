<a class="btn btn-primary mb-3" href="?pagina=inserir_curso">Inserir novo curso</a>


<table class="table table-hover" id="cursos">
    <thead>
        <tr>
            <th>Nome do curso</th>
            <th>Carga Horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<tr><td>'.$linha['NOME_CURSO']. '</td>';
                echo '<td>'.$linha['DURACAO']. '</td>';
        ?>
            <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['ID_CURSO'];?>"><i class="fas fa-user-edit"></a></td>
            <td><a href="deleta_curso.php?id_curso=<?php echo $linha['ID_CURSO'];?>"><span style="color: #FFA069"><i class="fas fa-trash-alt"></a></td></tr>

        <?php
            }
        ?>    
    </tbody>
</table>

  
