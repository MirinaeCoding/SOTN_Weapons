<?php

require('model.php');

class controller
{

    private $pdo;
    public $model;

    public function __construct()
    {

        $this->pdo = null;
        $this->model = new model();

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=castlevania_sotn', 'root', '');
        } catch (PDOException $e) {
            echo 'Connection to database failed';
            echo $e;
        }
    }


    public function insertWeapons($formdata, $imgdata)
    {
        $this->model->insertWeapons($formdata, $imgdata);
    }

    public function getWeapons()
    {
        $this->model->getWeapons();
    }

    public function getWeaponImage($weaponName)
    {
        $this->model->getWeaponImage($weaponName);
    }
}
