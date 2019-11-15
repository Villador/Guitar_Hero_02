<?php
class Producto{
    private $codigo;
    private $nombre;
    private $descripcion;
    private $precio;
    private $foto;
    private $caracteristica;
    private $stock;

        public function getCodigo(){
            return $this->codigo;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function getFoto(){
            return $this->foto;
        }

        public function getCaracteristica(){
            return $this->caracteristica;
        }

        public function getStock(){
            return $this->stock;
        }

        public function setCodigo($codigo){
            return $this->codigo = $codigo;
        }

        public function setNombre($nombre){
            return $this->nombre = $nombre;
        }

        public function setDescripcion($descripcion){
            return $this->descripcion = $descripcion;
        }

        public function setPrecio($precio){
            return $this->precio = $precio;
        }

        public function setFoto($foto){
            return $this->foto = $foto;
        }

        public function setCaracteristica($caracteristica){
            return $this->caracteristica = $caracteristica;
        }

        public function setStock($stock){
            return $this->stock = $stock;
        }
}


?>