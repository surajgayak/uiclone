<x-navafterlogin></x-navafterlogin>
<div class="flex justify-center items-center h-screen m-5">
    <div class="bg-white rounded-lg shadow-lg p-8  w-1/2 ">
        <h1 class="text-center mb-6 text-xl font-bold">Your total product price is Rs.</h1>
        <br>
        <p class="bg-gray-600 text-center p-2 rounded text-white">Pay exactly Rs.</p><br>
        <p class="bg-gray-600 text-center p-2 rounded text-white">Remarks: Your real name only!</p>
        <br>
        <p class="text-red-500">WARNING:
            eSewa, Bank, etc मार्फत पैसा पठाउँदा Remarks मा आफ्नो नाम मात्र लेख्नुहोस्।<br><br>
            If you wrote FreeFire, Topup, Diamonds, etc then your order will be cancelled & you wont get refund too✓
        </p><br>
        <form action="/submit_payment" method="post" enctype="multipart/form-data">
            <label for="paymentMethod" class="block mb-2">Payment Method:</label>
            <select id="paymentMethod" name="paymentMethod" class="w-full p-2 mb-4 border rounded-md">
                <option value="">--------</option>
                <option value="esewa">Esewa</option>
                <option value="imepay">IME Pay</option>
                <option value="khalti">Khalti</option>
                <option value="mobilebanking">Mobile Banking</option>
            </select>

            <label for="senderNumber" class="block mb-2">Sender Number:</label>
            <input type="text" id="senderNumber" name="senderNumber" required
                class="w-full p-2 mb-4 border rounded-md" placeholder="Enter a sender number">

            <label for="remark" class="block mb-2">Remarks:</label>
            <input id="remark" name="remark" rows="4" cols="50" class="w-full p-2 mb-4 border rounded-md"
                placeholder="" placeholder="write a remarks">

            <label for="screenshot" class="block mb-2">Screenshot:</label>
            <input type="file" id="screenshot" name="screenshot" accept="image/*" class="mb-4">

            <input type="submit" value="Submit" class="block w-full p-2 bg-blue-500 text-white rounded-md" disabled>
        </form>
    </div>
</div>
<x-footer></x-footer>
