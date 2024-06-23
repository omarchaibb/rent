<?php  
require"../connectionTodatabase.php.php";

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET["submit"])){
            @$id = $_GET["id"];
            if($id){
                $query = $conn->prepare("SELECT title,city,isAvailable,prix,image from house where id = ?");
                $query->execute([$id]);

                $rows = $query->fetchAll(PDO::FETCH_ASSOC);
                header('Content-type:application/json');
                echo json_encode($rows);                
            }else{
                $query = $conn->prepare('SELECT house.id_house,title,city,adress,adress,description,isAvailable house.id_user,prix,image');
            }

        }
    }else if($_SERVER["REQUEST_METHOD"] == "post"){
        if(isset($_POST["submit"])){
            @$id = $_POST["id"];

            $title = $_POST["title"];
            $description = $_POST["description"];
            $prix_per_month = $_POST["prix"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $isAvailable = $_POST["isAvailable"];

            $image = null;
            if(isset($_FILES["house-image"])){
                $image = $_FILES["house-image"]["name"];
                $image_size = $_FILES["house-image"]["size"];
                $image_type = $_FILES["house-image"]["tmp_name"];
                $image_error = $_FILES["house-image"]["error"];
                
            }
            if($id){
                $query = $conn->prepare("INSERT into houses vales (null,null,?,?,?,?,?,?,?,?,null,now())");

            }
        }
        
    }
?>