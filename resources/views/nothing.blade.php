<x-navbar></x-navbar>
<div class="container mx-auto p-4 sm:w-full md:w-1/2 m-auto my-5 shadow-md m-10 rounded">

    <form action="{{ url('/nodata') }}" method="post">
        @csrf
        <div class="mb-4">
            <label class="block mb-2" for="category">Category:</label>
            <select id="category" class="w-full px-3 py-2 border rounded" name="category"onchange="updateProducts()">
                <option value="" selected disabled>----Select main category----</option>
                @foreach ($cate as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="quantity">Quantity:</label>
            <input type="number" id="quantity" min="1" name="quantity" value="1"
                class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="product">Product:</label>
            <select id="product" class="w-full px-3 py-2 border rounded" name="product">
                <option value="" selected disabled>----Select product----</option>

                @foreach ($prod as $product)
                    <option value="{{ $product->id }}">{{ $product->product }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Add to Cart"class="px-4 py-2 cursor-pointer bg-blue-500 text-white rounded">

    </form>
</div>

<x-footer></x-footer>
