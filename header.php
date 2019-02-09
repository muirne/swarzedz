<html lang="<?php language_attributes() ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>

    <div class="container-fluid one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 brand">
                    <a class="brand__logo" href="#">
            <img class="brand__logo--pic"src="http://localhost/swarzedz/wp-content/uploads/Slice_1-300x74.png" alt="">
        </a>
                </div>
                <div class="col-md-6 adress">
                    <ul class="adress__table">
                        <li>RADAWAY SP.Z O.O.</li>
                        <li>ul.Rabowicka 59, 62-020 Jasin</li>
                        <li>godz.08:00-16:00</li>
                        <li>tel.61 835 75 10</li>
                        <li>email:office@radaway.pl</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid two">
        <div class="row">
            <div class="col-md-8 menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-faded">
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
                    </div>
                </nav>
            </div>
            <div class="col-md-4 search">
                <form class="search__form">
                    <input class="search__form--place" type="search" placeholder="Wyszukaj na stronie.." aria-label="Search" autocomplete="off">
                    <a href="#search">
                 <img src="http://localhost/swarzedz/wp-content/uploads/search-1.png" alt="">
               </a>
                </form>
            </div>
        </div>
    </div>

    <div class="container three">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel__img" src="http://localhost/swarzedz/wp-content/uploads/slider2-1024x578.png" alt=""></img>
                </div>
                <div class="carousel-item">
                    <img class="carousel__img" src="http://localhost/swarzedz/wp-content/uploads/slider-1024x578.png" alt=""></img>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid subthree">
        <div class="row carouseltext">
            <div class="col-md-6">
            </div>
            <div class="col-md-6 carouseltext__shower">
                <p class="carouseltext__shower--text">Kabiny prysznicowe firmy Radaway</p>
            </div>
        </div>
    </div>
    </header>
