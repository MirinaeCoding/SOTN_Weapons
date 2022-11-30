<?php

require('database.php'); // toujours require

class model
{

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

    public function insertWeapons($formdata, $imgdata)
    {
        $sql = "INSERT INTO weapons VALUES(null, :type, :name, :attributes, :statistics, :found, :drop, :notes, :specials,:image, :imgType)";

        $stmt = $this->pdo->prepare($sql);

        $data = array(
            "type" => $formdata['type'],
            "name" => $formdata['name'],
            "attributes" => $formdata['attributes'],
            "statistics" => $formdata['statistics'],
            "found" => $formdata['found'],
            "drop" => $formdata['drop'],
            "notes" => $formdata['notes'],
            "specials" => $formdata['specials'],
            "image" => file_get_contents($imgdata['tmp_name']),
            "imgType" => $imgdata['type']
        );

        $stmt->execute($data);
    }


    public function getWeapons()
    {
        $sql = "SELECT * FROM weapons";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function getWeaponImage($weaponName)
    {
        $pdo = new PDO ('mysql:host=localhost;dbname=castlevania_sotn', 'root', '');
        return $pdo->query("SELECT * FROM weapons WHERE name LIKE '%$weaponName%'")->fetchAll();
    }
}
