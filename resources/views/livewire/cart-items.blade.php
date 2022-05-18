
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th></th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price (RWF)
                </th>
                <th scope="col" class="px-6 py-3">
                    Subtotal (RWF)
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
            </tr>
            </thead>
            <tbody>
            {{--            +rowId: "1d3bf986c109d443f161bb3962491282"--}}
            {{--            +id: 34--}}
            {{--            +qty: 1--}}
            {{--            +name: "Serge"--}}
            {{--            +price: 3000.0--}}
            {{--            +weight: 0.0--}}
            {{--            +options: Gloudemans\Shoppingcart\CartItemOptions--}}
            @if(count($cartItems)>0)
                @foreach($cartItems as $carts)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td>
                            {{$rowId}}
                        </td>
                        <td class="px-6 py-4 font-medium whitespace-nowrap">
{{--                            <ion-icon name="trash-outline"></ion-icon>--}}
                            <button wire:click="deleteCart('{{$carts->rowId}}')" class="bg-blue-700 text-white p-2 rounded-full">Remove</button>
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            <img class="w-8" src="{{\App\Models\Product::find($carts->id)->productImage}}" alt="">
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{$carts->name}}

                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{number_format($carts->price)}}
                            {{$price}}
                        </td>

                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                            {{number_format($carts->total)}}
                            {{$subTotal}}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">

                              <livewire:update-cart :myCarts="$carts" :key="$carts->id" />
                        </td>

                    </tr>
                @endforeach
                <tr class="bg-gray-100 text-gray-800">
                    <th class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap" colspan="4">TOTAL</th>
                    <th class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        {{$total}}
                    </th>
                    <th colspan="2" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <button wire:click.prevent="proceed()"
                                type="button"
                                class="w-full px-3 py-2 text-xs font-medium text-center text-white bg-blue-700
                                rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proceed to checkout</button>

                    </th>
                </tr>
            @else
                <th class="text-center" colspan="6"><span
                        class="text-center text-red-500">They are no items in a cart</span></th>
            @endif

            </tbody>
        </table>


    </div>

