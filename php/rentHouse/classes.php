<?php
require("../connectionTodatabase.php");

abstract class Crud
{
    abstract public function Getdata();
    abstract public function insertAndUpdate();
    abstract public function delete();
}

class House extends Crud
{
    private $conn;
    public function Getdata(){
        $query = $this->conn->prepare("SELECT title,description,price,city from houses");
    }
    public function insertAndUpdate(){
        
    }
    public function delete(){

    }
}
function insertData(){
    if(isset($_POST["submit"])){
        if(isset($_POST["house-title"]) and isset($_POST["house-description"]) and isset($_POST["house-price"]) and isset($_POST["house-address"]) and isset($_POST["house-city"]) and isset($_POST["property-type"]) and isset($_FILES["house-image"]) and isset($_POST["IsAvailable"])){
            $title = $_POST["house-title"];
            $description = $_POST["house-description"];
            $price = $_POST["house-price"];
            $house_Adress = $_POST["house-address"];
            $house_City = $_POST["house-city"];
            $property_type = $_POST["property-type"];
            $house_images = $_FILES["house-image"];
            print_r($house_images);
            
        }

    }

}
insertData();
?>