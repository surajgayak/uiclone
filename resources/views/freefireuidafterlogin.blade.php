<x-navafterlogin></x-navafterlogin>
<div class=" mx-auto w-1/2  m-5  ">
    <form action="login.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4 ">
            <label for="uid" class="block text-gray-700 text-sm font-bold mb-2">Player UID:</label>
            <input type="text" id="uid" name="uid" required
                class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

    </form>
</div>
<x-category></x-category>
<x-footer></x-footer>