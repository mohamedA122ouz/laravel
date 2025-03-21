<x-NavigationBar>
    {{-- @props(['name', 'src', 'alt', 'more_details']) --}}

    <x-moreDetailsCard name="{{ $product['name'] }}" src="{{ $product['src'] }}" alt="{{ $product['details'] }}"
        more_details="{{ $product['more_details'] }}">
    </x-moreDetailsCard>
    <div class="d-flex mb-3">
        <div class="ms-auto p-2">
            <form class="row g-3" action={{ '/product/edit/' . $product['id'] }}>
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-primary mb-3">Edit</button>
            </form>
        </div>
        <div class="ms-3 p-2">
            <form class="row g-3" action={{ '/product/delete/' . $product['id'] }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-3">Delete</button>
            </form>
        </div>
    </div>
</x-NavigationBar>
