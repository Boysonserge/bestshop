<div>

    <x-jet-bar-container>
{{--        <x-jet-bar-alert text="This is an alert message" type="warning"></x-jet-bar-alert>--}}
        <x-jet-bar-stats-container>

            <x-jet-bar-stat-card title="Total clients" number="{{$clients}}" type="warning" >
                <x-jet-bar-icon type="users" fill></x-jet-bar-icon>
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="Total products" number="{{$products}}" type="success" >
                <x-jet-bar-icon type="money" fill></x-jet-bar-icon>
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="New sales" number="{{$sales}}" type="info" >
                <x-jet-bar-icon type="cart" fill></x-jet-bar-icon>
            </x-jet-bar-stat-card>
            <!-- Card -->
            <x-jet-bar-stat-card title="Message usage" number="{{$messageUsage}}" type="danger" >
                <x-jet-bar-icon type="message" fill></x-jet-bar-icon>
            </x-jet-bar-stat-card>
        </x-jet-bar-stats-container>

        <x-jet-bar-table :headers="['Product name', 'Client name', 'Client Phone', 'Quantity', 'Price (rwf)', 'Total (rwf)']">


            @foreach($orders as $order)
                <tr class="hover:bg-gray-50">
                    <x-jet-bar-table-data>
                        {{$order->productName}}
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        <div class="text-sm text-gray-900">{{$order->productCode}}</div>
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        {{$order->phone}}
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        {{$order->quantity}}
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        {{number_format($order->price)}}
                    </x-jet-bar-table-data>

                    <x-jet-bar-table-data>
                        {{number_format($order->sub_total)}}
                    </x-jet-bar-table-data>




                </tr>
            @endforeach


        </x-jet-bar-table>

    </x-jet-bar-container>

</div>
