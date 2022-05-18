<div>

    <div class="flex items-center justify-between mt-4 pb-4">
        <div>Products</div>
        <x-jet-button wire:click="createShowModal">
            {{ __('Add new category') }}
        </x-jet-button>

        <x-jet-dialog-modal wire:model="showFormVisible" wire:ignore.self>
            <x-slot name="title">
                {{ $title }}
            </x-slot>

            <x-slot name="content">
                <form>
                    <div class="mb-6">
                        <label for="productCategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your productCategory</label>
                        <input wire:model="productCategory" type="text" id="productCategory"
                               class="bg-gray-50 border border-gray-300 text-gray-900
                               text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                               block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                               dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                               dark:focus:border-blue-500" placeholder="Product Category" required>
                        @error('productCategory') <span class="error text-red-500">{{ $message }}</span> @enderror

                    </div>



                </form>


            </x-slot>

            <x-slot name="footer">
                <div wire:loading.remove>

                    <x-jet-button wire:click.prevent="addCategory()"  wire:loading.remove>
                        {{ __('Save category') }}
                    </x-jet-button>

                </div>
                <div wire:loading>
                    Processing data...
                </div>

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
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Category name
                </th>


                <th colspan="2" scope="col" class="px-6 py-3">
                    <span>Delete/Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($myCategories as $cat)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        {{$increment}}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        {{$cat->productCategory}}
                    </td>


                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <a  wire:click.prevent="deleteCategory({{$cat->id}})"  href="#" class="text-gray-400 hover:text-gray-500">
                            <x-jet-bar-icon type="trash" fill></x-jet-bar-icon>
                        </a>
                    </td>

                    <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        <a href="Edit" class="bg-blue-600 hover:bg-blue-700 text-blue-600 font-bold py-2 px-4 rounded">Edit</a>
                    </td>
                </tr>

               <?php               $increment=$increment+1; ?>
            @endforeach


            </tbody>
        </table>
        {{$myCategories->links()}}
    </div>
    <x-jet-bar-badge type="danger" text="{{session('message')}}"></x-jet-bar-badge>
</div>
