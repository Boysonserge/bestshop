<header>

    <div class="header-top">

        <div class="container">

            <ul class="header-social-container">
                <li>
                    <a target="__blank" href="https://www.instagram.com/best_shop_ltd/" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

            </ul>

            <div class="header-alert-news">
                <p>
                    <b>GET YOUR PRODUCT DELIVERED</b>
                    As soon as possible
                </p>
            </div>

{{--            <div class="header-top-actions">--}}

{{--                --}}

{{--                <select name="language">--}}


{{--                    <option value="es-kiny">Kinyarwanda</option>--}}
{{--                    <option value="en-US">English</option>--}}

{{--                </select>--}}

{{--            </div>--}}

        </div>

    </div>

    <div class="header-main">

        <div class="container">

            <a href="{{route('home')}}" class="header-logo">
                <img style="width: 40%;display: block;" src="{{ asset('images/logo/logo-01.png') }}" alt="Best shop logo" width="150" height="76">
            </a>

            <div class="header-search-container">

                <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

            </div>

            <div class="header-user-actions">
                <button class="action-btn">
                    <ion-icon name="person-circle"></ion-icon>
                </button>



                <a href="{{route('cart.fetch')}}" class="action-btn">
                    <ion-icon name="cart"></ion-icon>
                    <span class="count">{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
                </a>

            </div>

        </div>

    </div>

    <nav class="desktop-navigation-menu">

        <div class="container">

            <ul class="desktop-menu-category-list">

                <li class="menu-category">
                    <a href="{{route('home')}}" class="menu-title">Home</a>
                </li>



                <li class="menu-category">
                    <a href="" class="menu-title">Kitchen materials</a>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Coffee materials</a>

                    <ul class="dropdown-list">

                        <li class="dropdown-item">
                            <a href="#">Dress & Frock</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Earrings</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Necklace</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Makeup Kit</a>
                        </li>

                    </ul>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Butchery</a>

                    <ul class="dropdown-list">

                        <li class="dropdown-item">
                            <a href="#">Earrings</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Couple Rings</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Necklace</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Bracelets</a>
                        </li>

                    </ul>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Bakery</a>

                    <ul class="dropdown-list">

                        <li class="dropdown-item">
                            <a href="#">Clothes Perfume</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Deodorant</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Flower Fragrance</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="#">Air Freshener</a>
                        </li>

                    </ul>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Contact</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>

            </ul>

        </div>

    </nav>

    <div class="mobile-bottom-navigation">

        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <a href="{{route('cart.fetch')}}" class="action-btn">
            <ion-icon name="cart"></ion-icon>
            <span class="count">{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
        </a>

        <button class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
        </button>



        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="grid-outline"></ion-icon>
        </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

        <div class="menu-top">
            <h2 class="menu-title">Menu</h2>

            <button class="menu-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="mobile-menu-category-list">

            <li class="menu-category">
                <a href="#" class="menu-title">Home</a>
            </li>

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Kitchen materials</p>
                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">View all</a>
                    </li>

                </ul>

            </li>

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Coffee materials</p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>
                    <li class="submenu-category">
                        <a href="#" class="submenu-title">View all</a>
                    </li>
                </ul>
            </li>

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Butchery
                        </p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">View all</a>
                    </li>

                </ul>

            </li>

            <li class="menu-category">

                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Bakery
                        </p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>

                    <li class="submenu-category">
                        <a href="#" class="submenu-title">View all</a>
                    </li>
                </ul>
            </li>

        </ul>

        <div class="menu-bottom">
            <ul class="menu-social-container">
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>

    </nav>

</header>
