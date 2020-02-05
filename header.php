<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <html lang="pt-br">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">    
    <script src="https://kit.fontawesome.com/dbd07a4d89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Cursos On-line</title>

</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo"></a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <?php if(isset($_SESSION['login'])){ ?>
                    <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair)</a>
                <?php } ?> 
            </div>
        </div>    
    </header>

        <div id="conteudo" class="container">
