<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best shop Rwanda</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="{{asset('images/fav.ico')}}" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{ asset('css/style-prefix.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        ion-icon {
            --ionicon-stroke-width: 32px;
        }
    </style>
</head>

<body>



<div class="overlay" data-overlay></div>


<!--
  - HEADER
-->

@include('inc.header');



<!--
  - MAIN
-->

<main>

    <!--
      - BANNER
    -->

    <div class="banner">

        <div class="container">

            <div class="slider-container has-scrollbar">

                <div class="slider-item">

                    <img src="{{asset('images/banner-1.jpg')}}" alt="women's latest fashion sale" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Trending item</p>

                        <h2 class="banner-title">Top kitchen appliances</h2>

                        <p class="banner-text">
                            starting from &dollar; <b>20.00</b>
                        </p>

                        <a href="#" class="banner-btn">Shop now</a>

                    </div>

                </div>

                <div class="slider-item">

                    <img src="{{asset('images/banner-2.jpg')}}" alt="modern sunglasses" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Trending accessories</p>

                        <h2 class="banner-title">Top bakeries equipments</h2>

                        <p class="banner-text">
                            starting at &dollar; <b>15.00</b>
                        </p>

                        <a href="#" class="banner-btn">Shop now</a>

                    </div>

                </div>

                <div class="slider-item">

                    <img src="{{asset('images/banner-3.jpg')}}" alt="new fashion summer sale" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Sale Offer</p>

                        <h2 class="banner-title">Coffee materials</h2>

                        <p class="banner-text">
                            starting from &dollar; <b>29.99</b>
                        </p>

                        <a href="index.php" class="banner-btn">Shop now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

        <div class="container">

            <div class="category-item-container has-scrollbar">



                <div class="category-item">

                    <div class="category-img-box">
                        <img src="{{asset('images/icons/kitchen.svg')}}" alt="kitchen" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Kitchen materials</h3>

                            <p class="category-item-amount">(35)</p>
                        </div>

                        <a href="#" class="category-btn">Show all</a>

                    </div>

                </div>

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="images/icons/coffee.svg" alt="coffee" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Coffee materials</h3>

                            <p class="category-item-amount">(16)</p>
                        </div>

                        <a href="#" class="category-btn">Show all</a>

                    </div>

                </div>

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="images/icons/Butchery.svg" alt="Butchery" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Butchery</h3>

                            <p class="category-item-amount">(27)</p>
                        </div>

                        <a href="#" class="category-btn">Show all</a>

                    </div>

                </div>

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="images/icons/Bakery.svg" alt="Bakery" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Bakery</h3>

                            <p class="category-item-amount">(39)</p>
                        </div>

                        <a href="#" class="category-btn">Show all</a>

                    </div>

                </div>

            </div>

        </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

        <div class="container">


            <!--
              - SIDEBAR
            -->

            <div class="sidebar  has-scrollbar" data-mobile-menu>

                <div class="sidebar-category">

                    <div class="sidebar-top">
                        <h2 class="sidebar-title">Category</h2>

                        <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>

                    <ul class="sidebar-menu-category-list">

                        <li class="sidebar-menu-category">

                            <button class="sidebar-accordion-menu" data-accordion-btn>

                                <div class="menu-title-flex">
                                    <img src="images/icons/kitchen.svg" alt="clothes" width="20" height="20" class="menu-title-img">

                                    <p class="menu-title">Kitchen materials</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>

                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="300" class="stock" title="Available Stock">300</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="60" class="stock" title="Available Stock">60</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">jacket</p>
                                        <data value="50" class="stock" title="Available Stock">50</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="87" class="stock" title="Available Stock">87</data>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="sidebar-menu-category">

                            <button class="sidebar-accordion-menu" data-accordion-btn>

                                <div class="menu-title-flex">
                                    <img src="images/icons/coffee.svg" alt="footwear" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">coffee materials</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>

                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="45" class="stock" title="Available Stock">45</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="75" class="stock" title="Available Stock">75</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="35" class="stock" title="Available Stock">35</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="26" class="stock" title="Available Stock">26</data>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="sidebar-menu-category">

                            <button class="sidebar-accordion-menu" data-accordion-btn>

                                <div class="menu-title-flex">
                                    <img src="images/icons/Butchery.svg" alt="clothes" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Butchery</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>

                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="46" class="stock" title="Available Stock">46</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="73" class="stock" title="Available Stock">73</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="61" class="stock" title="Available Stock">61</data>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="sidebar-menu-category">

                            <button class="sidebar-accordion-menu" data-accordion-btn>

                                <div class="menu-title-flex">
                                    <img src="images/icons/Bakery.svg" alt="perfume" class="menu-title-img" width="20" height="20">

                                    <p class="menu-title">Bakery</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>

                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="12" class="stock" title="Available Stock">12 pcs</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="60" class="stock" title="Available Stock">60 pcs</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="50" class="stock" title="Available Stock">50 pcs</data>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Material</p>
                                        <data value="87" class="stock" title="Available Stock">87 pcs</data>
                                    </a>
                                </li>

                            </ul>

                        </li>




                    </ul>

                </div>

                <div class="product-showcase">

                    <h3 class="showcase-heading">best sellers</h3>

                    <div class="showcase-wrapper">

                        <div class="showcase-container">

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="images/products/1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">baby fabric shoes</h4>
                                    </a>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$5.00</del>
                                        <p class="price">$4.00</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img" width="75" height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">men's hoodies t-shirt</h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-half-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$17.00</del>
                                        <p class="price">$7.00</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75" height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">girls t-shirt</h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-half-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$5.00</del>
                                        <p class="price">$3.00</p>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <a href="#" class="showcase-img-box">
                                    <img src="images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75" height="75">
                                </a>

                                <div class="showcase-content">

                                    <a href="#">
                                        <h4 class="showcase-title">woolen hat for men</h4>
                                    </a>
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <del>$15.00</del>
                                        <p class="price">$12.00</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="product-box">

                <!--
                  - PRODUCT GRID
                -->

                <div class="product-main">

                    <h2 class="title">New Products</h2>

                    <div class="product-grid">

                        <div class="showcase">

                            <div class="showcase-banner">

                                <img src="images/products/jacket-3.jpg" alt="Coffe machine" width="300" class="product-img default">
                                <img src="images/products/jacket-3.jpg" alt="Coffe machine" width="300" class="product-img hover">

                                <p class="showcase-badge">15%</p>

                                <div class="showcase-actions">

                                    <button class="btn-action">
                                        <ion-icon name="cart"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>

                            <div class="showcase-content">

                                <a href="" class="showcase-category">jacket</a>

                                <a href="detail.php">
                                    <h3 class="showcase-title">Coffe machine</h3>
                                </a>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$48.00</p>
                                    <del>$75.00</del>
                                    <ion-icon name="cart" style="color: black;"></ion-icon>

                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/shirt-1.jpg" alt="Juice maker" class="product-img default" width="300">
                                <img src="images/products/shirt-2.jpg" alt="Juice maker" class="product-img hover" width="300">

                                <p class="showcase-badge angle black">sale</p>

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">shirt</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Juice maker</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$45.00</p>
                                    <del>$56.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/jacket-5.jpg" alt="Kitchem tools cutter" class="product-img default" width="300">
                                <img src="images/products/jacket-6.jpg" alt="Kitchem tools cutter" class="product-img hover" width="300">

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">Jacket</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Kitchem tools cutter</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$58.00</p>
                                    <del>$65.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/clothes-3.jpg" alt="Dough mixer" class="product-img default" width="300">
                                <img src="images/products/clothes-4.jpg" alt="Dough mixer" class="product-img hover" width="300">

                                <p class="showcase-badge angle pink">new</p>

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">skirt</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Dough mixer</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$25.00</p>
                                    <del>$35.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/shoe-2.jpg" alt="Electric Barbecue grill" class="product-img default" width="300">
                                <img src="images/products/shoe-2_1.jpg" alt="Electric Barbecue grill" class="product-img hover" width="300">

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">casual</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Electric Barbecue grill</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$99.00</p>
                                    <del>$105.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/watch-3.jpg" alt="Blender" class="product-img default" width="300">
                                <img src="images/products/watch-4.jpg" alt="Blender" class="product-img hover" width="300">

                                <p class="showcase-badge angle black">sale</p>

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">watches</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Blender</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$150.00</p>
                                    <del>$170.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">

                                <img src="images/products/jacket-3.jpg" alt="Coffe machine" width="300" class="product-img default">
                                <img src="images/products/jacket-3.jpg" alt="Coffe machine" width="300" class="product-img hover">

                                <p class="showcase-badge">15%</p>

                                <div class="showcase-actions">

                                    <button class="btn-action">
                                        <ion-icon name="cart"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>

                            <div class="showcase-content">

                                <a href="" class="showcase-category">jacket</a>

                                <a href="detail.php">
                                    <h3 class="showcase-title">Coffe machine</h3>
                                </a>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$48.00</p>
                                    <del>$75.00</del>
                                    <ion-icon name="cart" style="color: black;"></ion-icon>

                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/shirt-1.jpg" alt="Juice maker" class="product-img default" width="300">
                                <img src="images/products/shirt-2.jpg" alt="Juice maker" class="product-img hover" width="300">

                                <p class="showcase-badge angle black">sale</p>

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">shirt</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Juice maker</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$45.00</p>
                                    <del>$56.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/jacket-5.jpg" alt="Kitchem tools cutter" class="product-img default" width="300">
                                <img src="images/products/jacket-6.jpg" alt="Kitchem tools cutter" class="product-img hover" width="300">

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">Jacket</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Kitchem tools cutter</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$58.00</p>
                                    <del>$65.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/clothes-3.jpg" alt="Dough mixer" class="product-img default" width="300">
                                <img src="images/products/clothes-4.jpg" alt="Dough mixer" class="product-img hover" width="300">

                                <p class="showcase-badge angle pink">new</p>

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">skirt</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Dough mixer</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$25.00</p>
                                    <del>$35.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/shoe-2.jpg" alt="Electric Barbecue grill" class="product-img default" width="300">
                                <img src="images/products/shoe-2_1.jpg" alt="Electric Barbecue grill" class="product-img hover" width="300">

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">casual</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Electric Barbecue grill</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$99.00</p>
                                    <del>$105.00</del>
                                </div>

                            </div>

                        </div>

                        <div class="showcase">

                            <div class="showcase-banner">
                                <img src="images/products/watch-3.jpg" alt="Blender" class="product-img default" width="300">
                                <img src="images/products/watch-4.jpg" alt="Blender" class="product-img hover" width="300">

                                <p class="showcase-badge angle black">sale</p>

                                <div class="showcase-actions">
                                    <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button>

                                    <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>

                            <div class="showcase-content">
                                <a href="#" class="showcase-category">watches</a>

                                <h3>
                                    <a href="detail.php" class="showcase-title">Blender</a>
                                </h3>

                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>

                                <div class="price-box">
                                    <p class="price">$150.00</p>
                                    <del>$170.00</del>
                                </div>

                            </div>

                        </div>



                    </div>

                </div>

                <!--
                  - PRODUCT MINIMAL
                -->

                <div class="product-minimal">

                    <div class="product-showcase">

                        <h2 class="title">New Arrivals</h2>

                        <div class="showcase-wrapper has-scrollbar">

                            <div class="showcase-container">

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                                        </a>

                                        <a href="#" class="showcase-category">Clothes</a>

                                        <div class="price-box">
                                            <p class="price">$45.00</p>
                                            <del>$12.00</del>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="images/products/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                                        </a>

                                        <a href="#" class="showcase-category">Clothes</a>

                                        <div class="price-box">
                                            <p class="price">$61.00</p>
                                            <del>$9.00</del>
                                        </div>

                                    </div>

                                </div>



                            </div>



                        </div>

                    </div>

                    <div class="product-showcase">

                        <h2 class="title">Trending</h2>

                        <div class="showcase-wrapper  has-scrollbar">

                            <div class="showcase-container">



                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="images/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img" width="70">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                                        </a>

                                        <a href="#" class="showcase-category">Party wear</a>

                                        <div class="price-box">
                                            <p class="price">$94.00</p>
                                            <del>$42.00</del>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img" width="70">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                                        </a>

                                        <a href="#" class="showcase-category">Sports</a>

                                        <div class="price-box">
                                            <p class="price">$54.00</p>
                                            <del>$65.00</del>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="product-showcase">

                        <h2 class="title">Top Rated</h2>

                        <div class="showcase-wrapper  has-scrollbar">

                            <div class="showcase-container">



                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="images/products/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img" width="70">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">shampoo conditioner packs</h4>
                                        </a>

                                        <a href="#" class="showcase-category">cosmetics</a>

                                        <div class="price-box">
                                            <p class="price">$20.00</p>
                                            <del>$30.00</del>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img" width="70">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                                        </a>

                                        <a href="#" class="showcase-category">jewellery</a>

                                        <div class="price-box">
                                            <p class="price">$20.00</p>
                                            <del>$30.00</del>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!--
                  - PRODUCT FEATURED
                -->

                <div class="product-featured">

                    <h2 class="title">Deal of the day</h2>

                    <div class="showcase-wrapper has-scrollbar">

                        <div class="showcase-container">

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                </div>

                                <div class="showcase-content">

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <a href="#">
                                        <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                                    </a>

                                    <p class="showcase-desc">
                                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet consectetur Lorem ipsum dolor
                                    </p>

                                    <div class="price-box">
                                        <p class="price">$150.00</p>

                                        <del>$200.00</del>
                                    </div>

                                    <button class="add-cart-btn">add to cart</button>

                                    <div class="showcase-status">
                                        <div class="wrapper">
                                            <p>
                                                already sold: <b>20</b>
                                            </p>

                                            <p>
                                                available: <b>40</b>
                                            </p>
                                        </div>

                                        <div class="showcase-status-bar"></div>
                                    </div>

                                    <div class="countdown-box">

                                        <p class="countdown-desc">
                                            Hurry Up! Offer ends in:
                                        </p>

                                        <div class="countdown">

                                            <div class="countdown-content">

                                                <p class="display-number">360</p>

                                                <p class="display-text">Days</p>

                                            </div>

                                            <div class="countdown-content">
                                                <p class="display-number">24</p>
                                                <p class="display-text">Hours</p>
                                            </div>

                                            <div class="countdown-content">
                                                <p class="display-number">59</p>
                                                <p class="display-text">Min</p>
                                            </div>

                                            <div class="countdown-content">
                                                <p class="display-number">00</p>
                                                <p class="display-text">Sec</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="showcase-container">

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                                </div>

                                <div class="showcase-content">

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <h3 class="showcase-title">
                                        <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                                    </h3>

                                    <p class="showcase-desc">
                                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet consectetur Lorem ipsum dolor
                                    </p>

                                    <div class="price-box">
                                        <p class="price">$1990.00</p>
                                        <del>$2000.00</del>
                                    </div>

                                    <button class="add-cart-btn">add to cart</button>

                                    <div class="showcase-status">
                                        <div class="wrapper">
                                            <p> already sold: <b>15</b> </p>

                                            <p> available: <b>40</b> </p>
                                        </div>

                                        <div class="showcase-status-bar"></div>
                                    </div>

                                    <div class="countdown-box">

                                        <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                                        <div class="countdown">
                                            <div class="countdown-content">
                                                <p class="display-number">360</p>
                                                <p class="display-text">Days</p>
                                            </div>

                                            <div class="countdown-content">
                                                <p class="display-number">24</p>
                                                <p class="display-text">Hours</p>
                                            </div>

                                            <div class="countdown-content">
                                                <p class="display-number">59</p>
                                                <p class="display-text">Min</p>
                                            </div>

                                            <div class="countdown-content">
                                                <p class="display-number">00</p>
                                                <p class="display-text">Sec</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>





            </div>

        </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

        <div class="container">

            <div class="testimonials-box">

                <!--
                  - TESTIMONIALS
                -->

                <div class="testimonial">

                    <h2 class="title">testimonial</h2>

                    <div class="testimonial-card">

                        <img src="images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                        <p class="testimonial-name">Alan Doe</p>

                        <p class="testimonial-title">CEO & Founder Invision</p>

                        <img src="images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

                        <p class="testimonial-desc">
                            Lorem ipsum dolor sit amet consectetur Lorem ipsum
                            dolor dolor sit amet.
                        </p>

                    </div>

                </div>



                <!--
                  - CTA
                -->

                <div class="cta-container">

                    <img src="images/cta-banner.jpg" alt="summer collection" class="cta-banner">

                    <a href="#" class="cta-content">

                        <p class="discount">25% Discount</p>

                        <h2 class="cta-title">Summer collection</h2>

                        <p class="cta-text">Starting @ $10</p>

                        <button class="cta-btn">Shop now</button>

                    </a>

                </div>



                <!--
                  - SERVICE
                -->

                <div class="service">

                    <h2 class="title">Our Services</h2>

                    <div class="service-container">

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="boat-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Worldwide Delivery</h3>
                                <p class="service-desc">For Order Over $100</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="rocket-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Next Day delivery</h3>
                                <p class="service-desc">UK Orders Only</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Best Online Support</h3>
                                <p class="service-desc">Hours: 8AM - 11PM</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="arrow-undo-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">Return Policy</h3>
                                <p class="service-desc">Easy & Free Return</p>

                            </div>

                        </a>

                        <a href="#" class="service-item">

                            <div class="service-icon">
                                <ion-icon name="ticket-outline"></ion-icon>
                            </div>

                            <div class="service-content">

                                <h3 class="service-title">30% money back</h3>
                                <p class="service-desc">For Order Over $100</p>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>






</main>





<!--
  - FOOTER
-->

@include('inc.footer')






<!--
  - custom js link
-->
<script src="js/script.js"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
