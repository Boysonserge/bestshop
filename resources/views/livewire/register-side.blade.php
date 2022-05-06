<div>
{{$logged}}
    <div class="overflow-x-auto overflow-y-auto px-6 py-12 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

        @foreach ($errors->all() as $message)

            <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                    <span class="font-medium">{{$message}}</span>
                </div>
            </div>

        @endforeach
        <div class="flex items-center space-x-4 mb-6">
            <div class="w-full relative">
                <input wire:model="names"  type="text" id="names"
                       class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg
                       border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                       dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" ">
                <label for="names"
                       class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform
                       -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2
                       peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                       peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
                       peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                       peer-focus:-translate-y-4 left-1">Names
                </label>
            </div>
            <br>

            <div class="w-full relative">
                <input wire:model="email"  type="text" id="email"
                       class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg
                       border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                       dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" ">
                <label for="email"
                       class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform
                       -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2
                       peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                       peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
                       peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                       peer-focus:-translate-y-4 left-1">Email
                </label>
            </div>
            <br>

            <div class="w-full relative">
                <input type="text" id="phone"  wire:model="phone"
                       class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg
                       border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                       dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" ">
                <label for="phone"
                       class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform
                       -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800
                       px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                       peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
                       peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                       peer-focus:-translate-y-4 left-1">Phone</label>

            </div>

        </div>


        <div class="flex items-center space-x-4 mb-6">
            <div class="w-full relative">
                <input type="text" id="address"  wire:model="address"
                       class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg
                       border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                       dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" ">
                <label for="address"
                       class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform
                       -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800
                       px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                       peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
                       peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75
                       peer-focus:-translate-y-4 left-1">Address</label>

            </div>
            <br>

            <div class="w-full relative">
                <input type="password" id="password" wire:model="password"
                       class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg
                       border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600
                       dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" ">
                <label for="password"
                       class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform
                       -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-800 px-2 peer-focus:px-2
                       peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                       peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2
                       peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password
                    </label>


            </div>


        </div>
        <br>
        <button type="button" wire:click.prevent="register()"
                class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Register
        </button>

    </div>

</div>
