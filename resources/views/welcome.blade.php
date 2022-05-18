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
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{ asset('css/style-prefix.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/flowbite.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->


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
    @livewireStyles
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

    @livewire('main')

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
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-82d77462-b66c-4e73-a65c-6a4b5a671b65"></div>

@include('inc.footer')

<!--
  - custom js link
-->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="{{asset('js/flowbite.js')}}"></script>
<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@livewireScripts
</body>

</html>
