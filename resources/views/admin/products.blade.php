<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans text-xl text-indigo-700">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 w-full bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('products')
            </div>

        </div>
    </div>




</x-app-layout>
