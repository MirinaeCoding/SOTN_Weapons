<?php

@include('database.php');

class model {

    private $pdo;

    public function __construct()
    {

        $this->pdo = null;

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=castlevania_sotn', 'root', '');
        } catch (PDOException $e) {
            echo 'Connection to database failed';
            echo $e;
        }
    }
    

public function insertWeapons($_POST, $_FILES) {

        $data = [
            ":type" => $_POST['type'],
            ":name" => $_POST['name'],
            ":attributes" => $_POST['attributes'],
            ":statistics" => $_POST['statistics'],
            ":found" => $_POST['found'],
            ":droprate" => $_POST['droprate'],
            ":notes" => $_POST['notes'],
            ":img_tmp_name" => file_get_contents($_FILES['image']['tmp_name']),
            ":img_type" => $_FILES['image']['type']

        ];

        $sql = "INSERT INTO weapons VALUES (null, :type, :name, :attributes :statistics, :found, :droprate, :notes, :image, :img_type)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }


public function getAllWeapons($weapons)
    {
        $sql = "SELECT * FROM weapons";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$weapons]);
        return $stmt->fetch();
    }
}


?>