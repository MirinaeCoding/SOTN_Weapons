<?php @require "navbar.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <title>Castlevania SOTN - Weapons</title>
</head>

<body class="bg-gray-900">

<?php
            require('../php/controller.php');
            $controller = new controller();
            $weapons = $controller->model->getWeapons();
?>

            <!--

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
            -->

    <div class="grid grid-cols-[1fr_3fr_1fr] gap-2">
        <div class="grid-cols-1"></div>
        <div class="grid-cols-2">
            <div class="overflow-x-auto w-full">
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                        <th></th>
                        <th>Item</th>
                        <th>Note</th>
                        <th>Attributes</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($weapons as $weapon) : ?>
                            <tr>
                                <th>
                                </th>
                                <td>
                                    <div class="flex items-center space-x-3">
                                        <div>
                                            <div>
                                                <img src="data:<?= $weapon['img_type'] ?>; base64, <?= base64_encode($weapon['image']) ?>" alt="" width="50px">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold"><?= $weapon['name'] ?></div>
                                            <div class="text-sm opacity-50"><?= $weapon['type'] ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?= $weapon['notes'] ?>

                                </td>
                                <td><?= $weapon['statistics'] ?></td>
                                <th>
                                    <a href="item.php"><button class="btn btn-ghost btn-xs">Details</button></a>
                                </th>
                            </tr>
                        <?php endforeach; ?>

                </table>
            </div>
        </div>
        <div class="grid-cols-3"></div>
    </div>




</body>

</html>