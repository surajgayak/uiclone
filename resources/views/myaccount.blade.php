<x-navafterlogin></x-navafterlogin>
<div class="w-1/2 mx-auto text-center shadow-lg m-10 p-5 rounded">
    <img src="images/about.png" alt="Profile Image" class="w-24 h-24 rounded-full mx-auto mb-4">
    <h2 class="text-2xl font-bold mb-2">Suraj Gayak</h2>
    <p class="text-gray-600 mb-4">Account Type: Premium</p>
    <ul class="text-center mb-4">
        <li><a href="{{ route('myorder') }}">My Orders</a></li>
        <li>Contact</li>
        <li><a href="#">Update Username</a></li>
    </ul>
    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Logout</button>
</div>

<x-footer></x-footer>
