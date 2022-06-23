<div class="purchase-info flex space-x-4">

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



    @if($showCartBtn)
        <button disabled
                class="text-blue-600 bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Added to cart
        </button>
    @else
        <button wire:click="createModal({{$prodId}})"
                type="submit" class="mb-6 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                            focus:outline-none  font-medium rounded-lg text-sm sm:w-auto
                            px-5 py-2.5 text-center ">
            Add to cart <br><small>(Hitamo igicuruzwa)}</small></button>


    @endif
    @if($openedProd->productVideo)
        <button
            class="flex space-x-4 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button" data-modal-toggle="defaultModal">
            <ion-icon name="videocam" class="w-4 h-4 mr-2 -ml-1"></ion-icon>
            Show video
        </button>
    @endif






        {{--Modal for add to cart--}}
        <x-jet-dialog-modal wire:model="showModal" wire:ignore.self>
            <x-slot name="title">
                {!!$title!!}

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
