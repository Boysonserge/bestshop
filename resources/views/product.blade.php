<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style-prefix.css')}}">

    <style>
        ion-icon {
            --ionicon-stroke-width: 32px;
        }

        img {
            width: 100%;
            display: block;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">

    <title>Details</title>


</head>

<body>
<div class="overlay" data-overlay></div>
@include('inc/header')

<main>
    <div class="banner">
        <div class="card-wrapper">
            <div class="card">
                <!-- left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="images/products/1.jpg" alt="">
                            <img src="images/products/2.jpg" alt="">
                            <img src="images/products/3.jpg" alt="">
                            <img src="images/products/4.jpg" alt="">

                        </div>
                    </div>

                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id='1'>
                                <img src="images/products/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id='2'>
                                <img src="images/products/2.jpg" alt="">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id='3'>
                                <img src="images/products/3.jpg" alt="">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id='4'>
                                <img src="images/products/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right -->
                <div class="product-content">
                    <h2 class="product-title">Coffee machine</h2>

                    <div class="product-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half-outline"></ion-icon>
                        <span>4.7(12)</span>
                    </div>

                    <div class="product-price">
                        <p class="last-price">Old price: <span>120RWF</span></p>
                        <p class="new-price">New price: <span>100RWF (5%)</span></p>
                    </div>

                    <div class="product-detail">
                        <h2>About this item:</h2>
                        <p>A coffeemaker, coffee maker or coffee machine is a cooking appliance used to brew coffee.</p>

                        <p>A coffeemaker, coffee maker or coffee machine is a cooking appliance used to brew coffeeA coffeemaker, coffee maker or coffee machine is a cooking appliance used to brew coffeeA coffeemaker, coffee maker or coffee machine is a cooking appliance used to brew coffee.</p>

                        <ul>
                            <li>Colors: <span>Black</span></li>
                            <li>Available: <span>In stock</span></li>
                            <li>Category: <span>Cofefe materials</span></li>

                        </ul>
                    </div>

                    <div class="purchase-info">
                        <form action="" method="POST">
                            <input type="number" min="1" value="1" name="number" id="">
                            <input style="width: 100%;" type="text" name="phone" placeholder="+25078......">
                            <a type="submit" name="buy" href="#" class="banner-btn">Add to cart <ion-icon name="cart"></ion-icon></a>
                            <button type="submit" name="buy">SEND INFO</button>
                        </form>



                    </div>

                    <div class="social-links">
                        <p>Share to:</p>
                        <a href="#">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-box">

            <!--
- PRODUCT GRID
-->

            <div class="product-main">

                <h2 class="title">Related items</h2>

                <div class="product-grid">

                    <div class="showcase">

                        <div class="showcase-banner">

                            <img src="images/products/jacket-3.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                            <img src="images/products/jacket-3.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

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
                                <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
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
                            <img src="images/products/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                            <img src="images/products/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">

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
                                <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a>
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
                            <img src="images/products/jacket-5.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                            <img src="images/products/jacket-6.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">

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
                                <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a>
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
                            <img src="images/products/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300">
                            <img src="images/products/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover" width="300">

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
                                <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
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





                </div>

            </div>





        </div>
    </div>

</main>

@include('inc/footer')



<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/detail.js')}}"></script>

<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>

