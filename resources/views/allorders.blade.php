{{-- {{ var_dump($orders) }} --}}
<x-NavigationBar>
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pagination a,
        .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            font-size: 18px;
        }
    </style>
    <h1>Hello World!</h1>
    @foreach ($orders as $order)
        @php
            $product = $order['product'];
        @endphp
        <x-moreDetailsCard name="{{ $product['name'] }}" src="{{ $product['src'] }}" alt="{{ $product['details'] }}"
            more_details="{{ $product['more_details'] }}">
        </x-moreDetailsCard>
    @endforeach
    <div style="display: flex; height:50px;width:150;display">
        {{ $orders->links() }}
    </div>
</x-NavigationBar>
