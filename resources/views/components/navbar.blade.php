<!-- Main navigation container -->
<nav class="flex-no-wrap relative flex w-full items-center justify-around bg-slate-50 py-2 dark:bg-slate-50 border-b-2 border-slate-200 lg:flex-wrap lg:justify-start lg:py-4"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between mx-7 px-5">
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
        <div class="hidden lg:!flex lg:basis-auto w-full lg:w-auto" id="navbarSupportedContent1" data-te-collapse-item>
            <!-- Logo -->
            <a class="mb-4 mr-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                href="{{ route('welcome') }}">
                <img src="images/logo.png" class="w-36 h-12">
            </a>
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center flex-wrap sm:flex-col md:flex-row">
            <ul class="flex justify-around mx-3 px-2 sm:flex-col md:flex-row">
                <li class="px-5"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="px-5"><a href="#">About</a></li>
                <li class="px-5"><a href="#">Products</a></li>
                <li class="px-5"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <a href="{{ route('login') }}">
                <button class="bg-blue-600 px-5 py-2 text-white rounded">Login</button>
            </a>
        </div>
    </div>
</nav>
