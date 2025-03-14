@php
    $product = $orders["product"];
@endphp
{{ var_dump($orders["products"]) }}
<x-NavigationBar>
    <h1>Hello World!</h1>
    {{-- <x-moreDetailsCard name="{{ $product['name'] }}" src="{{ $product['src'] }}" alt="{{ $product['details'] }}"
        more_details="{{ $product['more_details'] }}">
    </x-moreDetailsCard> --}}
    <div>
        {{ $orders->links() }}
    </div>
</x-NavigationBar>
