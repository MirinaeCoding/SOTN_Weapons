<?php //@require "../php/database.php" 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Castlevania SOTN - Weapons</title>
</head>

<body>

    <div class="table-wrapper">
        <table class="fl-table">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Notes</th>
                <th>Attributes</th>
                <th>Statistics</th>
                <th>Found</th>
                <th>Drop</th>
                <th>Effects</th>
                <th>Specials</th>
            </tr>


            <?php
            require('../php/controller.php');
            $controller = new controller();
            $weapons = $controller->model->getWeapons();

            // $image = $controller->model->getWeaponImage("Astral Dagger");

            foreach ($weapons as $weapon) : ?>

                <tr>
                    <td><img src="data:<?= $weapon['img_type'] ?>; base64, <?= base64_encode($weapon['image']) ?>" alt="" width="70px"></td>
                    <td><b><?= $weapon['name'] ?></b></td>
                    <td><?= $weapon['type'] ?></td>
                    <td><?= $weapon['notes'] ?></td>
                    <td><?= $weapon['attributes'] ?></td>
                    <td><?= $weapon['statistics'] ?></td>
                    <td><?= $weapon['found'] ?></td>
                    <td><?= $weapon['dropped'] ?></td>
                    <td><?= $weapon['effects'] ?></td>
                    <td><?= $weapon['specials'] ?></td>
                </tr>

            <?php endforeach; ?>


        </table>
    </div>



    </table>

</body>

</html>