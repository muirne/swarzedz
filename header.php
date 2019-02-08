<html lang="<?php language_attributes() ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <script type="javascript"><?php include('/js/main.js');?></script>

    <div class="container-fluid one">
        <div class="brand">


        <a class="navbar-brand" href="#">
            <img src="http://localhost/swarzedz/wp-content/uploads/LOGO-01-300x69.jpg" alt="">
        </a>
            </div>
            <div class="adress">
                <ul class="adress__table">
                    <li>RADAWAY SP.Z O.O.</li>
                    <li>ul.Rabowicka 59, 62-020 Jasin</li>
                    <li>godz.08:00-16:00</li>
                    <li>tel.61 835 75 10</li>
                    <li>email:office@radaway.pl</li>
                </ul>

            </div>
    </div>
    <div class="container-fluid two">


        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentLG" aria-controls="navbarSupportedContentLG" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContentLG">
                <a class="responsive"><span></span></a>
                <?php wp_nav_menu(
                          array(
                           'menu'=>'radaway',
                           'theme_location' => 'top',
                           'container' => 'nav',
                           'container_class' => false,
                           'menu_class' => 'nav',
                           'menu_id' => 'top-menu' ,
                           )
                       ); ?>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Wyszukaj na stronie" aria-label="Search">

                    <a href="#search">
                        <i class="fa fa-search"></i>
                    </a>
                </form>


            </div>
        </nav>




    </div>
    <div class="container-fluid three">

        <div id="demo" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel__img" src="http://localhost/swarzedz/wp-content/uploads/slider2-1024x578.png" alt="">
                    <div class="carousel__text">

                        <p class="carousel__text--shower">Kabiny prysznicowe firmy Radaway</p>

                    </div>
                    </img>
                </div>
                <div class="carousel-item">
                    <img class="carousel__img" src="http://localhost/swarzedz/wp-content/uploads/slider-1024x578.png" alt="">
                    <div class="carousel__text">

                        <p class="carousel__text--shower">Kabiny prysznicowe firmy Radaway</p>

                    </div>
                    </img>
                </div>
            </div>
        </div>

    </div>

    </header>
