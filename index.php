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
                                include "paginas/cardapio.php";
                                break;

            case 'Cardapio':
                include "paginas/cardapio.php";
                break;

            case 'pedidos':
                include "paginas/pedidos.php";
                break;
            case 'quemSomos':
                include "paginas/quemSomos.php";
                break;

            case 'locais':
                include "paginas/locais.php";
                break;
            case 'jaestouaqui':
                include "paginas/aquiestou.php";
                break;
            case 'restaurantes':
                include "paginas/restaurantes.php";
                break;
            case 'resumoDeConta':
                include "paginas/resumoDeConta.php";
                break;
            case 'trabalheConosco':
                include "paginas/trabalheConosco.php";
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
    } else {
        echo "pagina não Definida";

    } 

// Footer
include_once "paginas/include/footer.php";
