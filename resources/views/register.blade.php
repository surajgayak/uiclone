<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <x-navbar></x-navbar>
    <h1 class="text-center text-blue-500 text-4xl font-bold pt-5">Create New Account</h1>
    <div class="bg-white p-8 rounded shadow-md  sm:w-full md:w-1/3 m-auto">
        <h2 class="text-2xl font-semibold mb-6">Register</h2>
        <form action="{{ url('/registration') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name"
                    class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="contact" class="block text-gray-700 text-sm font-bold mb-2">Contact</label>
                <input type="number" id="contact" name="contact"
                    class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 w-full font-bold">Register</button>
        </form>
    </div>
    <h1 class="text-center bold text-2xl p-5 m-5 text-gray-400">Already have an account ?<br> Then Log in<br><a
            href="{{ route('login') }} " class="underline">
        </a></h1>



    <x-footer></x-footer>
</body>
<html>
