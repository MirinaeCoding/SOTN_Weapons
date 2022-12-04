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
                
            <div class="1"></div>

                    <div class="2">

                        <div class="grid grid-cols-[1fr_1fr] h-auto">

                            <div class="grid-cols-1 overflow-x-auto w-full bg-[#2A303C] rounded-tl-lg ">
                                    <table class="table w-full border-r-[1px] border-[#242933]">
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
                                            <td class="flex">Mermaid (0.85%)
                                            <div class="form-control w-full max-w-xs flex text-right justify-end">
                                                <label class="label justify-end">
                                                    <span class="label-text">Calculate your % : </span>
                                                    <input type="number" placeholder="Luck" class="input input-bordered w-24 h-6 max-w-xs justify-end ml-2" name="calculate-droprate"/>
                                                </label>

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

                            <div class="grid-cols-2 overflow-x-auto w-full bg-[#2A303C] flex justify-center h-full rounded-tr-lg border-b-[1px]">

                                                <div class="inline-block align-middle">
                                                    <div class="mt-32">
                                                        <td>
                                                            <div class="mb-12">
                                                                <img class= "rounded-md" src="../gif/clubs/holy_rod.webp" alt="" width="200px">
                                                                <p class="text-xs mt-1">Attack animation</p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div>
                                                                <img class= "rounded-md" src="../gif/clubs/holy_rod_spe.webp" alt="" width="200px">
                                                                <p class="text-xs mt-1">Special attack animation</p>
                                                            </div>
                                                        </td>
                                                    </div>
                                                </div>
                                                   
                            </div>

                            
                    </div>
                    <div class="text-justify bg-[#2A303C] border-[#242933] mb-16 rounded-b-lg p-8" >
                    <p>The Holy Rod is a scepter anointed with Holy power. The weapon is hidden inside a secret chamber behind a small reading room in the Long Library (the one that contains the Stone Mask), northeast of the Lesser Demon's room. In order to reach this room, the player must first be in possession of the Leap Stone. Once inside the reading room, push the bookshelf on the right to make it rotate and have access to the secret room, where both the Holy Rod and the Topaz Circlet are found.
                        <br>
                        The Holy Rod is one of the best weapons the player can arm themselves with in the early game and it will remain useful for about two thirds into it (taking both castles in consideration). Its Holy imbuement will deal extra damage to most enemies, which greatly surpasses the weapon's base damage and makes it way more effective than most other weapons the player will come across for most of the game. It also has very long reach, surpassing the length of most swords, and covers more area (both above and below), as it performs a small "explosion" when swung. It's also very easy to wield, allowing to perform diagonal swings with ease.
                        <br>
                        It also counts with a special attack that is performed by pressing ← → + ATTACK (facing right), which makes it produce a large glowing animation that deals about 1½ of the weapon's damage and slightly expands its attack range.
                        <br>
                        Furthermore, the weapon is very fast, allowing the player to perform many swings in quick succession and deal a great amount of damage very quickly, outclassing most other weapons that may even have higher stats. In fact, the player may be able to swing the Holy Rod two or even three times in the same amount of time it would have taken them to swing a more powerful sword only once.</p>
                    </div>
                </div>


                    
                    
                    
    </div> 

    <div class="3"></div>
        
    
</body>

</html>