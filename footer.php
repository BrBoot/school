</div>

<footer>
    <div class="container">
        <div class="direitos">
            Cursos OnLine - Copyright © 2020
        </div>
        <div class="contatos">   
            <a href="https://github.com/BrBoot"><span style="font-size: 24px"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/eduardo-alexandre-da-silva-98a5a0b8/"><span style="font-size: 24px"><i class="fab fa-linkedin"></i></a>
        </div>    
    </div>

<script src="js/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
        $('#alunos').DataTable(); //informar qual tabela vai aplicar a formatação
        $('#cursos').DataTable();
        $('#matriculas').DataTable();
    });
</script>
</footer>
</body>
</html>