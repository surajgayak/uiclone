<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/welcome.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/welcome.css">
    <title>Document</title>
</head>

<body>
    <x-navafterlogin></x-navafterlogin>
    <main class="w-full h-auto  px-5 py-10 bg-slate-800 ">
        <div class="swiper">
            <div class="swiper-wrapper bg-dark">
                <div class="swiper-slide cursor-pointer bg-dark">
                    <img
                        src="https://res.cloudinary.com/charibazar/images/v1685337808/charibazar-youtube-thumbnail-eSewa_3927762034/charibazar-youtube-thumbnail-eSewa_3927762034.png?_i=AA">
                </div>
                <div class="swiper-slide cursor-pointer">
                    <img src="https://i.ytimg.com/vi/CA75kLB5DHM/maxresdefault.jpg">
                </div>
                <div class="swiper-slide cursor-pointer">
                    <img
                        src="https://images.ctfassets.net/4cd45et68cgf/5y7i4snzpqkr2oHRCRAkN4/c144749aa0df745e43367744af149f66/Android_Collage_1920x1080__UCAN_En.jpg">
                </div>
                <div class="swiper-slide cursor-pointer">
                    <img
                        src="https://i0.wp.com/gamingonphone.com/wp-content/uploads/2020/07/call-of-duty-mobile-g_compress92.jpg">
                </div>

            </div>
            <div class="swiper-button-next bg-slate-800  mx-3"></div>
            <div class="swiper-button-prev bg-slate-800  mx-3 "></div>
        </div>

        <section>
            <div class="slider2  my-5 flex flex-wrap pt-10 justify-center gap-5 bg-slate-900 w-full">

                <div class="img2 imgs relative flex justify-center">
                    <a href="{{ route('freefireuidafterlogin') }}">
                        <img src="https://nexstorelimited.com/media/there_is_fuck_1_PvK1LLM.jpg" alt=""
                            class="p-3">
                    </a>
                    <h1
                        class="absolute z-10 bottom-10 left-1/2 transform -translate-x-1/2 text-white text-2xl font-bold">
                        FreeFire Diamond UID Top Up
                    </h1>
                </div>

                <div class="img2 imgs relative flex justify-center">
                    <a href="{{ route('netflixafterlogin') }}">
                        <img src="https://nexstorelimited.com/media/InShot_20220314_134034032.jpg" alt=""
                            class="p-3">
                    </a>
                    <h1
                        class="absolute z-10 bottom-10 left-1/2 transform -translate-x-1/2 text-white text-2xl font-bold">
                        Netflix Account Top Up
                    </h1>
                </div>

                <div class="img2 imgs relative flex justify-center">
                    <a href="{{ route('pubgafterlogin') }}"><img
                            src="https://nexstorelimited.com/media/InShot_20220314_133654045.jpg" alt=""
                            class="p-3">
                    </a>
                    <h1
                        class="absolute z-10 bottom-10 left-1/2 transform -translate-x-1/2 text-white text-2xl font-bold">
                        PUBG Diamond UID Top Up
                    </h1>
                </div>
                <div class="img2 imgs relative flex justify-center">
                    <a href="{{ route('callofdutyafterlogin') }}">
                        <img src="https://nexstorelimited.com/media/IMG_20220802_153542_Gv2jhh6.png" alt=""
                            class="p-3">
                    </a>
                    <h1
                        class="absolute z-10 bottom-10 left-1/2 transform -translate-x-1/2 text-white text-2xl font-bold">
                        Call of Duty UID Top Up
                    </h1>
                </div>
            </div>
        </section>


    </main>
    {{-- ..................FOOTER....................... --}}

    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 2,
            direction: getDirection(),
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                resize: function() {
                    swiper.changeDirection(getDirection());
                },
            },
        });

        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

            return direction;
        }
    </script>
</body>

</html>
