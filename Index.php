<?php
require 'autoload.php';

$e = new Guitar_Hero;

if (isset($_GET['action'])) {

    if ($_GET['action'] === 'products') {
    $title = 'listado de productos'

    $catalog= $e->getCatalog();

    require 'views/product_list.php';

    } else if ($_GET['action'] == 'comprar') {

        // Producto que esta en el catalogo

        $e->addProduct($producto);
    }

    if ($_GET['action'] === 'search') {

    $title = 'resultado de busqueda'

    $catalog = $e->searchProducts($_GET['query']);


    require 'views/product_list.php';

    }
    if($_GET['action'] ==='product-detail'){

      $product = $e->findeProduct($_GET[$id]);

  require 'views/producs_detail.php';

    }


}
