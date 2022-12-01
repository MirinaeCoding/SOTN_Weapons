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
    <title>Castlevania SOTN - Item</title>
</head>

<body class="bg-gray-900">

<?php
            require('../php/controller.php');
            $controller = new controller();
            $weapons = $controller->model->getWeapons();
?>

<div class="grid grid-cols-[1fr_3fr_1fr] gap-2">
    
        <div class="grid-cols-1"></div>

            <div class="grid grid-cols-[1fr_1fr]">

                <div class="grid-cols-1 overflow-x-auto w-full ">
                    <table class="table w-full">
                        <tr>
                            <td>
                                <div class="avatar">
                                    <div class="w-24">
                                        <img src="../images/clubs/holy_rod.webp" width="30"/>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="text-5xl">
                                    <div class="font-bold">Holy Rod</div>
                                    <div class="text-sm opacity-50">Clubs</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Attributes</th>
                            <td>Cut</td>
                        </tr>

                        <tr>
                            <th>Found in</th>
                            <td>Marble Gallery</td>
                        </tr>

                        <tr>
                            <th>Bought for</th>
                            <td>$1.500</td>
                        </tr>

                        <tr>
                            <th>Dropped by</th>
                            <td class="flex">Mermaid 
                            <div class="form-control w-full max-w-xs flex text-right justify-end">
                                <label class="label justify-end">
                                    <span class="label-text">Calculate your droprate</span>
                                </label>
                                <input type="text" placeholder="Luck" class="input input-bordered w-24 h-6 max-w-xs justify-end" />

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>Effects</th>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Special</th>
                            <td>â†â†’ + [Attack] for Horizontal Knife Slash</td>
                        </tr>

                    </table>
                </div>

                <div class="grid-cols-1 overflow-x-auto w-full bg-gray-900">
                    <table class="table w-full">
                        <tr>
                            <div class="flex justify-center items-center">
                                <td>
                                    <div>
                                        <img class= "rounded-md" src="../gif/clubs/holy_rod.webp" alt="">
                                        <p class="text-xs mt-1">Attack animation</p>
                                    </div>
                                </td>

                                <td>
                                    <div>
                                        <img class= "rounded-md" src="../gif/clubs/holy_rod_spe.webp" alt="">
                                        <p class="text-xs mt-1">Special attack animation</p>
                                    </div>
                                </td>
                            <div>

                        </tr>
                        <tr>


                    </table>
                </div>



        </div>

        

        
        

        
        <div class="grid-cols-3"></div>
    
</body>

</html>