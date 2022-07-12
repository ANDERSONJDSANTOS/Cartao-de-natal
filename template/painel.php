
    <?php include "header.php" ?>
    <?php include "menu.php" ?>
    
    <!-- conteúdo-->

    <?php
    if(isset($_GET['rota'])){
        switch($_GET['rota']){

            case 'painel':
                include "painel/conteudo.php";
            break;

            case 'templates':
                include "painel/templates.php";
            break;

            case 'Contato':
                include "painel/Contato.php";
            break;

            case 'Grafico':
                include "painel/Grafico.php";
            break;

            case 'ver_cartao':
                include "painel/ver_cartao.php";
            break;

            case 'pegar_link.php':
                include "painel/pegar_link.php";
            break;
        }
    }
    ?>



    <?php include "js.php" ?>

    
    
    
  