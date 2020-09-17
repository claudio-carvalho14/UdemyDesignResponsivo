<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <?php
        $titulo = "Design Responsivo";
        global $tituloPagina;
        if($tituloPagina != ''){
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Antigo/jquery.fancybox.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img\favicon.png"> <!-- Carregando favicon -->
</head>
<body>
    <header class="cabecalho">
        <div class="container"><!-- Inicio Container-->
        <?php if($tituloPagina == ''): ?>
            <h1 class="logo">Design Responsivo</h1>
        <?php else: ?>
            <a href="index.php" class="logo">Design Responsivo </a>
        <?php endif; ?>
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/fechar menu</button>
                <ul class="menu-principal_lista">
                        <li><a class="menu-principal_item <?php echo $tituloPagina == '' ? 'menu-principal_item--atual' : '' ?>" href="index.php">Home</a></li> <!-- A classe item atual foi editada via css para deixar o ícone vermelho-->
                        <li><a class="menu-principal_item <?php echo $tituloPagina == 'Sobre Nós' ? 'menu-principal_item--atual' : '' ?>" href="sobre.php">Sobre Nós</a></li>
                        <li><a class="menu-principal_item <?php echo $tituloPagina == 'Portfolio' ? 'menu-principal_item--atual' : '' ?>" href="portfolio.php">Portfolio</a></li>
                        <li><a class="menu-principal_item <?php echo $tituloPagina == 'Contato' ? 'menu-principal_item--atual' : '' ?>" href="contato.php">Contato</a> </li>
                </ul>
            </nav>
        </div><!-- Fim Container-->
    </header>
    <main>