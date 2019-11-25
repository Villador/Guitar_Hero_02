<?php

class Guitar_Hero
{
  private $carrito;

  private $usuario;

  private $catalogo = [];

  public function __construct()
  {
    $this->carrito = new Carrito;

    $this->catalogo [

      (new Product)-> setId(1)-> setPrice(100000)->setTilte('Guitarra Electrica'),           //le agregamos valores a mano//
      (new Product)-> setId(2)-> setPrice(101000)->setTilte('Guitarra'),
      (new Product)-> setId(3)-> setPrice(102000)->setTilte('Guitarra criolla'),
      (new Product)->  setId(4)-> setPrice(103000)->setTilte('ukelele'),                                               //new Product -> setPrice() esto no se puede hacer
    ];
  }

  public function searchProducts()
  {

    $results = [];

    foreach ($this->catalogo as $product){

      if(stripos($product->getTitle, $query)!== false){      //stripos es flexible para la busqueda de strings.

        return $results [] = $product;
      }
    }
    return $results;
  }


  public function getCatalog()
  {
    return $this->catalogo;
  }

  public function addProduct(Product $product, int $qty = 1)
  {
    $this->carrito->addProduct($product, 6);
  }

  public function findProduct(int $id)
  {
    foreach ($this->catalogo as $product) {
      if ($product->getId() === $id) {
        return $product;
      }
  }
  }

  public function register(array $data)
  {
    // creo un usuario
  }

  public function login(array $data)
  {
    // guarda en sesion
  }
}
