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

                    @livewire('categories')


                </ul>

            </div>

            <div class="product-showcase">

                <h3 class="showcase-heading">best sellers</h3>

                <div class="showcase-wrapper">

                    <div class="showcase-container">

                        @livewire('bestsellers')

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

                    @livewire('list-products')

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
