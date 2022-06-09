<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style-prefix.css')}}">
    <link rel="stylesheet" href="{{asset('css/flowbite.css')}}">
    @livewireStyles


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

    <title>{{$openedCategory->productCategory}} | Bestshop Rwanda</title>


</head>

<body>
<div class="overlay" data-overlay></div>
@include('inc/header')
<div class="bg-yellow-50 py-12 px-6 flex justify-center mb-6">
    <div class="text-yellow-500 py-12 px-6 text-center">
        <h3>Products in:</h3>
        <h1 class="text-2xl font-extrabold"> {{$openedCategory->productCategory}}
            Category
        </h1>
        <hr>
    </div>
</div>
<!-- Modal toggle -->

<div class="container">
    <div class="product-main">

        <h2 class="title">Products in this category</h2>
        <div class="product-grid">

            @foreach($myProds as $prods)
                @foreach($prods->products as $pro)
                    <div class="showcase">
                        <div class="showcase-banner">

                            <img src="{{$pro->productImage}}" alt=" " class="product-img default w-5">
                            <a href="{{route('prodDetails', ['id' => $pro->productSlug])}}">
                                <img src="{{asset($pro->productImage)}}" alt="">
                                <img src="{{asset($pro->productImage)}}" alt="Coffe machine" width="300"
                                     class="product-img hover"></a>

                            <p class="showcase-badge">15%</p>

                            <div class="showcase-actions">

                                <button class="btn-action">
                                    <ion-icon name="cart"></ion-icon>
                                </button>


                            </div>

                        </div>
                        <div class="showcase-content">
                            <a href="#" class="showcase-category">.. </a>
                            <a href="">
                                <h3 class="showcase-title">{{$pro->productName}}</h3>
                            </a>

                            <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>

                            <div class="price-box">
                                <p class="price">{{number_format($pro->productPrice)}} rwf</p>
                                <del>{{number_format(($pro->productPrice)+500)}} rwf</del>
                            </div>
                            <form wire:submit.prevent="addCart({{$pro->id}})">

                                <input wire:model.lazy="cartQuantity" min="1" type="number" name="quantity" id="quantity"
                                       class="bg-gray-50 border border-gray-300 text-gray-900
                            text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                            mb-4" placeholder="quantity" required>

                                <?php
                                $cart = Gloudemans\Shoppingcart\Facades\Cart::content()?>
                                @if($cart->where('id',$pro->id)->count())
                                    <button disabled class="bg-blue-100 px-6 w-full rounded-full mb-4">Added to cart</button>
                                @else
                                    <button
                                        type="submit" class="mb-6 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                            focus:outline-none  font-medium rounded-lg text-sm sm:w-auto
                            px-5 py-2.5 text-center ">
                                        Add to cart <br><small>(Hitamo igicuruzwa)</small></button>

                                @endif


                            </form>
                        </div>


                    </div>
                @endforeach

            @endforeach
            <br>

        </div>




        {{ $myProds->links() }}

    </div>
</div>



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

