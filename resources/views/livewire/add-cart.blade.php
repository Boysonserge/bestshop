
<form action="{{route('cart/store')}}" method="post">
    @csrf
    <div class="flex justify-center">
<!--        --><?php
//        $cart = Gloudemans\Shoppingcart\Facades\Cart::content()?>
        <input value="1" min="1" type="number" id="email"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               placeholder="name@flowbite.com">

{{--        @if($cart->where('id',$openedProd->id)->count())--}}
            <button disabled class="text-blue-600 bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Added to cart
            </button>
{{--        @else--}}
            <button type="submit"
                    class="text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add to cart
            </button>
    {{--@endif--}}
</form>
