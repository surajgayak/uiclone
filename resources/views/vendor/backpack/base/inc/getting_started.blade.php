<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/welcome.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="w-full flex flex-wrap justify-start h-auto border border-amber-600">
        <div class="w-25 h-auto m-3 p-8 bg-amber-400 rounded">
            <h1 class="text-center font-bold text-2xl">Admin Users</h1>
            <hr><br>
            <p class="text-center  text-2xl"> {{ DB::table('users')->count() }}
            </p>
        </div>

        <div class="w-25 h-auto m-3 p-8 bg-blue-400 rounded">
            <h1 class="text-center font-bold text-2xl">Customers</h1>
            <hr><br>
            <p class="text-center  text-2xl">{{ DB::table('customer')->count() }}</p>
        </div>

        <div class="w-25 h-auto m-3 p-8 bg-red-400 rounded">
            <h1 class="text-center font-bold text-2xl">Uploads</h1>
            <hr><br>
            <p class="text-center  text-2xl">{{ DB::table('upload')->count() }}</p>
        </div>


        <div class="w-25 h-auto m-3 p-8 bg-green-400 rounded">
            <h1 class="text-center font-bold text-2xl">Category</h1>
            <hr><br>
            <p class="text-center text-2xl">{{ DB::table('categories')->count() }}</p>
        </div>
        <div class="w-25 h-auto m-3 p-8 bg-cyan-400 rounded">
            <h1 class="text-center font-bold text-2xl">Product</h1>
            <hr><br>
            <p class="text-center  text-2xl">{{ DB::table('product')->count() }}</p>
        </div>

    </div>
</body>

</html>
