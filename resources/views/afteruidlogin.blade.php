<x-navafterlogin></x-navafterlogin>
<div class="container mx-auto p-4 sm:w-full md:w-1/2 m-auto my-5 shadow-md m-10 rounded">
    <form action="{{ url('uidlogindata') }}" method="post" data-courses-url="{{ url('/loadcourses') }}">
        @csrf
        <div class="mb-4 ">
            <label for="uid" class="block text-gray-700 text-sm font-bold mb-2">Player UID:</label>
            <input type="number" id="playeruid" name="uid" required
                class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="category">Category:</label>
            <select id="category" class="w-full px-3 py-2 border rounded" onchange="updateProducts()" name="category">
                <option value="" selected disabled>----Select main category----</option>

                @foreach ($uid as $user)
                    <option value="{{ $user->category }}">{{ $user->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="quantity">Quantity:</label>
            <input type="number" id="quantity" min="1" value="1" name="quantity"
                class="w-full px-3 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="product">Product:</label>
            <select id="product" class="w-full px-3 py-2 border rounded" name="product">
                <option value="" selected disabled>----Select product----</option>

                @foreach ($prod as $product)
                    <option value="{{ $product->product }}"> {{ $product->product }} -Rs.{{ $product->price }}
                    </option>
                @endforeach
                <!-- The product options will be dynamically updated based on the selected category -->
            </select>
        </div>
        <input type="submit" value="Add to cart" class="px-4 py-2 cursor-pointer bg-blue-500 text-white rounded">
    </form>
</div>

<x-footer></x-footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#category").change(function() {
            var url = $("#form").attr("data-courses-url");
            var programmingId = $(this).val();
            console.log(programmingId);
            $.ajax({
                url: url,
                data: {
                    'programming': programmingId
                },
                success: function(data) {
                    $("#courses").html(data);
                    console.log(data);
                }
            });
        });
    });
</script>
