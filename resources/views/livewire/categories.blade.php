<div>
    @foreach($categories as $cats)
        <li class="sidebar-menu-category">

            <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                    <img src="{{$cats->category_icon}}" alt="clothes" width="20"
                         height="20" class="menu-title-img">

                    <p class="menu-title">
{{--                        <a href="{{route('category', ['category_slug' => $cats->category_slug])}}">--}}
{{--                            {{$cats->productCategory}}</a>--}}
                    </p>
                </div>

                <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

            </button>

            <ul class="sidebar-submenu-category-list" data-accordion>


                <li class="sidebar-submenu-category">
                    @foreach($cats->products as $pr)
                        <a href="#" class="sidebar-submenu-title">
                            <p class="product-name">{{$pr->productName}}</p>
                            <data value="87" class="stock font-extrabold"
                                  title="Available Stock">{{number_format($pr->productPrice)}}
                                Rfw
                            </data>
                        </a>
                    @endforeach
                </li>

            </ul>

        </li>
    @endforeach


</div>
