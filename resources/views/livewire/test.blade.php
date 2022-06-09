<div>
    <input type="text" wire:model="number"><br>


    @if($number==1)
        <input wire:click.prevent="change" type="submit" value="Change me"
               class="bg-blue-600 text-white p-3 cursor-pointer">

    @else
        <input wire:click.prevent="change2" type="submit" value="Change me too"
               class="bg-red-600 text-red-500 p-3 cursor-pointer">

    @endif



    @if(session()->has('message'))
        <label for="id" class="text-blue-600 bg-gray-100">{{session('message')}}</label>
    @endif

</div>
