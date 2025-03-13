<x-NavigationBar>
    <h1>Create Product</h1>
    <hr>
    <form action="/product/create" id="inputForm" method="post">
        {{-- //"","more_details","price","discount_percentage" --}}
        @csrf
        <label for="name">Product name</label>
        <input type="text" name="name" id="name">
        <label for="details">Product price</label>
        <input type="text" name="details" id="">
        <label for="price">Product description (short)</label>
        <input type="text" name="" id="">
        <label for="price">Product description (short)</label>
        <input type="text" name="" id="">
        <label for="price">Product price</label>
        <input type="text" name="" id="">
        <label for="src">upload Image</label>
        <input onchange="addImageToDOM()" type="file" name="src" id="">
    </form>
    <script>
        function addImageToDOM(){
            const image = document.createElement("img");
            const imageSelector = document.querySelector("input[type='file']");
            // const file = new FileReader();
            const form = document.querySelector("#inputForm");
            image.src = imageSelector.value;
            image.alt = "Selected Image";
            image.style.cssText = "width=100%;object-fit:contain";
            imageSelector.onclick = ()=>{
                form.removeElement(image);
            }
            form.append(image);
        }
    </script>
</x-NavigationBar>
