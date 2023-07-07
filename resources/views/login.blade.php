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
    @if (session()->has('status'))
        <div class="alert alert-danger"
            style="text-align: center;color:white;width:50%;margin: 10px auto;padding:10px; background-color: rgb(246, 65, 65);">
            {{ session('status') }}
            <button id="closeButton"
                style="float: right; padding-right:20px;font-weight:bold;font-size:20px;padding-bottom:10px;line-height:20px;">x</button>
        </div>
    @endif

    <h1 class="text-center text-blue-500 text-4xl font-bold pt-16">LOG IN</h1>
    <div class="bg-white p-8 rounded shadow-md  sm:w-full md:w-1/3  m-auto">
        <h2 class="text-2xl mb-4 ">Login to your account</h2>
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block mb-2 font-bold text-gray-800" for="email">Email</label>
                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required type="emial" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label class="block mb-2 font-bold text-gray-800" for="password">Password</label>
                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required type="password" id="password" name="password" placeholder="Enter your password">
            </div>

            <div class="flex justify-center">
                <button class=" w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md"
                    type="submit">Login</button>
            </div>
        </form>

        <p class="text-center text-gray-500 pt-3">Forget your password ? <a href="" class="underline">Reset
                your Password</a>
        </p>

    </div>
    <h2 class="text-center bold text-gray-500 text-3xl p-5 m-5">OR<br><a
            href="{{ route('register') }}"class="underline">Create a new
            account</a></h2>

    <x-footer></x-footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#closeButton').click(function() {
                $(this).parent().hide();
            });
        });
    </script>

</body>
<html>
