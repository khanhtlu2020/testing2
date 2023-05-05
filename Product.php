<?php
class Product{
    //Thuoc tinh
    private $id;
    private $name;
    private $price;
    //Phuong thuc
    //Ham tao: Ham duoc su dung (tu dong) khi khoi tao doi tuong\
    public function __construct($id, $name, $price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    //Ham setter/getter
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
}

$product01 = new Product('1','Tivi Samsung 40inch', 20000);
echo $product01->getName();
$product01 ->setName('Tivi Samsung 40inch FullHD');
echo $product01-> getName();