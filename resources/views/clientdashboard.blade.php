<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/detail.css')}}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

@livewireStyles
<head><title>Items in cart</title></head>
@include('inc.header')

<body>
<div class="overlay" data-overlay></div>

<main>
    <div class="bg-blue-50 py-12 px-6 flex justify-center mb-6">
        <div class="text-blue-500 py-12 px-6 text-center">
            <h1 class="text-2xl font-extrabold"> Client panel</h1>

            {{\Illuminate\Support\Facades\Auth::check()}}
            <hr>
        </div>
    </div>
    <div class="container mb-6">
            <div class="flex space-x-4">
                <div class="w-1/3">
                    <aside aria-label="Sidebar">
                        <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded">
                            <ul class="space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100">
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                                        <span class="ml-3">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                                        <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">2</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="w-full>
                    <aside aria-label="Sidebar">
                        <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded  text-gray-800">
                            ivewire manke in the name of the same name tags and we ivewire manke in the name of the same name tags and we are ivewire manke in the name of the same name tags and we ivewire manke in the name of the same name tags and we are
                        </div>
                    </aside>
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
@livewireScripts
</body>


</html>
