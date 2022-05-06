
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
                    <p class="price">{{$pro->productPrice}} rwf</p>
                    <del>{{($pro->productPrice)+1300}} rwf</del>
                </div>
                <form action="{{route('cart/store')}}" method="POST">
                    @csrf
                    <?php
                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content()?>
                    <input type="hidden" name="product_id" value="{{$pro->id}}">
                    @if($cart->where('id',$pro->id)->count())
                        <button disabled class="bg-blue-100 px-6 w-full rounded-full mb-4">Added to cart</button>
                    @else
                        <button class="bg-blue-300 px-6 w-full rounded-full mb-4">Add to cart</button>
                    @endif
                </form>




            </div>
        </div>
    @endforeach
        <br>
        {{$myProds ->links() }}
</div>





