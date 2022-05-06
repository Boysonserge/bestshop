<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style-prefix.css')}}">
    <link rel="stylesheet" href="{{asset('css/flowbite.css')}}">


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
    @livewireStyles

    <title>{{$openedProd->productName}} | Bestshop Rwanda</title>


</head>

<body>
<div class="overlay" data-overlay></div>
@include('inc/header')
<div class="bg-yellow-50 py-12 px-6 flex justify-center mb-6">
    <div class="text-yellow-500 py-12 px-6 text-center">
        <h3>Buying portal for:</h3>
        <h1 class="text-2xl font-extrabold"> {{$openedProd->productName}}
        </h1>
        <hr>
    </div>
</div>
<!-- Modal toggle -->

<div class="card">
    <!-- left -->
    <div class="product-imgs">
        <div class="img-display">
            <div class="img-showcase w-3">
                <img src="{{asset($openedProd->productImage)}}" alt="">
                @foreach($openedOther as $other)

                    <img class="" src="{{asset($other->imagePath)}}" alt="">
                @endforeach


            </div>
        </div>

        <div class="img-select">

            <div class="img-item">
                <a href="#" data-id='1'>
                    <img src="{{asset($openedProd->productImage)}}" alt="">
                </a>
            </div>
            @foreach($openedOther as $other=>$key)

                <div class="img-item">
                    <a href="#" data-id="{{$other+2}}">

                        <img src="{{asset($key->imagePath)}}" alt="">
                    </a>
                </div>

            @endforeach

        </div>
    </div>

    <!-- Right -->
    <div class="product-content">

        <p class="text-3xl uppercase font-extrabold dark:text-white">{{$openedProd->productName}}</p>
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
            <p class="last-price">Old price: <span>{{number_format($openedProd->productPrice+500)}} RWF</span></p>
            <p class="new-price">New price: <span>{{number_format($openedProd->productPrice)}} RWF (5%)</span></p>
        </div>

        <div class="product-detail">
            <h2>About this item:</h2>
            <p>{{$openedProd->productDescription}}.</p>


            {{--                        <ul>--}}
            {{--                            <li>Colors: <span>Black</span></li>--}}
            {{--                            <li>Available: <span>In stock</span></li>--}}
            {{--                            <li>Category: <span>Cofefe materials</span></li>--}}

            {{--                        </ul>--}}
        </div>

        <div class="purchase-info">

            <form action="{{route('cart/store')}}" method="post">
                @csrf
                <div class="flex justify-center">
                    <?php
                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content()?>
                    <input value="1" min="1" type="number" id="email"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="name@flowbite.com">

                    @if($cart->where('id',$openedProd->id)->count())
                        <button disabled
                                class="text-blue-600 bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Added to cart
                        </button>
                    @else

                @endif
            </form>
        </div>


        <button class="flex space-x-4 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
            <ion-icon name="videocam" class="w-4 h-4 mr-2 -ml-1"></ion-icon>  Show video
        </button>


        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            More about {{$openedProd->productName}}
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        {!! $openedProd->productVideo !!}
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                    </div>
                </div>
            </div>
        </div>


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
                @foreach($related as $re)

                    <div class="showcase">
                        <div class="showcase-banner">
                            <a href="{{route('prodDetails', ['id' => $re->productSlug])}}"><img
                                    src="{{asset($re->productImage)}}" alt="MEN Yarn Fleece Full-Zip Jacket"
                                    class="product-img default" width="300"></a>
                            <a href="{{route('prodDetails', ['id' => $re->productSlug])}}"><img
                                    src="{{asset($re->productImage)}}" alt="MEN Yarn Fleece Full-Zip Jacket"
                                    class="product-img hover" width="300"></a>
                            <div class="showcase-actions">
                                <button class="btn-action">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="showcase-content">
                            <a href="#" class="showcase-category">...</a>
                            <h3>
                                <a href="{{route('prodDetails', ['id' => $re->productSlug])}}"
                                   class="showcase-title">{{$re->productName}}</a>
                            </h3>
                            <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>

                            <div class="price-box">
                                <p class="price">{{number_format($re->productPrice)}}</p>
                                <del>{{number_format($re->productPrice+1300)}}</del>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
</main>

@include('inc/footer')

<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/detail.js')}}"></script>
<script src="{{asset('js/flowbite.js')}}"></script>

<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@livewireScripts
</body>


</html>

