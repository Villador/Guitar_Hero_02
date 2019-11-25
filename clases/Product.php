<?php

class Product
{
    private $price;
    private $title;
    private $id;

public function getID($id)
{
  return $this->id;
}

public function setId($id)
{
  $this->id = $id;

  return $this;
}
    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setTtilte()
    {
      $this->title = $title;
      return $title;
    }
    public function getTitle()
    {
       return $this->title;
    }
}
