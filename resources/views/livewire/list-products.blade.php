<div class="product-main">
    <div wire:loading class="loading">Loading&#8230;</div>
    <h2 class="title">New Products</h2>
    <div class="product-grid">
        @foreach($myProds as $pro)
            <div wire:key="{{ $loop->index }}" class="showcase" >
                <div class="showcase-banner">
                    <img src="{{$pro->productImage}}" alt="Coffe machine" class="product-img default w-5">
                    <a href="{{route('prodDetails', ['id' => $pro->productSlug])}}"><img src="{{$pro->productImage}}"
                                                                                         alt="Coffe machine"
                                                                                         width="300"
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
                    <a href="{{route('prodDetails', ['id' => $pro->productSlug])}}">
                        <h3 class="showcase-title">{{$pro->productName}}</h3>
                    </a>
                    {{--<div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>--}}
                    <div class="price-box">
                        <p class="price">{{number_format($pro->productPrice)}} rwf</p>
                        <del>{{number_format(($pro->productPrice)+500)}} rwf</del>

                    </div>
                    <?php
                    $cart = Gloudemans\Shoppingcart\Facades\Cart::content()?>
                    @if($cart->where('id',$pro->id)->count())
                        <a href="{{route('cart.fetch')}}" class="bg-blue-100 px-6 w-full rounded-full mb-4">Added to cart</a>
                    @else
                        <button wire:click="createModal({{$pro->id}})"
                                type="submit" class="mb-6 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                            focus:outline-none  font-medium rounded-lg text-sm sm:w-auto
                            px-5 py-2.5 text-center ">
                            Add to cart <br><small>(Hitamo igicuruzwa) {{$test}}</small></button>

                    @endif


                   {{-- <form wire:submit.prevent="addCart({{$pro->id}})">
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
                                Add to cart <br><small>(Hitamo igicuruzwa) {{$test}}</small></button>

                        @endif


                    </form>--}}
                </div>


            </div>

        @endforeach
        <br>

    </div>

    @if($myProds->total()>$perPage)
        <div class="flex items-center justify-center mb-6 mt-8">
            <button wire:loading.remove wire:click="loadMore" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700
         rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600
          dark:hover:bg-blue-700 dark:focus:ring-blue-800">Load more products</button>

            <button wire:loading wire:target="loadMore" disabled type="button" class="cursor-not-allowed px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                </svg>
                Loading...
            </button>
        </div>
    @endif


{{--    {{ $myProds->links() }}--}}


















    {{--Modal for add to cart--}}
    <x-jet-dialog-modal wire:model="showModal" wire:ignore.self>
        <x-slot name="title">
            {{ $title }}

        </x-slot>



        <x-slot name="content">
            <form>
                <div class="mb-6">
                    <label for="productName"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Choose preferred color</label>
                    <div class="flex flex-wrap">
                        @if($showModal)
                            @foreach($selectedProd->colors as $ss)

                                <div class="flex items-center mr-4">
                                    <input id="{{$ss->colorName}}-radio" type="radio" value="" name="colored-radio" class="w-4 h-4 text-{{$ss->colorName}}-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="{{$ss->colorName}}-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$ss->colorName}}</label>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    @error('color') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-6">
                    <label for="productName"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        Quantity (umubare ushaka) </label>
                    <input min="1" wire:model="cartQuantity" type="number" id="productName"
                           class="bg-gray-50 border border-gray-300 text-gray-900
                               text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                               block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                               dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                               dark:focus:border-blue-500" placeholder="Product name" required>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold
                    mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                        Total price(<small>ayo uzishyura yose</small>): <b>{{number_format($totalCart)}}</b>
                    </span>
                    @error('cartQuantity') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">

            <div wire:loading.remove>
                <x-jet-button wire:click.prevent="addCart({{$prodId}})">
                    {{ __('Confirm (Emeza)') }}
                </x-jet-button>
            </div>
            <x-jet-secondary-button wire:click="$set('showModal', false)" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>







