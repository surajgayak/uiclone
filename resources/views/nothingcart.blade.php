@foreach ($products as $prod)
@endforeach
<x-navafterlogin></x-navafterlogin>

<form action="{{ url('payment') }}" method="post">
    @csrf
    <div class="w-full h-auto p-5 rounded m-auto ">
        <div class="flex flex-col  sm:w-full md:w-1/2 m-auto p-5 rounded shadow-2xl">
            <p class="text-start underline">Your Items</p>

            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8  h-auto">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light text-center">
                            <thead class="border-b font-medium">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Category</th>
                                    <th scope="col" class="px-6 py-4">Product</th>
                                    <th scope="col" class="px-6 py-4">Quantity</th>
                                    <th scope="col" class="px-6 py-4">Price</th>
                                    <th scope="col" class="px-6 py-4">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="cart-table-body">
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($nothingdata as $key => $value)
                                    <tr>
                                        <th scope="col" class="px-6 py-4">{{ $value->category }}</th>
                                        <th scope="col" class="px-6 py-4">{{ $value->product }}</th>
                                        <th scope="col" class="px-6 py-4">{{ $value->quantity }}</th>
                                        <th scope="col" class="px-6 py-4">{{ $prod->price }}</th>
                                        <th scope="col" class="px-6 py-4">
                                            {{ $prod->price * $value->quantity }}

                                        </th>
                                    </tr>
                                    @php
                                        $total += $prod->price * $value->quantity;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            Total:Rs. {{ $total }}

            <input type="submit" class=" bg-blue-500 p-3 mt-3 rounded text-white text-center cursor-pointer"
                value="Checkout">
        </div>
    </div>
</form>
<x-footer></x-footer>
