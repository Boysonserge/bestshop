<x-app-layout>


    <x-slot name="header">
        <h2 class="font-sans text-xl text-indigo-700">
            {{ __('My products') }}
        </h2>





    </x-slot>

    <div class="py-12 overflow-x-auto   ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-x-auto ">
            @if(session()->has('message'))
                <h2 class="font-sans text-xl text-indigo-700">
                    {{ session('message') }}
                </h2>
            @endif

                @livewire('products')


        </div>
    </div>




</x-app-layout>
