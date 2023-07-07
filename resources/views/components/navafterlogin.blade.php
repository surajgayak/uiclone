<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/welcome.css">
    <title>Document</title>
</head>

<body>
    <nav aria-label="navbar" x-data class="border-b bg-white">
        <div class="mx-auto max-w-screen-xl px-1 py-4 ">
            <div class="flex items-center justify-between">
                <a class="cursor-pointer" href="{{ route('homepageafterlogin') }}">
                    <img src="/images/logo.png" class="w-32 h-12" />
                </a>
                <ul class="flex items-center gap-x-8">
                    <li class="hidden sm:block">
                        <a href="{{ route('homepageafterlogin') }}"
                            class="cursor-pointer text-sm font-medium text-gray-900 hover:text-gray-900/70 focus:text-gray-900/70">Home</a>
                    </li>
                    <li class="hidden sm:block">
                        <a href="{{ route('myorder') }}"
                            class="cursor-pointer text-sm font-medium text-gray-900 hover:text-gray-900/70 focus:text-gray-900/70">My
                            order</a>
                    </li>
                    <li class="hidden sm:block">
                        <a href="{{ route('myaccount') }}"
                            class="cursor-pointer text-sm font-medium text-gray-900 hover:text-gray-900/70 focus:text-gray-900/70">My
                            account</a>
                    </li>

                    <li>
                        <a href="{{ route('welcome') }}"
                            class="flex cursor-pointer items-center gap-x-1 rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-gray-50 hover:bg-gray-900/70 focus:bg-gray-900/70">
                            <span>Logout</span>
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                    </li>
                    <li class="sm:hidden">
                        <button aria-label="menu"
                            x-on:click="
                  document.querySelector('#sidenavbar').classList.remove('w-0');
                  document.querySelector('#sidenavbar').classList.add('w-full');
                  "
                            class="flex items-center gap-x-1 rounded-lg bg-gray-900 px-2 py-2 text-sm font-medium text-gray-50 hover:bg-gray-900/70 focus:bg-gray-900/70">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <div id="sidenavbar" class="duration-400 fixed top-0 right-0 z-50 h-full w-0 overflow-x-hidden transition-all">
            <div x-on:click="
            document.querySelector('#sidenavbar').classList.add('w-0');
            document.querySelector('#sidenavbar').classList.remove('w-full');
            "
                class="absolute right-0 top-0 z-50 h-full w-full backdrop-blur-lg"></div>
            <div class="absolute right-0 top-0 z-50 h-full w-[200px] border-l bg-white shadow-lg">
                <div class="flex items-center justify-between border-b p-4">
                    <a class="cursor-pointer" href="{{ route('homepageafterlogin') }}">
                        <img class="w-20 h-8" src="images/logo.png" alt="nexstore" />
                    </a>
                    <button aria-label="close"
                        x-on:click="
                    document.querySelector('#sidenavbar').classList.add('w-0');
                    document.querySelector('#sidenavbar').classList.remove('w-full');
                    "
                        class="text-gray-900 hover:text-gray-900/70">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>
                <div class="border-b p-4">
                    <ul class="flex flex-col gap-y-3">
                        <li>
                            <a
                                href="{{ route('homepageafterlogin') }}"class="cursor-pointer text-sm font-medium text-gray-900 hover:text-gray-900/70">Home</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('myorders') }}"class="cursor-pointer text-sm font-medium text-gray-900 hover:text-gray-900/70">My
                                order</a>
                        </li>
                        <li>
                            <a
                                href="{{ route('myaccount') }}"class="cursor-pointer text-sm font-medium text-gray-900 hover:text-gray-900/70">My
                                account</a>
                        </li>

                    </ul>
                </div>
                <div class="p-4">
                    <a href="{{ route('welcome') }}"
                        class="flex cursor-pointer items-center justify-center gap-x-2 rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-gray-50 hover:bg-gray-900/70">
                        <span>Logout</span>
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <script>
        < /body> < /
        html >
            src = "//unpkg.com/alpinejs"
        defer >
    </script>

</body>

</html>
