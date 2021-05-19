<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="output.css">
  <title>About</title>
</head>

<body>
  <!-- header -->
  <?php include 'user_nav.php' ?>
  <!-- hero section -->
  <div class="w-full py-24 px-6 bg-cover  bg-no-repeat bg-center relative z-10"
    style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url( pics/hero.jpg);">

    <div class="container max-w-4xl mx-auto text-center">
      <h1 class="text-xl font-bold leading-tight md:text-3xl text-center text-gray-100 mb-3">ABOUT US</h1>
    </div>

  </div>
  <!-- about us section -->
  <section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">What is CINE-X</h1>
        <p class="mb-8 font-semibold leading-relaxed">Founded in 1930, CINE-X is the largest and best-known cinema chain
          in the UK and
          Ireland. Since then, the world-famous CINE-X Luxe Leicester Square has hosted hundreds of Europe’s biggest
          film
          premieres and is now the first Dolby Cinema™ in the UK.

          Perry Bar in Birmingham saw the first CINE-X cinema open in 1930, and established the brand as not only
          somewhere to watch films, but somewhere to experience them too. Iconic art deco architecture and the very
          latest technology became synonymous with CINE-X where you didn’t just go to see a film, you went to the
          cinema.

          Today we’re owned by AMC Theatres, the largest movie exhibition company in the world, and our passion for film
          and the whole cinema experience is so deep-rooted that it is embodied in everything we do. </p>
        <a href=" movies.php"
          class="font-bold hover:bg-red-400 hover:text-white mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">Browse
          our products</a>
      </div>
    </div>
  </section>
  <!-- divided section -->
  <section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
        <img alt="feature" class="object-cover object-center h-full w-full"
          src="https://source.unsplash.com/460x500/?cinema_hall">
      </div>
      <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
        <div class="flex flex-col mb-10 lg:items-start items-center">
          <div
            class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
            <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">24/7 Service</h2>
            <p class="leading-relaxed text-base">On this platform you will be provided with a non stop service and a
              fast reservation for your movie tickets.</p>
            <br>
          </div>
          <div class="flex flex-col mb-10 lg:items-start items-center">
            <div
              class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
              <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-6 h-6" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Efficiency</h2>
              <p class="leading-relaxed text-base">Here you will be provided deatiled information about the cinemas,
                their locations and the movies they are currently displaying with great efficiency with zero
                disturbances.</p>

            </div>
          </div>
          <div class="flex flex-col mb-10 lg:items-start items-center">
            <div
              class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
              <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Easy Access</h2>
              <p class="leading-relaxed text-base">Here you will be given an easy and full access to visit the website
                and learn about the availability of various movies and booking the tickets of your choice.<br>All you
                have to do is make an account and that's how you will get yourself the easy way towards enjoyment.</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- statistics -->
  <section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
          <p class="leading-relaxed">Regular Users</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">0.9K</h2>
          <p class="leading-relaxed">Subscribes</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">65</h2>
          <p class="leading-relaxed">Staff Members</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4</h2>
          <p class="leading-relaxed">Branches</p>
        </div>
      </div>
    </div>
  </section>
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
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
            class="w-5 h-5" viewBox="0 0 24 24">
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