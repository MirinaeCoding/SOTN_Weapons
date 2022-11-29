<?php

@include 'model.php';

class controller {

    private $pdo;
    public $model;

    public function __construct()
    {

        $this->pdo = null;
        $this->modele = new model();

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=castlevania_sotn', 'root', '');
        } catch (PDOException $e) {
            echo 'Connection to database failed';
            echo $e;
        }
    }


    public function insertWeapons(){
        $this->model->insertWeapons();
    }

    }
    

?>