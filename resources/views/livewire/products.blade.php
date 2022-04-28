<div class="flex items-center justify-between mt-4 pb-4">
    <div>Products</div>
    <x-jet-button wire:click="createShowModal">
        {{ __('Add new product') }}
    </x-jet-button>

    <x-jet-dialog-modal wire:model="showFormVisible" wire:ignore.self>
        <x-slot name="title">
            {{ $title }}
        </x-slot>

        <x-slot name="content">
            @if(session()->has('message'))
            <div class="bg-indigo-900 text-center py-4 lg:px-4">
                <div class="p-2 bg-indigo-500 items-center text-gray-200 leading-none rounded-full flex lg:inline-flex" role="alert">
                    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{session('message')}}!</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                </div>
            </div>
            @endif


            <form>
                <div class="mb-6">
                    <label for="productName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productName</label>
                    <input wire:model="productName" type="text" id="productName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                </div>

                <div class="mb-6">

                    <label for="productImage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productImage</label>
                    <input wire:model="productImage" type="file" id="productImage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                    @error('productImage') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">

                    <label for="productOtherImage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productOtherImage</label>
                    <input multiple wire:model="productOtherImage" type="file" id="productOtherImage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                    @error('productOtherImage.*') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label for="productPrice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productPrice</label>
                    <input wire:model="productPrice"  type="number" id="productPrice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

            </form>


        </x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click.prevent="addProduct()">
                {{ __('Save product') }}
            </x-jet-button>
            <x-jet-secondary-button wire:click="$set('showFormVisible', false)" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">
                Product name
            </th>
            <th scope="col" class="px-6 py-3">
                Color
            </th>
            <th scope="col" class="px-6 py-3">
                Category
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-6 py-3">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach($myProds as $prod)
            <tr class="bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    {{$prod->productName}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    {{number_format($prod->productPrice)}}
                </td><td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    {{$prod->productCategory}}
                </td><td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    {{$prod->productName}}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
