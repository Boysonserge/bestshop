<div class="product-container">

    @if(session()->has('message'))
        <div id="alert-1" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                      clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">
                {{session('message')}}
            </div>
            <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300"
                    data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

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


                @livewire('list-products')


            </div>

            <!--
              - PRODUCT MINIMAL
            -->

            <div class="product-minimal">

                <div class="product-showcase">

                    <h2 class="title">New Arrivals</h2>

                    <div class="showcase-wrapper has-scrollbar">

                        <div class="showcase-container">
                            @foreach($newArrivals as $new)
                                <div class="showcase">

                                    <a href="{{route('prodDetails', ['id' => $new->productSlug])}}"
                                       class="showcase-img-box">
                                        <img src="{{asset($new->productImage)}}" alt="relaxed short full sleeve t-shirt"
                                             width="70" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">{{$new->productName}}</h4>
                                        </a>

                                        <a href="#" class="showcase-category">{{$new->productCategory}}</a>

                                        <div class="price-box">
                                            <p class="price">{{number_format($new->productPrice)}}rwf</p>
                                            <del>{{number_format($new->productPrice+1600)}}rwf</del>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="product-showcase">

                    <h2 class="title">Trending</h2>

                    <div class="showcase-wrapper  has-scrollbar">

                        <div class="showcase-container">
                            @foreach($newArrivals as $new)
                                <div class="showcase">

                                    <a href="{{route('prodDetails', ['id' => $new->productSlug])}}"
                                       class="showcase-img-box">
                                        <img src="{{asset($new->productImage)}}" alt="relaxed short full sleeve t-shirt"
                                             width="70" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">{{$new->productName}}</h4>
                                        </a>

                                        <a href="#" class="showcase-category">{{$new->productCategory}}</a>

                                        <div class="price-box">
                                            <p class="price">{{number_format($new->productPrice)}}rwf</p>
                                            <del>{{number_format($new->productPrice+1600)}}rwf</del>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="product-showcase">

                    <h2 class="title">Top Rated</h2>
                    <div class="showcase-wrapper  has-scrollbar">
                        <div class="showcase-container">
                            @foreach($newArrivals as $new)
                                <div class="showcase">

                                    <a href="{{route('prodDetails', ['id' => $new->productSlug])}}"
                                       class="showcase-img-box">
                                        <img src="{{asset($new->productImage)}}" alt="relaxed short full sleeve t-shirt"
                                             width="70" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">{{$new->productName}}</h4>
                                        </a>

                                        <a href="#" class="showcase-category">{{$new->productCategory}}</a>

                                        <div class="price-box">
                                            <p class="price">{{number_format($new->productPrice)}}rwf</p>
                                            <del>{{number_format($new->productPrice+1600)}}rwf</del>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
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
                    @foreach($deal as $deal)
                        <div class="showcase-container">
                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="{{asset($deal->productImage)}}" alt="{{$deal->productName}}"
                                         class="showcase-img">
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
                                        <h3 class="showcase-title">{{$deal->productName}}</h3>
                                    </a>

                                    <p class="showcase-desc">
                                        {{\Illuminate\Support\Str::limit($deal->productDescription,150)}}
                                    </p>

                                    <div class="price-box">
                                        <p class="price">{{number_format($deal->productPrice)}}rwf</p>

                                        <del>{{number_format($deal->productPrice+1600)}}rwf</del>
                                    </div>
                                    <form action="{{route('cart/store')}}" method="POST">
                                        @csrf
                                        <?php
                                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content()?>
                                        <input type="hidden" name="product_id" value="{{$deal->id}}">
                                        @if($cart->where('id',$deal->id)->count())
                                            <button disabled class="add-cart-btn" style="background: black; cursor: not-allowed">added to cart</button>
                                        @else
                                            <button class="add-cart-btn">add to cart</button>
                                        @endif
                                    </form>


{{--                                    <div class="showcase-status">--}}
{{--                                        <div class="wrapper">--}}
{{--                                            <p>--}}
{{--                                                already sold: <b>20</b>--}}
{{--                                            </p>--}}

{{--                                            <p>--}}
{{--                                                available: <b>40</b>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}

{{--                                        <div class="showcase-status-bar"></div>--}}
{{--                                    </div>--}}

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
                    @endforeach



                </div>

            </div>


        </div>

    </div>

</div>
