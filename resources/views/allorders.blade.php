<x-NavigationBar>
    <h1>Hello World!</h1>
    {{ $orders }}
    @foreach ($orders as $order)
        @php
            $product = $order['product'];
        @endphp
        {{ $product }}
        {{-- @component('components.moreDetailsCard', [
    'name' => $product['name'],
    'more_details' => $product['details'],
    'href' => '/product/' . $key,
    'alt' => $product['details'],
    'src' => $product['src'],
    'orderedBy' => $order['user']['name'],
])
        @endcomponent --}}
    @endforeach
</x-NavigationBar>
