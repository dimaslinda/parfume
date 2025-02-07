@extends('layouts.main')
@section('konten')
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
                    <a href="https://api.whatsapp.com/send?phone=6281214599739" target="_blank" class="flex justify-center lg:justify-start">
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

                <a href="https://api.whatsapp.com/send?phone=6281214599739 " target="_blank" class="flex justify-center lg:justify-start">
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
                <a href="https://api.whatsapp.com/send?phone=6281214599739" target="_blank" class="flex justify-center lg:justify-start">
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/first-kiss.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                first kiss
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/most-wanted.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                most wanted
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/catwalk.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                catwalk
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/hokkaido.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                hokkaido sunset
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/mirror.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                mirror of pink
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/sandtown.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                sandtown
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/busan.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                one night in busan
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/moment.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                unforgatable moment
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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

            <a href="/products" class="flex justify-center">
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                BVLGARI rose goldea
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                BVLGARI rose goldea
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                BVLGARI rose goldea
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/general/parfume.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="text-xl font-semibold tracking-tight capitalize text-titleprod">
                                BVLGARI rose goldea
                            </h5>
                            <p class="font-normal text-abu">
                                {{-- Lorem ipsum dolor sit amet --}}
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
            <a href="/products" class="flex justify-center">
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
@endsection
