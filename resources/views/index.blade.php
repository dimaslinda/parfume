<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {!! seo() !!}

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="font-poppins">
        <header>
            <nav class="bg-white border-gray-200">
                <div class="flex flex-wrap justify-between items-center p-4 mx-auto max-w-screen-xl">
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{asset('img/general/logo.png')}}" class="h-16" alt="Agung Wangi Sentosa Logo" />
                    </a>
                    <div class="flex items-center space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{asset('img/general/default.jpg')}}" alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 text-base list-none bg-white rounded-lg divide-y divide-gray-100 shadow-sm" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900">Bonnie Green</span>
                                <span class="block text-sm text-gray-500 truncate">name@flowbite.com</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-tombol hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-tombol hover:text-white">Settings</a>
                                </li>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-tombol hover:text-white">Sign out</a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex justify-center items-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-user">
                            <ul class="flex flex-col p-4 mt-4 font-medium uppercase bg-gray-50 rounded-lg border border-gray-100 md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                                    <li>
                                        <a href="/" class="block px-3 py-2 text-white rounded-sm bg-tombol md:bg-transparent md:text-tombol md:p-0" aria-current="page">
                                            beranda
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-3 py-2 text-black rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0">
                                            tentang kami
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-3 py-2 text-black rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0">
                                            produk
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-3 py-2 text-black rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0">
                                            mitra
                                        </a>
                                    </li>
                            </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="py-10 pt-0 h-auto md:pt-10">
            <div class="container p-6 mx-auto lg:p-10">
                <div class="flex flex-col lg:flex-row">
                    <div class="flex flex-1 justify-center items-center self-center max-w-screen-xl">
                        <img src="{{asset('img/general/banner.png')}}" class="object-contain w-full h-full" alt="banner">
                    </div>
                    <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                        <div>
                            <hr class="my-5 w-full h-0.5 bg-black rounded-sm border-0 lg:w-48 md:my-8">
                            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner md:text-5xl lg:text-6xl lg:tracking-widest">
                                muntrue <br class="hidden md:block"> <span class="text-2xl font-medium tracking-tight md:text-3xl lg:text-4xl lg:tracking-widest">hokkaido sunset</span>
                            </h1>
                            <p class="mb-10 text-center text-abu lg:text-start">
                                Satu perjalanan ke senja Hokkaido. Biarkan aromanya <br class="hidden md:block"> mengiringi kisah keberanian dan ketangguhan Anda.
                            </p>
                            <a href="#" target="_blank" class="flex justify-center lg:justify-start">
                                <div class="px-20 py-5 text-lg font-normal tracking-widest text-white uppercase bg-tombol">
                                    selengkapnya
                                </div>
                            </a>
                            <hr class="my-5 w-full h-0.5 bg-black rounded-sm border-0 lg:w-48 md:my-10 lg:my-20">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 h-auto bg-[url('../../public/img/general/bg-about.png')] bg-cover bg-no-repeat bg-center lg:bg-right">
            <div class="container p-6 mx-auto lg:p-10">
                <div class="flex justify-center">
                    <div class="self-center lg:flex-1 item-center">
                        <h2 class="mb-10 text-2xl font-bold tracking-widest leading-normal text-center uppercase lg:text-start lg:tracking-widest md:tracking-widest lg:leading-normal md:leading-normal md:text-4xl lg:text-5xl font-banner">
                            temukan karakter <br class="hidden md:block"> anda dalam setiap <br class="hidden md:block"> semprotan
                        </h2>

                        <p class="mb-10 text-base tracking-wide leading-relaxed text-justify lg:text-start text-abu">
                            di setiap aroma tersembunyi kisah, dan <br class="hidden md:block"> muntrue menghadirkan koleksi parfum <br class="hidden md:block"> ekslusif yang dirancang untuk <br class="hidden md:block"> mencerminkan kepribadian, keinginan, dan <br class="hidden md:block"> perjalanan Anda.
                        </p>

                        <a href="#" target="_blank" class="flex justify-center lg:justify-start">
                            <div class="px-20 py-5 text-lg font-normal tracking-widest text-white uppercase bg-tombol">
                                selengkapnya
                            </div>
                        </a>
                    </div>
                    <div class="lg:flex-1">

                    </div>
                </div>
            </div>
        </section>

        <section class="relative h-auto">
            <div class="flex flex-col md:flex-row">
                <div class="flex-1">
                    <img src="{{asset('img/general/bg-product.png')}}" class="w-full h-full" alt="product">
                </div>
                <div class="flex-1 flex justify-center items-center bg-[#D6EBFF] py-10">
                    <div>
                        <h2 class="mb-5 text-2xl font-bold tracking-widest leading-normal text-center uppercase lg:text-start font-banner lg:text-5xl md:text-4xl lg:tracking-widest md:tracking-widest lg:leading-normal md:leading-normal">
                            muntrue <br class="hidden md:block"> fragrances
                        </h2>
                        <p class="mb-10 text-center lg:text-start text-abu">
                            Aroma yang lembut hingga maskulin yang <br class="hidden lg:block"> memikat, setiap varian membawa <br class="hidden lg:block"> pengalaman unik yang melekat dalam <br class="hidden lg:block"> ingatan.
                        </p>
                        <a href="#" target="_blank" class="flex justify-center lg:justify-start">
                            <div class="px-20 py-5 text-lg font-normal tracking-widest text-white uppercase bg-tombol">
                                selengkapnya
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute top-1/2 left-1/2 z-10 -translate-x-1/2 -translate-y-1/2">
                <img src="{{asset('img/general/parfume.png')}}" class="hidden lg:block lg:w-60 2xl:w-full" alt="parfume">
            </div>
        </section>

        <section class="py-10 h-auto">
            <div class="container p-6 mx-auto lg:p-10">
                <div>
                    <h3 class="text-2xl font-medium capitalize text-prodgrey">
                        just arrived
                    </h3>
                    <p class="capitalize text-abu">
                        recently arrived parfums
                    </p>
                </div>
                <div class="my-10">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-10 lg:grid-cols-3 xl:grid-cols-4">

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume-2.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        first kiss
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume-2.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        most wanted
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume-2.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        catwalk
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume-2.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        hokkaido sunset
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        mirror of pink
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        sandtown
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        one night in busan
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        unforgatable moment
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="#" class="flex justify-center">
                        <div class="flex justify-center self-center py-2 mt-20 w-56 rounded-tl-md rounded-tr-[17px] rounded-br-md rounded-bl-[17px] item-center bg-tombol">
                            <div class="text-lg font-normal text-white">
                                see all
                            </div>
                            <div class="flex items-center ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="12" viewBox="0 0 5 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.151785 1.21783C-0.0686916 0.915797 -0.0463501 0.453306 0.201687 0.18483C0.438939 -0.0719738 0.796751 -0.0582476 1.02037 0.207759L1.05001 0.245594L4.81308 5.4007C5.06231 5.74212 5.06231 6.25788 4.81308 6.5993L1.05001 11.7544C0.829529 12.0564 0.449723 12.0836 0.201687 11.8152C-0.0355659 11.5584 -0.0663223 11.1241 0.124403 10.8224L0.151785 10.7822L3.49677 6.19977C3.57985 6.08596 3.57985 5.91404 3.49677 5.80023L0.151785 1.21783Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="py-10 h-auto">
            <div class="container p-6 mx-auto lg:p-32 bg-[#C2DFFB] rounded-lg">
                <div>
                    <h3 class="text-2xl font-medium capitalize text-prodgrey">
                        best deal
                    </h3>
                    <p class="capitalize text-abu">
                        recently arrived parfums
                    </p>
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        BVLGARI rose goldea
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        BVLGARI rose goldea
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        BVLGARI rose goldea
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="#" class="flex justify-center">
                                <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        BVLGARI rose goldea
                                    </h5>
                                    <p class="font-normal text-abu">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </a>
                                <div class="flex justify-between items-center mt-12">
                                    <span class="text-3xl font-medium text-[#FF2600]">Rp. 500.000</span>
                                </div>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 63 11" fill="none">
                                            <path d="M5.72925 8.58491L8.24843 10.0565C8.70977 10.3262 9.27431 9.92756 9.15291 9.42333L8.48517 6.65596L10.713 4.7915C11.1197 4.45144 10.9012 3.8065 10.367 3.76546L7.43501 3.52507L6.28772 0.910137C6.08133 0.435228 5.37717 0.435228 5.17078 0.910137L4.02349 3.51921L1.09153 3.7596C0.557346 3.80064 0.338815 4.44558 0.745526 4.78564L2.97333 6.6501L2.3056 9.41747C2.18419 9.9217 2.74873 10.3204 3.21007 10.0507L5.72925 8.58491Z" fill="#F4C119"/>
                                            <path d="M18.5154 8.58491L21.0346 10.0565C21.4959 10.3262 22.0604 9.92756 21.939 9.42333L21.2713 6.65596L23.4991 4.7915C23.9058 4.45144 23.6873 3.8065 23.1531 3.76546L20.2211 3.52507L19.0739 0.910137C18.8675 0.435228 18.1633 0.435228 17.9569 0.910137L16.8096 3.51921L13.8777 3.7596C13.3435 3.80064 13.1249 4.44558 13.5317 4.78564L15.7595 6.6501L15.0917 9.41747C14.9703 9.9217 15.5349 10.3204 15.9962 10.0507L18.5154 8.58491Z" fill="#F4C119"/>
                                            <path d="M31.3013 8.58491L33.8205 10.0565C34.2818 10.3262 34.8463 9.92756 34.7249 9.42333L34.0572 6.65596L36.285 4.7915C36.6917 4.45144 36.4732 3.8065 35.939 3.76546L33.007 3.52507L31.8597 0.910137C31.6534 0.435228 30.9492 0.435228 30.7428 0.910137L29.5955 3.51921L26.6636 3.7596C26.1294 3.80064 25.9108 4.44558 26.3175 4.78564L28.5454 6.6501L27.8776 9.41747C27.7562 9.9217 28.3207 10.3204 28.7821 10.0507L31.3013 8.58491Z" fill="#F4C119"/>
                                            <path d="M44.0874 8.58491L46.6066 10.0565C47.0679 10.3262 47.6325 9.92756 47.5111 9.42333L46.8433 6.65596L49.0711 4.7915C49.4778 4.45144 49.2593 3.8065 48.7251 3.76546L45.7932 3.52507L44.6459 0.910137C44.4395 0.435228 43.7353 0.435228 43.5289 0.910137L42.3816 3.51921L39.4497 3.7596C38.9155 3.80064 38.697 4.44558 39.1037 4.78564L41.3315 6.6501L40.6638 9.41747C40.5423 9.9217 41.1069 10.3204 41.5682 10.0507L44.0874 8.58491Z" fill="#F4C119"/>
                                            <path d="M57.0751 8.2399L56.8739 8.1224L56.6726 8.23955L54.1534 9.70532L54.1527 9.70574C54.0685 9.75497 53.9803 9.74444 53.9133 9.69734C53.847 9.6508 53.8206 9.58452 53.8383 9.511L54.506 6.74382L54.5642 6.5028L54.3741 6.34368L52.1463 4.47922L52.1461 4.4791C52.0788 4.4228 52.0666 4.35324 52.0885 4.28838C52.1109 4.22214 52.1684 4.16552 52.2664 4.15799L52.2664 4.15799L52.2685 4.15782L55.2004 3.91744L55.4377 3.89798L55.5335 3.68005L56.6808 1.07097L56.6808 1.07098L56.6815 1.06939C56.7122 0.998842 56.7808 0.95352 56.8735 0.95352C56.9663 0.95352 57.0349 0.998842 57.0655 1.0694L57.0661 1.07067L58.2134 3.68561L58.3091 3.90383L58.5466 3.9233L61.4786 4.16369L61.4806 4.16385C61.5786 4.17138 61.6362 4.22801 61.6586 4.29424C61.6805 4.35911 61.6683 4.42867 61.601 4.48497L61.6008 4.48508L59.373 6.34954L59.1829 6.50866L59.241 6.74968L59.9087 9.51687C59.9264 9.59039 59.9001 9.65666 59.8338 9.7032C59.7668 9.7503 59.6786 9.76083 59.5944 9.7116L59.5943 9.71154L57.0751 8.2399Z" stroke="#F4C119" stroke-width="0.799129"/>
                                        </svg>
                                    </div>
                                    <span class="px-2.5 py-0.5 text-base font-semibold text-[#242424] ms-1">4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="flex justify-center">
                        <div class="flex justify-center self-center py-2 mt-20 w-56 rounded-tl-md rounded-tr-[17px] rounded-br-md rounded-bl-[17px] item-center bg-tombol">
                            <div class="text-lg font-normal text-white">
                                see all
                            </div>
                            <div class="flex items-center ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="12" viewBox="0 0 5 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.151785 1.21783C-0.0686916 0.915797 -0.0463501 0.453306 0.201687 0.18483C0.438939 -0.0719738 0.796751 -0.0582476 1.02037 0.207759L1.05001 0.245594L4.81308 5.4007C5.06231 5.74212 5.06231 6.25788 4.81308 6.5993L1.05001 11.7544C0.829529 12.0564 0.449723 12.0836 0.201687 11.8152C-0.0355659 11.5584 -0.0663223 11.1241 0.124403 10.8224L0.151785 10.7822L3.49677 6.19977C3.57985 6.08596 3.57985 5.91404 3.49677 5.80023L0.151785 1.21783Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <footer class="bg-tombol">
            <div class="p-4 py-6 mx-auto w-full max-w-screen-xl lg:py-8">
                <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex flex-col">
                        <img src="{{asset('img/general/logo-putih.png')}}" class="object-contain mb-5 h-32 md:h-20" alt="agung wangi sentosa Logo" />
                        <div class="mb-5 font-normal text-white">
                            0812 1459 9739
                        </div>
                        <div class="text-white">
                            E-mail: info@laparfums.pl
                        </div>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">
                    <div class="col-span-2">
                        <ul class="font-medium text-[#B5B5B5] capitalize">
                            <li class="mb-4">
                                <a href="/" class="hover:underline">tentang kami</a>
                            </li>
                            <li class="mb-4">
                                <a href="/" class="hover:underline">produk</a>
                            </li>
                            <li class="mb-4">
                                <a href="/" class="hover:underline">tentang kami</a>
                            </li>
                            <li class="mb-4">
                                <a href="/" class="hover:underline">blog dan artikel</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-2">
                        <h2 class="mb-6 text-sm font-normal text-white capitalize">terhubung dengan kami</h2>
                        <div class="flex gap-4 mt-4 sm:justify-center sm:mt-0">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="46" viewBox="0 0 45 46" fill="none">
                                    <rect x="0.45" y="1.25005" width="44.1" height="44.1" stroke="white" stroke-width="0.9"/>
                                    <path d="M32.8505 18.3609C32.7282 17.9246 32.49 17.5296 32.1611 17.2179C31.823 16.8966 31.4085 16.6667 30.9569 16.5501C29.2667 16.1046 22.4951 16.1046 22.4951 16.1046C19.6721 16.0724 16.8498 16.2137 14.0441 16.5276C13.5925 16.6529 13.1788 16.8878 12.8399 17.2116C12.5069 17.532 12.2657 17.9271 12.1397 18.36C11.837 19.9905 11.69 21.6462 11.7005 23.3046C11.6897 24.9615 11.8364 26.6166 12.1397 28.2492C12.263 28.6803 12.5033 29.0736 12.8372 29.3913C13.1711 29.709 13.5869 29.9385 14.0441 30.06C15.7568 30.5046 22.4951 30.5046 22.4951 30.5046C25.3217 30.5367 28.1476 30.3955 30.9569 30.0816C31.4085 29.9649 31.823 29.7351 32.1611 29.4138C32.4941 29.0961 32.7308 28.701 32.8496 28.2708C33.1602 26.6408 33.3112 24.9845 33.3005 23.3253C33.3239 21.659 33.173 19.9949 32.8505 18.36V18.3609ZM20.3423 26.3862V20.2239L25.9763 23.3055L20.3423 26.3862Z" fill="white"/>
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                                    <rect x="0.649951" y="1.25005" width="44.1" height="44.1" stroke="white" stroke-width="0.9"/>
                                    <path d="M22.697 19.6985C20.7139 19.6985 19.0955 21.3169 19.0955 23.3C19.0955 25.2831 20.7139 26.9015 22.697 26.9015C24.6801 26.9015 26.2985 25.2831 26.2985 23.3C26.2985 21.3169 24.6801 19.6985 22.697 19.6985ZM33.4987 23.3C33.4987 21.8086 33.5122 20.3307 33.4285 18.842C33.3447 17.1128 32.9502 15.5782 31.6858 14.3137C30.4187 13.0466 28.8868 12.6548 27.1576 12.5711C25.6663 12.4873 24.1884 12.5008 22.6997 12.5008C21.2083 12.5008 19.7305 12.4873 18.2418 12.5711C16.5126 12.6548 14.978 13.0493 13.7136 14.3137C12.4465 15.5809 12.0547 17.1128 11.971 18.842C11.8872 20.3334 11.9007 21.8113 11.9007 23.3C11.9007 24.7887 11.8872 26.2693 11.971 27.758C12.0547 29.4872 12.4492 31.0218 13.7136 32.2863C14.9807 33.5534 16.5126 33.9452 18.2418 34.0289C19.7332 34.1127 21.211 34.0992 22.6997 34.0992C24.1911 34.0992 25.669 34.1127 27.1576 34.0289C28.8868 33.9452 30.4214 33.5507 31.6858 32.2863C32.9529 31.0191 33.3447 29.4872 33.4285 27.758C33.5149 26.2693 33.4987 24.7914 33.4987 23.3ZM22.697 28.8414C19.6305 28.8414 17.1557 26.3666 17.1557 23.3C17.1557 20.2334 19.6305 17.7586 22.697 17.7586C25.7635 17.7586 28.2383 20.2334 28.2383 23.3C28.2383 26.3666 25.7635 28.8414 22.697 28.8414ZM28.4653 18.8258C27.7493 18.8258 27.1711 18.2476 27.1711 17.5316C27.1711 16.8156 27.7493 16.2374 28.4653 16.2374C29.1813 16.2374 29.7594 16.8156 29.7594 17.5316C29.7597 17.7016 29.7263 17.87 29.6614 18.0271C29.5964 18.1842 29.5011 18.327 29.3809 18.4472C29.2607 18.5674 29.1179 18.6627 28.9608 18.7277C28.8037 18.7927 28.6353 18.826 28.4653 18.8258Z" fill="white"/>
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                                    <rect x="0.849902" y="1.25005" width="44.1" height="44.1" stroke="white" stroke-width="0.9"/>
                                    <path d="M32.4999 12.5H13.2999C12.9816 12.5 12.6764 12.6264 12.4513 12.8515C12.2263 13.0765 12.0999 13.3817 12.0999 13.7V32.9C12.0999 33.2183 12.2263 33.5235 12.4513 33.7485C12.6764 33.9736 12.9816 34.1 13.2999 34.1H23.6379V25.748H20.8323V22.478H23.6379V20.078C23.6379 17.288 25.3419 15.7676 27.8379 15.7676C28.6767 15.7652 29.5167 15.8084 30.3519 15.896V18.8H28.6299C27.2763 18.8 27.0123 19.4456 27.0123 20.39V22.472H30.2487L29.8287 25.742H27.0111V34.1H32.4999C32.8181 34.1 33.1233 33.9736 33.3484 33.7485C33.5734 33.5235 33.6999 33.2183 33.6999 32.9V13.7C33.6999 13.3817 33.5734 13.0765 33.3484 12.8515C33.1233 12.6264 32.8181 12.5 32.4999 12.5Z" fill="white"/>
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                                    <rect x="1.0501" y="1.25005" width="44.1" height="44.1" stroke="white" stroke-width="0.9"/>
                                    <path d="M23.1 12.5C17.1357 12.5 12.3 17.3357 12.3 23.3C12.3 29.2643 17.1357 34.1 23.1 34.1C29.0644 34.1 33.9 29.2643 33.9 23.3C33.9 17.3357 29.0644 12.5 23.1 12.5ZM28.4046 19.8989L26.6316 28.2509C26.5011 28.8431 26.1483 28.9871 25.656 28.7081L22.956 26.7191L21.6546 27.9737C21.5909 28.0562 21.5091 28.1231 21.4155 28.1691C21.3219 28.2151 21.219 28.2391 21.1146 28.2392H21.1101L21.3018 25.4906L26.3059 20.9708C26.5218 20.7791 26.2572 20.6702 25.9701 20.8619L19.788 24.7553L17.124 23.9237C16.548 23.741 16.5318 23.3477 17.2455 23.0651L27.655 19.0529C28.1392 18.8765 28.5603 19.1681 28.4037 19.8998L28.4046 19.8989Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-[#B5B5B5] sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-[#B5B5B5] sm:text-center">
                    Образец публичного договора оферты о предоставлении услуг
                </span>
                <div class="flex mt-4 text-white sm:justify-center sm:mt-0">
                    © Интернет-магазин парфюмерии «PARFUMS», 2008—2021
                </div>
            </div>
            </div>
        </footer>
    </body>
</html>
