<x-navafterlogin></x-navafterlogin>
<div class="container mx-auto p-4  sm:w-full md:w-1/2 m-auto my-5 shadow-md rounded">

    <form action="{{ url('/facebooklogindata') }}" method="post" id="form"
        data-courses-url="{{ url('/loadcourses') }}">
        @csrf
        <div class="mb-4 ">
            <h1 class=" bg-gray-600  text-white p-0.5 mb-5 w-56 text-center font-bold text-xl">Facebook Login Only
            </h1>
            <input type="text" id="email" name="email"
                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                placeholder="Email" required>
            <br><br>
            <input type="text" id="password" name="password"
                class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="password" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2" for="category" name="category">Category:</label>
            <select id="category" class="w-full px-3 py-2 border rounded" name="category">
                <option value="" selected disabled>----Select main category----</option>

                @foreach ($cate as $cat => $key)
                    <option value="{{ $key->id }}">
                        {{ $key->category }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block mb-2" for="quantity" name="quantity">Quantity:</label>
            <input type="number" id="quantity" min="1" name="quantity"
                class="w-full px-3 py-2 border rounded ">
        </div>
        <div class="mb-4">
            <label class="block mb-2" for="product" name="product">Product:</label>
            <select id="courses" class="w-full px-3 py-2 border rounded" name="courses">
                <option value="" selected disabled>----Select product----</option>

                <div class="" style="display: none;">
                    @foreach ($prod as $product)
                        <option value="{{ $product->product }}" style="display: none;">
                            {{ $product->product }} -Rs.{{ $product->price }}
                        </option>
                    @endforeach
                </div>
            </select>
        </div>
        <input type="submit" class="px-4 py-2 bg-blue-500  cursor-pointer text-white rounded" value="Add to Cart">
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
