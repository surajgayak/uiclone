<x-navafterlogin></x-navafterlogin>
<div class="container mx-auto p-4 sm:w-full md:w-1/2 m-auto my-5 shadow-md m-10 rounded">
    <form action="{{ url('nothinglogindata') }}" method="post">
        @csrf
        <div class="mb-4">
            <label class="block mb-2" for="category">Category:</label>
            <select id="category" class="w-full px-3 py-2 border rounded" onchange="updateProducts()" name="category">
                <option value="" selected disabled>----Select main category----</option>

                @foreach ($cate as $cat)
                    <option value="{{ $cat->category }}">{{ $cat->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="quantity">Quantity:</label>
            <input type="number" id="quantity" min="1" value="1"name="quantity"
                class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="product">Product:</label>
            <select id="product" class="w-full px-3 py-2 border rounded" name="product">
                <option value="" selected disabled>----Select main category----</option>

                @foreach ($prod as $product)
                    <option value="{{ $product->product }}">{{ $product->product }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Add to cart" class="px-4 py-2 cursor-pointer bg-blue-500 text-white rounded">
    </form>

</div>



<x-footer></x-footer>
