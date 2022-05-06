<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/detail.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

<link rel="stylesheet" href="{{asset('css/flowbite.css')}}">

@livewireStyles
<head><title>Items in cart</title></head>
@include('inc.header')

<body>
<div class="overlay" data-overlay></div>

<main>
    <div class="bg-yellow-50 py-12 px-6 flex justify-center mb-6">
        <div class="text-yellow-500 py-12 px-6 text-center">
            <h1 class="text-2xl font-extrabold"> Products in a cart</h1>
            <hr>
        </div>
    </div>

    <div class="container mb-6">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4 items-end">
            <div>
                @livewire('login-side')
            </div>
            <div>
                @livewire('register-side')
            </div>
        </div>
    </div>
</main>

@include('inc.footer')
<script src="{{asset('js/script.js')}}"></script>
<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{asset('js/flowbite.js')}}"></script>
@livewireScripts
</body>


</html>
