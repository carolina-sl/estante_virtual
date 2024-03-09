<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Estante Virtual · Bootstrap</title>

        <!-- Bootstrap core CSS -->
    <?php 
    echo $this->Html->css('bootstrap.min.css'); 
    echo $this->Html->css('starter-template.css'); 
    
    ?>

    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Estante Virtual</a>
<!--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>-->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link"> <?php echo  $this->Html->link('Início', ['controller' => 'inicio', 'action' => 'pagina_inicial'], ['class' => 'nav-link']) ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> <?php echo  $this->Html->link('Usuários', '/users', ['class' => 'nav-link']) ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> <?php echo  $this->Html->link('Livros', '/livros', ['class' => 'nav-link']) ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> <?php echo  $this->Html->link('Leituras', '/leituras', ['class' => 'nav-link']) ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> <?php echo  $this->Html->link('Relatórios', ['controller' => 'relatorios', 'action' => 'relatorio_leituras'], ['class' => 'nav-link']) ?> </a>
                    </li>
<!--                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>-->
                </ul>
                <!--    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>-->
            </div>
        </nav>

        <main role="main" class="container">
    <?php 
    
    echo $this->Flash->render();

    echo $this->fetch('content'); 
    
    ?>

            <!-- content -->
        </main>

<?php
    echo $this->Html->script('jquery-3.4.1.slim.min.js');
    echo $this->Html->script('bootstrap.bundle.min.js');
?>

    </body>
</html>
