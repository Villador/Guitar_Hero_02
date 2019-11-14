<?php
class Usuario {
private $id;
private $nombre;
private $apellido;
private $email;
private $contrasena;
private $cumpleanos;
private $foto;
private $listaCompras;
private $carrito;


  public function __construct( $mail, $contrasena){
    $this->id=ultimoId();
    $this->email=$mail;
    $this->contrasena= $this->setPass($contrasena);
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function getApellidoe(){
    return $this->$apellido;
  }

  public function getEmail(){
    return $this->email;
  }
  public function getContrasena(){
    return $this->contrasena;
  }

  public function getFoto(){
    return $this->foto;
  }
  public function getCumpleanos(){
    return $this->cumpleanos;
  }

  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function setEmail($email){
    $this->email=$email;
  }
  public function setFoto($foto){
    $this->foto=$foto;
  }
  public function setApellido($apellido){
    $this->apellido=$apellido;
  }

  public function setCumpleanos($cumpleanos){
    $this->cumpleanos=$cumpleanos;
  }

  public function getListCompras(){
    return $this->listacompras;
  }

  public function setlistacompras($listacompras){
    $this->listacompras=$listacompras;
  }

  public function getCarrito(){
    return $this->carrito;
  }

  public function setCarritos($carrito){
    $this->carrito=$carrito;
  }


  public function setPass($contrasena){
    $this->contrasena= $this->encriptarPass($contrasena);
  }


  private function encriptarPass($password){
    return password_hash($password, PASSWORD_DEFAULT);
  }


public function ultimoId(){


  }


public function register(){


}




  // public function mostrarTelefono(){
  //
  //   return $this->celular->getMarca() . $this->celular->getModelo() . (($this->celular->getMarca()==="Movicom")? "y soy fan de iphone" : "");
  // }

  // public function llamar($usuariollama, $tiempo){
  //   if ($this->celular->getProveedor()== $usuariollama->celular->getProveedor()){
  //     $costo=0;
  //
  //   }else {
  // //     $costo=$tiempo*10;
  // //   }
  //
  //   return $costo;
  //
  // }
  // public function addHabilidad (Habilidad $habilidad){
  //   $this->habilidad[]=$habilidad;
  // }

}

 ?>
