<?php
    
include_once "paginas/include/header.php";

    if (isset($_GET['pg'])) {
        $paginas = $_GET['pg'];

        switch ($paginas) {

            case 'inicial':
                include "paginas/inicial.php";
                break;
            
            case 'faleConosco':
                include "paginas/faleConosco.php";
                break;
            case 'cardapio':
                include "paginas/Cardapio.php";
                break;
            case 'pedidos':
                include "paginas/pedidos.php";
                break;
            case 'quemSomos':
                include "paginas/quemSomos.php";
            case 'restaurantes':
                include "paginas/locais.php";
                break;
            case 'valideQcode':
                include "paginas/valideQcode.php";
                break;
            case 'pedidos':
                include "paginas/pedidos.php";
                break;
            default:
                echo "pagina não Definida";
                break;
        }

    } 

    // Footer
include_once "paginas/include/footer.php";
