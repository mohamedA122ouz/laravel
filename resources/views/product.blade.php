<x-NavigationBar>
    {{-- @props(['name', 'src', 'alt', 'more_details']) --}}
    <x-moreDetailsCard name="{{ $product['name'] }}" src="{{ $product['src'] }}" alt="{{ $product['details'] }}"
        more_details="{{ $product['more_details'] }}">
    </x-moreDetailsCard>
</x-NavigationBar>
