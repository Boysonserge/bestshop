
<div class="product-grid">
    @foreach($myProds as $pro)
        <div class="showcase">
            <div class="showcase-banner">

                <img src="{{$pro->productImage}}" alt="Coffe machine" class="product-img default w-5">
                <a href="{{route('prodDetails', ['id' => $pro->productSlug])}}"><img src="{{$pro->productImage}}" alt="Coffe machine"
                                                                            width="300" class="product-img hover"></a>

                <p class="showcase-badge">15%</p>

                <div class="showcase-actions">

                    <button class="btn-action">
                        <ion-icon name="cart"></ion-icon>
                    </button>


                </div>

            </div>
            <div class="showcase-content">


                <a href="#" class="showcase-category">.. </a>
                <a href="{{route('prodDetails', ['id' => $pro->productSlug])}}">
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
                    <del>{{number_format(($pro->productPrice)+rand(1300,2500))}} rwf</del>
                </div>
                <form action="{{route('cart/store')}}" method="POST">
                    @csrf
                    <?php
                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content()?>
                    <input type="hidden" name="product_id" value="{{$pro->id}}">
                    @if($cart->where('id',$pro->id)->count())
                        <button disabled class="bg-blue-100 px-6 w-full rounded-full mb-4">Added to cart</button>
                    @else
                        <div class="flex items-center justify-center space-x-4">
                            <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900
                            text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                            mb-4" placeholder="quantity" required>
                        </div>
                            <button type="submit" class="mb-6 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                            focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto
                            px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Add to cart  <br><small>(Hitamo igicuruzwa)</small></button>

                    @endif

                </form>





            </div>

        </div>

    @endforeach

        <br>

</div>







