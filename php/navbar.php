
    <div class="grid grid-cols-[1fr_3fr_1fr] gap-2">

        <div class="1"></div>

        <div class="2 grid-cols-[1fr_1fr] flex">

            <div class="1 flex">
                        <a href="home.php">
                            <div class="flex items-center">
                                <img src="../images/other/logo.png" alt="" width="200">
                                <p class="font-mono">Encyclopedia</p>
                            </div>
                        </a>
            </div>

            <div class="2 flex justify-end items-center w-full">
                <input type="text" placeholder="Search" class="input w-full max-w-xs" name="item-search"/>
                <input class="btn ml-2" type="submit" name="search" value="Search">
            </div>

        </div>

        <div class="3"></div>

    </div>

    <?php


    if(isset($_POST['search'])){

        $word = $_POST['item-search'];

        $controller->model->searchItem($word);
    }


    ?>