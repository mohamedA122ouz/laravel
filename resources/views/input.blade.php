<x-NavigationBar>
    <h1>Create Product</h1>
    <hr>
    <style>
        #imageLoader {
            /* width: 100%; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            cursor: pointer;
            background: black;
            color: white;
        }

        #imageLoader>img {
            object-fit: contain;
            width: 500px;
            height: 500px;
        }

        #inputFields {
            display: flex;
            flex-direction: column;
            grid-area: 1 / span 2
        }

        #inputForm {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 10px;
        }

        button {
            color: white;
            border-radius: 20px;
            background-color: #0d6efd;
            outline: none;
            cursor: pointer;
            border: transparent;
            height: 45px;
        }
    </style>

    <form action="{{ isset($product) ? '/product/edit/' . $product->id : '/product/create' }}" id="inputForm"
        method="post" enctype="multipart/form-data">
        {{-- //"","more_details","price","discount_percentage" --}}
        @csrf
        @if(isset($product))
            @method("PATCH")
        @endif
        <div id="inputFields">
            <label for="name">brands</label>
            <select name="brand_id">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <label for="name">Product name</label>
            <input type="text" name="name" id="name" value="{{ $product->name ?? '' }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="shortDescription">Product description (short)</label>
            <input type="text" name="shortDescription" id="" value="{{ $product->details ?? '' }}">
            @error('shortDescription')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="longDescription">Product description (Long)</label>
            <textarea name="longDescription" id="">{{ $product->more_details ?? '' }}</textarea>
            @error('longDescription')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="price">Product price</label>
            <input type="text" name="price" id="" value="{{ $product->price ?? '' }}">
            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="dicount">Discount</label>
            <input type="text" name="dicount" id="" value="{{ ($product->discount_percentage ?? 0) * 100 }}">
            @error('dicount')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input style="visibility: hidden;" onchange="addImageToDOM()" type="file" name="src" id="">
            <button type="submit">{{ isset($product) ? "Edit":"Create" }}</button>
        </div>
        <div onclick="select()" id="imageLoader">
            @php
                if (isset($product)) {
                    $src = $product['src'];
                    if (strpos($src, 'storage/image') == 0) {
                        $src = asset($src);
                    }

                }
            @endphp
            <img src = "{{ $src ?? 'https://media.istockphoto.com/id/1409329028/vector/no-picture-available-placeholder-thumbnail-icon-illustration-design.jpg?s=612x612&w=0&k=20&c=_zOuJu755g2eEUioiOUdz_mHKJQJn-tDgIAhQzyeKUQ='}}"
                alt="product image">
            <h3>Upload Image</h3>
            @error('src')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </form>
    <script>
        const imageSelector = document.querySelector("input[type='file']");

        function select() {
            imageSelector.click();
        }

        function addImageToDOM() {
            const image = document.querySelector("img");
            const file = new FileReader();
            file.readAsDataURL(imageSelector.files[0]);
            file.addEventListener("load", () => {
                image.src = file.result;
            });
        }
    </script>
</x-NavigationBar>
