<div class="container mx-auto p-4 w-1/2 m-auto my-5 shadow-md m-10 rounded">
    <form>
        <div class="mb-4">
            <label class="block mb-2" for="category">Category:</label>
            <select id="category" class="w-full px-3 py-2 border rounded" onchange="updateProducts()">
                <option value="diamonds">Diamonds</option>
                <option value="membership">Membership</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="quantity">Quantity:</label>
            <input type="number" id="quantity" min="1" value="1" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="product">Product:</label>
            <select id="product" class="w-full px-3 py-2 border rounded">
                <!-- The product options will be dynamically updated based on the selected category -->
            </select>
        </div>
        <button type="button" onclick="addToCart()" class="px-4 py-2 bg-blue-500 text-white rounded">Add to
            Cart</button>
    </form>
</div>

<script>
    function updateProducts() {
        var categorySelect = document.getElementById("category");
        var productSelect = document.getElementById("product");
        var selectedCategory = categorySelect.value;

        // Clear previous product options
        productSelect.innerHTML = "";

        // Add new product options based on the selected category
        if (selectedCategory === "diamonds") {
            var option1 = document.createElement("option");
            option1.value = "bundle";
            option1.textContent = "110 D-NRS.100";
            productSelect.appendChild(option1);

            var option2 = document.createElement("option");
            option2.value = "bundle";
            option2.textContent = "210 D-NRS.200";
            productSelect.appendChild(option2);

            var option3 = document.createElement("option");
            option3.value = "bundle";
            option3.textContent = "410 D-NRS.250";
            productSelect.appendChild(option3);

            var option4 = document.createElement("option");
            option4.value = "bundle";
            option4.textContent = "510 D-NRS.300";
            productSelect.appendChild(option4);


            var option5 = document.createElement("option");
            option5.value = "bundle";
            option5.textContent = "810 D-NRS.550";
            productSelect.appendChild(option5);

            var option6 = document.createElement("option");
            option6.value = "bundle";
            option6.textContent = "1000 D-NRS.650";
            productSelect.appendChild(option6);


        } else if (selectedCategory === "membership") {


            var option3 = document.createElement("option");
            option3.value = "Weekly Membership";
            option3.textContent = "Weekly Membership NRS.500"; // Set the product for the membership category
            productSelect.appendChild(option3);

            var option4 = document.createElement("option");
            option4.value = "Monthly Membership";
            option4.textContent = "Monthly Membership NRS.1000"; // Set the product for the membership category
            productSelect.appendChild(option4);

            var option5 = document.createElement("option");
            option5.value = "Yearly Membership";
            option5.textContent = "Yearly Membership NRS.5000"; // Set the product for the membership category
            productSelect.appendChild(option5);
        }
    }

    function addToCart() {
        // Retrieve the selected category, product, and quantity
        var category = document.getElementById("category").value;
        var product = document.getElementById("product").value;
        var quantity = document.getElementById("quantity").value;

        // Perform your desired actions with the selected category, product, and quantity
        console.log("Category: " + category);
        console.log("Product: " + product);
        console.log("Quantity: " + quantity);
    }
</script>
