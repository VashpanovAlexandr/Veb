<?php

$xml = simplexml_load_file("data.xml") or die("Error");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>1</title>
</head>
<body>
    <a href="admin.php">Check admin page</a>
    <header>
        <div class="header_left">
            <img src="images/header.png" alt="mint photo">
        </div>
        <div class="header_right">
                <div class="menu_hiden">Menu</div>
                <ul class="header_items">
                    <li class="header_item search"></li>
                    <li class="header_item corzina"></li>
                    <li class="header_item sign_up">Sign Up</li>
                    <li class="header_item sign_in">Sign In</li>
                </ul>
            <div class="header_text">
                <h1>
                Kembang <br>
                Flower Mantap</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
    </header>

    <main>
        <div class="main_items">

            <div class="box">
                <div class="main_name_container">
                    <div class="img1"></div>
                    <div class="main_item_name">
                        <h3>fast <br> 
                            delivery</h3>
                    </div>
                </div>
                <div class="main_item_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>

            <div class="box">
                <div class="main_name_container">
                    <div class="img2"></div>
                    <div class="main_item_name">
                        <h3>great customer <br> 
                            service</h3>
                    </div>
                </div>
                <div class="main_item_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>

            <div class="box">
                <div class="main_name_container">
                    <div class="img3"></div>
                    <div class="main_item_name">
                        <h3>original <br> 
                            plants</h3>
                    </div>
                </div>
                <div class="main_item_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>

            <div class="box">
                <div class="main_name_container">
                    <div class="img4"></div>
                    <div class="main_item_name">
                        <h3>affordable <br> 
                            price </h3>
                    </div>
                </div>
                <div class="main_item_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>
        </div>

        <div class="featured_plants">
                <h2>Featured Plants</h2>
                <hr>
        </div>
        <div class="products">

            <?php foreach ($xml->plant as $plant) { ?>
                <div class="products_item" id=<?= $plant->del_id ?>>
                    <div id="<?= $plant->photo_id ?>"></div>
                    <p class="products_name"><?= $plant->name ?></p>
                    <p class="products_price">$ <?= $plant->price ?></p>
                </div>
            <?php }?>
        </div>

        <div class="recomendation">
            <div class="recomendation_left">
                <h2>Buy more plants, it helps you with session</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa vero velit at nobis! Voluptates repudiandae ullam, molestias voluptas quam qui officiis vel reiciendis iure iusto, animi, quia temporibus dicta velit! Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <div class="recomendation_photo"></div>
            </div>
            <div class="recomendation_right"></div>
        </div>

        <div class="visit">
            <div class="visit_left">
                <h2>Get your favourites plant on our shop now</h2>
                <a href="" class="visit_link">Visit Shop</a>
            </div>
            <div class="visit_right"></div>
        </div>

    </main>

    <footer>
        <div class="first_column">
            <h3>Plantku</h3>
            <h4>Plantku House</h4>
            <p>	Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55282
            </p>   
        </div>
        <div class="second_column">
            <h4>Perusahaan</h4>
            <p>Tentang Kami</p>
            <p>Hubungi Kami</p>
        </div>
        <div class="third_column">
            <h4>Produk</h4>
            <p>Tanaman</p>
            <p>Tanaman Lain</p>
        </div>
        <div class="last_column">
            <h4>Berlangganan Email Kami</h4>
            <form action="">
                <input type="tel" placeholder="Masukan Alamat Email">
                <button>Submit</button>
            </form>
        </div>
    </footer>
</body>
</html>