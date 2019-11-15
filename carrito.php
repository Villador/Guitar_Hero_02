<?php
class Carrito{
  private $usuario;
  private $listado;

public function __construct($usuario,$listado){
  $this->usuario = $usuario;
  $this->lstado = $listado;
}

public function getusuario(){
  $this->usuario;
}
public function getlistado(){
  $this->listado;
}
public function setusuario($usuario){
  $this->usuario = $usuario;
}
public function setlistado($listado){
  $this->listado = $listado;
}
}
