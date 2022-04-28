

@foreach($myProds as $pro)

    <div class="showcase">

        <div class="showcase-banner">

            <img src="{{$pro->productImage}}" alt="Coffe machine" width="300" class="product-img default">
            <a href="hhh.php"><img src="{{$pro->productImage}}" alt="Coffe machine" width="300" class="product-img hover"></a>

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


            <a href="#" class="showcase-category">jacket {{$testValue}}</a>
            <a href="{{9}}">
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
            <button class="btn-action">
                <div style="display: flex"><ion-icon name="cart"></ion-icon>
                    <span>Add to cart</span>
                </div>
            </button>

        </div>

    </div>
@endforeach

