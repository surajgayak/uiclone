<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/welcome.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <nav class="flex-no-wrap relative flex w-full items-center justify-around   bg-slate-50 py-2  dark:bg-slate-50  border-b-2 border-slate-200  lg:flex-wrap lg:justify-start lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between  mx-7 px-5">
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navigation container -->
            <div class="!visible hidden  basis-[100%] items-center lg:!flex lg:basis-auto " id="navbarSupportedContent1"
                data-te-collapse-item>
                <!-- Logo -->
                <a class="mb-4 mr-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                    href="{{ route('homepageafterlogin') }}">
                    <img src="images/logo.png" class="w-36 h-12">
                </a>

            </div>

            <!-- Right elements -->
            <div class="relative flex items-center ">

                <ul class="flex justify-content-around flex-wrap sm:flex-col md:flex-row  mx-3 px-2">
                    <li class="px-5 font-bold sm:! visible hidden"> Welcome , Suraj</li>
                    <li class="px-5"><a href="{{ route('homepageafterlogin') }}"><i class="fas fa-house"></i>&nbsp;
                            Home</a></li>
                    <li class="px-5"><a href="{{ route('myorder') }}"><i class="fas fa-cart-shopping"></i>&nbsp; My
                            Order</a></li>
                    <li class="px-5"><a href="{{ route('myaccount') }}"><i class="fa-solid fa-user"></i> &nbsp;My
                            account</a></li>
                    <li class="px-5"><a href="{{ route('welcome') }}"><i class="fas fa-right-from-bracket"></i>&nbsp;
                            Logout</a></li>
                </ul>

            </div>
        </div>
    </nav>
</body>

</html>
