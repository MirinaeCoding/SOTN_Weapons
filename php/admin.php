<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>

        <h1>Formulaire de l'admin</h1>

        <form action="#" method="post" enctype="multipart/form-data">

                <label for="type">Type</label>
                <input type="text" name="type">
                <br><br>
                <label for="type">Name</label>
                <input type="text" name="name">
                <br><br>
                <label for="type">Attributes</label>
                <input type="text" name="attributes">
                <br><br>
                <label for="type">Statistics</label>
                <input type="text" name="statistics">
                <br><br>
                <label for="type">Found</label>
                <input type="text" name="found">
                <br><br>
                <label for="type">Droprate</label>
                <input type="text" name="droprate">
                <br><br>
                <label for="type">Notes</label>
                <input type="text" name="notes">
                <br><br>
                <label for="type">Image</label>
                <input type="file" name="image">
                <br><br>
                <input type="submit" name="btn-insert" value="Envoyer">

        </form>




<?php


        require('../php/controller.php');
        $controller = new controller();

        if (isset($_POST['btn-insert'])) {

                $controller->model->insertWeapons();
        }

?>

</body>

</html>