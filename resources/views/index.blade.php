<x-NavigationBar title="welcome" endpoints='["Products"]' index="welcome">
    <style>
        .gridBox {
            display: grid;
            grid-template-columns: auto auto auto;
            row-gap: 10px;
        }
    </style>
    <h1>Our Products</h1>
    <div class="gridBox">
        @foreach ($products as $key => $product)
            @component('components.card', [
                'name' => $product['name'],
                'details' => $product['details'],
                'href' => '/product/' . $key,
                'alt' => $product['details'],
                'src' => $product['src'],
            ])
            @endcomponent
        @endforeach
    </div>
</x-NavigationBar>
