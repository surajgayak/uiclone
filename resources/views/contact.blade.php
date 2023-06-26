<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="styesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')

    <title>Document</title>
</head>

<body>
    <x-navbar>
    </x-navbar>
    <!DOCTYPE html>
    <html>

    <body>
        <h1 class="text-center font-bold p-5 m-5 font-bold text-4xl ">Contact Us</h1>
        <div class="flex justify-center flex-wrap gap-10  h-72 bg-white  p-5">
            <div class=" p-8 bg-white border  w-1/3 text-center shadow">
                <i class="fas fa-map-location-dot text-4xl"></i>
                <h1 class="font-bold text-2xl sm:xl">Address</h1>
                <br>
                <p class="text-center text-xl sm:xl">Gwarko,Kathmandu </p>
            </div>
            <div class=" p-8 bg-white border  w-1/3 text-center shadow">
                <i class=" fas  fa-mobile text-4xl"></i>
                <h1 class="font-bold text-2xl">Contact</h1>
                <br>
                <p class="text-center text-xl">9845909876,+14402665400 </p>
            </div>
        </div>

        <div id="map" class="h-96 bg-gray-200 my-5 mx-5">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.7163846898034!2d85.33482657397403!3d27.66424522739391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1987d4f504eb%3A0x3f4f8a4ebd8188e5!2sKitwosd%20IT%20Support%20Center!5e0!3m2!1sen!2snp!4v1687520571367!5m2!1sen!2snp"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </body>

    </html>

    <x-footer>
    </x-footer>
</body>

</html>
