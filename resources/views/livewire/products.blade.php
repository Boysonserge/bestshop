<div>
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
                <form>
                    <div class="mb-6">
                        <label for="productName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productName</label>
                        <input wire:model="productName" type="text" id="productName"
                               class="bg-gray-50 border border-gray-300 text-gray-900
                               text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                               block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                               dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                               dark:focus:border-blue-500" placeholder="Product name" required>
                        @error('productName') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>

                    <div class="mb-6">
                        <label for="productPrice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productPrice</label>
                        <input wire:model="productPrice" type="number" id="productPrice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        @error('productPrice') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>



                    <div class="mb-6">
                        <label for="productDescription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productDescription</label>
                        <input wire:model="productDescription" type="text" id="productDescription" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        @error('productDescription') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="productCategory"
                               class="block mb-2 text-sm font-medium
                                text-gray-900 dark:text-gray-300">Your productCategory (<small class="text-blue-600">Hano ukanda CTR ubundi
                                ugahitamo categories zirenze imwe</small>)</label>

                        <select multiple wire:model="productCategory" id="productCategory" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option hidden selected>Choose a country</option>
                            <option value="Kitchen materials">Kitchen materials</option>
                            <option value="Coffee materials">Coffee materials</option>
                            <option value="Butchery">Butchery</option>
                            <option value="Bakery">Bakery</option>
                        </select>
                        @error('productCategory') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">

                        <label for="productImage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productImage</label>
                        <input wire:model="productImage" type="file" id="productImage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        @error('productImage') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="productVideo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Video url</label>
                        <input wire:model="productVideo" type="text" id="productVideo"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
                               dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                               dark:focus:border-blue-500"
                               placeholder="Video url" required>
                        @error('productVideo') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>




                    <div class="mb-6">
                        <label for="productOtherImage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productOtherImage</label>
                        <input multiple wire:model="productOtherImage" type="file" id="productOtherImage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        @error('productOtherImage.*') <span class="error text-red-500">{{ $message }}</span> @enderror
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
                <div wire:loading>
                    Processing data...
                </div>
            </x-slot>

        </x-jet-dialog-modal>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Code
                </th>

                <th scope="col" class="px-6 py-3">
                    Name
                </th>


                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price (rwf)
                </th>
                <th colspan="2" scope="col" class="px-6 py-3">
                    <span>Delete/Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($myProds as $prod)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <img class="w-8 h-8 rounded-full" src="{{asset($prod->productImage)}}" alt="">
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        {{$prod->productCode}}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        {{$prod->productName}}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        {{$prod->productCategory}}
                    </td><td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        {{number_format($prod->productPrice)}}


                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <a wire:click.prevent="deleteProduct({{$prod->id}})"  href="#" class="text-gray-400 hover:text-gray-500">
                            <x-jet-bar-icon type="trash" fill></x-jet-bar-icon>
                        </a>

                    </td>

                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <a class="text-indigo-600 hover:text-indigo-900">Edit</a>

                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
        {{$myProds->links()}}
    </div>
    <x-jet-bar-badge type="danger" text="{{session('message')}}"></x-jet-bar-badge>
</div>
