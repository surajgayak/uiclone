<div class="container mx-auto p-4 w-1/2 m-auto my-5 shadow-lg m-10 rounded ">
    <form>
        <div class="mb-4">
            <label class="block mb-2" for="category">Category:</label>
            <select id="category" class="w-full px-3 py-2 border rounded">
                <option value="clothing">Diamond</option>
                <option value="electronics">Membership</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="quantity">Quantity:</label>
            <input type="number" id="quantity" min="1" value="1" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="product">Product:</label>
            <select id="product" class="w-full px-3 py-2 border rounded">
                <option value="tshirt">Bundle</option>
                <option value="pants">Elite Pass</option>

            </select>
        </div>
        <button type="button" onclick="addToCart()" class="px-4 py-2 bg-blue-500 text-white rounded">Add to
            Cart</button>
    </form>
</div>
