<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="output.css">
    <title>Home</title>
</head>

<body>
    <!-- header -->
    <?php include 'user_nav.php'  ?>
    <!-- Hero -->
    <div class="w-full py-24 px-6 bg-cover  bg-no-repeat bg-center relative z-10"
        style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(pics/hero.jpg);">

        <div class="container max-w-4xl mx-auto text-center">
            <h1 class="text-xl leading-tight md:text-3xl text-center text-gray-100 mb-3">CINE-X The House of Movies</h1>
            <p class="text-md md:text-lg text-center text-white ">Watch Your Favourite Movies at Your Favourite Time</p>

            <a href="movies.php"
                class="border-gray-50 font-bold hover:bg-red-400 hover:text-white mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">Find
                out
                more</a>
        </div>

    </div>
    <!-- /hero -->

    <!-- home content -->
    <div class="w-full px-6 py-12 bg-white">
        <div class="container max-w-4xl mx-auto text-center pb-10">

            <h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-12">
                Book Your Favourite Movie Now
            </h3>

            <a href="movies.php"
                class="font-bold hover:bg-red-400 hover:text-white mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">Browse
                our products</a>

        </div>

        <div class="container max-w-4xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="pics/joker.jpg" class="w-full h-64 object-cover mb-6" />

                <h2 class="text-xl leading-tight mb-2 font-bold">JOKER</h2>
                <p class="mt-3 mx-auto text-sm leading-normal">In Gotham City, mentally troubled comedian Arthur Fleck
                    is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and
                    bloody crime. This path brings him face-to-face with his alter-ego: the Joker. Arthur Fleck works as
                    a clown and is an aspiring stand-up comic.</p>
                <a href="ticketbook.php"
                    class="border-gray-50 font-bold hover:bg-red-400 hover:text-white mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">BOOK
                    NOW</a>
            </div>

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="pics/jhon.jpg" class="w-full h-64 object-cover mb-6" />

                <h2 class="text-xl leading-tight mb-2 font-bold">JOHN WICK</h2>
                <p class="mt-3 mx-auto text-sm leading-normal">The story focuses on John Wick (Reeves) searching for the
                    men who broke into his home, stole his vintage car and killed his puppy, which was a last gift to
                    him from his recently deceased wife (Moynahan). Stahelski and David Leitch directed the film
                    together, though only Stahelski was credited.</p>
                <a href="ticketbook.php"
                    class="border-gray-50 font-bold hover:bg-red-400 hover:text-white mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">BOOK
                    NOW</a>
            </div>

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="pics/avengers.jpg" class="w-full h-64 object-cover mb-6" />

                <h2 class="text-xl leading-tight mb-2 font-bold">AVENGERS: END GAME</h2>
                <p class="mt-3 mx-auto text-sm leading-normal">Avengers: Endgame is a 2019 American superhero film based
                    on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt
                    Disney Studios Motion Pictures. It is the direct sequel to Avengers: Infinity War (2018) and the
                    22nd film in the Marvel Cinematic Universe (MCU).</p>
                <a href=""
                    class="border-gray-50 font-bold hover:bg-red-400 hover:text-white mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">BOOK
                    NOW</a>
            </div>

        </div>

    </div>
    <hr>
    <!-- google map -->
    <section class="text-gray-700 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.316627701425!2d74.30744071519455!3d31.570364051830452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191ca7d960f837%3A0xc0bb6ddf0568a651!2sPunjab%20University%20College%20of%20Information%20Technology%20Old%20Campus!5e0!3m2!1sen!2s!4v1606383828244!5m2!1sen!2s"
                style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div
                class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Please Give The Review of your Favourite movie or report a
                    problem.</p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                <p class="text-xs text-gray-500 mt-3">Thanks For Visitng CINE-X Please Give Us Your Precious Feedback.
                </p>
            </div>
        </div>
    </section>
    <!-- testimonial -->
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-200 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="leading-relaxed mb-6">This is the best cinema in Pakistan. Ticket price is quite
                            reasonable. Sitting and other facilites are also good. I personaliy liked this cinema and
                            recomend this cinema.I will give them 5 Star for awesome services.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/106x106"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">H*****d</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-200 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="leading-relaxed mb-6">I never expect that there is such an amazing cinema in Pakistn.
                            I loved their services and their managment. 5 star from my side and highly recomended.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/107x107"
                                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">A*****u</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- footer -->
    <footer class="text-gray-700 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">CINE-X</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                2020 CINE-X-CINEMA —
                <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer"
                    target="_blank">@BITF19M003-@BITF19M029</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
</body>

</html>