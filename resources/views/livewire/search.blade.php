<div class="header-search-container">
    <form action="{{route('search')}}" method="POST" autocomplete="off">
        @csrf
        <input wire:model="searchKey" required type="search" name="searchQuery" class="search-field" placeholder="Enter your product name...">
        <button type="submit" class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
        </button>
    </form>
    @if($searchKey)
        <ul class="absolute z-10 w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @foreach($searchResults as $sear)
                <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                    <a href="{{route('prodDetails', ['id' => $sear->productSlug])}}">{{$sear->productName}}</a>
                </li>

            @endforeach

        </ul>
    @endif

</div>
