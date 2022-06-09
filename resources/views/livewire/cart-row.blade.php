
    {{--<tr class="bg-white border-b hover:bg-gray-50">
        <td>
            {{$rowId}}
        </td>
        <td class="px-6 py-4 font-medium whitespace-nowrap">
            --}}{{--                            <ion-icon name="trash-outline"></ion-icon>--}}{{--
            <button wire:click="deleteCart('{{$rowId}}')" class="bg-blue-700 text-white p-2 rounded-full">Remove</button>
        </td>
        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
            <img class="w-8" src="{{\App\Models\Product::find($ProdId)->productImage}}" alt="">
        </td>
        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
            {{$carts->name}}

        </td>
        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
            {{number_format($price)}}
            {{$price}}
        </td>

        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
            {{number_format($total)}}
        </td>
        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
            {{$qty}}

            <div class="flex space-x-4">
                <input class="border-blue-300 w-32" wire:model.prevent="quantity" type="number" min="1">
                <button wire:click.prevent="updateCart()" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            </div>
            <livewire:update-cart :myCarts="$carts" :key="$carts->id" />
        </td>

    </tr>--}}
<tr class="bg-white border-b hover:bg-gray-50">
    <td>

    <td class="px-6 py-4 font-medium whitespace-nowrap">
        {{--                            <ion-icon name="trash-outline"></ion-icon>--}}
        <button wire:click="" class="bg-blue-700 text-white p-2 rounded-full">Remove</button>
    </td>
    </td>
    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
        <img class="w-8" src="{{\App\Models\Product::find(2)->productImage}}" alt="">
    </td>
        <td class="px-6 py-4 font-medium whitespace-nowrap">{{$productName}}</td>
        <td class="px-6 py-4 font-medium whitespace-nowrap">42</td>
    <td class="px-6 py-4 font-medium whitespace-nowrap">43</td>
    <td class="px-6 py-4 font-medium whitespace-nowrap">23</td>
    <td class="px-6 py-4 font-medium whitespace-nowrap">42</td>
    <td class="px-6 py-4 font-medium whitespace-nowrap">43</td>
</tr>


