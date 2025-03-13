<x-NavigationBar title="welcome" endpoints='["Products"]' index="welcome">
    <style>
        .gridBox {
            display: grid;
            grid-template-columns: auto auto auto;
            row-gap: 10px;
        }

        @media(max-width:700) {
            .gridBox {
                grid-template-columns: auto;
            }
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
                'price' => $product['price'],
                'discount' => $product['discount_percentage'],
            ])
            @endcomponent
        @endforeach
    </div>
</x-NavigationBar>
