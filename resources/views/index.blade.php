@extends('layouts.main')
@section('konten')
    <section class="py-10 pt-0 h-auto md:pt-10">
        <div class="container p-6 mx-auto lg:p-10">
            <div class="flex flex-col lg:flex-row">
                <div class="flex flex-1 justify-center items-center self-center max-w-screen-xl">
                    <img src="{{ asset('img/general/banner.png') }}" class="object-contain w-full h-full" alt="banner">
                </div>
                <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                    <div>
                        <hr class="my-5 w-full h-0.5 bg-black rounded-sm border-0 lg:w-48 md:my-8">
                        <h1
                            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner md:text-5xl lg:text-6xl lg:tracking-widest">
                            muntru <br> <span
                                class="text-2xl font-medium tracking-tight md:text-3xl lg:text-4xl lg:tracking-widest">hokkaido
                                sunset</span>
                        </h1>
                        <p class="mb-10 text-center text-abu lg:text-start">
                            Satu perjalanan ke senja Hokkaido. Biarkan aromanya <br class="hidden md:block"> mengiringi
                            kisah keberanian dan ketangguhan Anda.
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6281214599739" target="_blank"
                            class="flex justify-center lg:justify-start">
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

    <section
        class="py-10 h-auto bg-[url('../../public/img/general/bg-about.png')] bg-cover bg-no-repeat bg-center lg:bg-right">
        <div class="container p-6 mx-auto lg:p-10">
            <div class="flex justify-center">
                <div class="self-center lg:flex-1 item-center">
                    <h2
                        class="mb-10 text-2xl font-bold tracking-widest leading-normal text-center uppercase lg:text-start lg:tracking-widest md:tracking-widest lg:leading-normal md:leading-normal md:text-4xl lg:text-5xl font-banner">
                        temukan karakter <br class="hidden md:block"> anda dalam setiap <br class="hidden md:block">
                        semprotan
                    </h2>

                    <p class="mb-10 text-base tracking-wide leading-relaxed text-justify lg:text-start text-abu">
                        di setiap aroma tersembunyi kisah, dan <br class="hidden md:block"> muntru menghadirkan koleksi
                        parfum <br class="hidden md:block"> ekslusif yang dirancang untuk <br class="hidden md:block">
                        mencerminkan kepribadian, keinginan, dan <br class="hidden md:block"> perjalanan Anda.
                    </p>

                    <a href="https://api.whatsapp.com/send?phone=6281214599739 " target="_blank"
                        class="flex justify-center lg:justify-start">
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
                <img src="{{ asset('img/general/bg-product.png') }}" class="w-full h-full" alt="product">
            </div>
            <div class="flex-1 flex justify-center items-center bg-[#D6EBFF] py-10">
                <div>
                    <h2
                        class="mb-5 text-2xl font-bold tracking-widest leading-normal text-center uppercase lg:text-start font-banner lg:text-5xl md:text-4xl lg:tracking-widest md:tracking-widest lg:leading-normal md:leading-normal">
                        muntru <br class="hidden md:block"> fragrances
                    </h2>
                    <p class="mb-10 text-center lg:text-start text-abu">
                        Aroma yang lembut hingga maskulin yang <br class="hidden lg:block"> memikat, setiap varian membawa
                        <br class="hidden lg:block"> pengalaman unik yang melekat dalam <br class="hidden lg:block">
                        ingatan.
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=6281214599739" target="_blank"
                        class="flex justify-center lg:justify-start">
                        <div class="px-20 py-5 text-lg font-normal tracking-widest text-white uppercase bg-tombol">
                            selengkapnya
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute top-1/2 left-1/2 z-10 -translate-x-1/2 -translate-y-1/2">
            <img src="{{ asset('img/general/parfume.png') }}" class="hidden lg:block lg:w-60 2xl:w-full" alt="parfume">
        </div>
    </section>

    <section class="py-10 h-auto">
        <div class="container p-6 mx-auto lg:p-10">
            <div class="lg:py-20">
                <h3 class="text-2xl font-bold text-center uppercase text-titleprod lg:text-5xl font-banner">
                    muntru variance
                </h3>
            </div>
            <div class="my-10">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-10 lg:grid-cols-3 xl:grid-cols-4">

                    @forelse ($products as $item)
                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts/{{ $item->slug }}" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ $item->getFirstMediaUrl('products') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts/{{ $item->slug }}">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        {{ $item->title }}
                                    </h5>
                                    <div class="text-sm font-normal line-clamp-4 text-abu">
                                        {!! $item->excerpt !!}
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/first-kiss.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        first kiss
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Aroma romantis dan manis yang membangkitkan sensasi getaran pertama cinta. Lembut,
                                        menggoda, dan tak terlupakan.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/most-wanted.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        most wanted
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Wewangian yang bold dan karismatik, mencerminkan keberanian pria yang selalu jadi
                                        pusat perhatian.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/catwalk.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        catwalk
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Aura percaya diri dan glamor yang terinspirasi dari dunia mode. Sensasi elegan dalam
                                        setiap langkah Anda.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/hokkaido.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        hokkaido sunset
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Segar dan maskulin seperti angin senja di utara Jepang. Perpaduan sempurna antara
                                        kesejukan dan kehangatan.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/mirror.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        mirror of pink
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Feminin, ceria, dan penuh pesona. Wewangian yang memantulkan keindahan alami dan
                                        daya tarik yang elegan.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/sandtown.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        sandtown
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Aroma eksotis yang terinspirasi dari petualangan di gurun pasir. Hangat, misterius,
                                        dan penuh daya tarik.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/busan.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        one night in busan
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Kombinasi aroma modern dan urban yang memancarkan keberanian dalam gemerlap malam
                                        kota.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                            <a href="/detailproducts" class="flex justify-center">
                                <img class="mb-5 rounded-t-lg" src="{{ asset('img/product/moment.png') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="/detailproducts">
                                    <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                        unforgatable moment
                                    </h5>
                                    <p class="text-sm font-normal text-abu">
                                        Segar dan maskulin seperti angin senja di utara Jepang. Perpaduan sempurna antara
                                        kesejukan dan kehangatan.
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endforelse

                </div>

                <a href="/products" class="flex justify-center">
                    <div
                        class="flex justify-center self-center py-2 mt-20 w-56 rounded-tl-md rounded-tr-[17px] rounded-br-md rounded-bl-[17px] item-center bg-tombol">
                        <div class="text-lg font-normal text-white">
                            see all
                        </div>
                        <div class="flex items-center ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="12" viewBox="0 0 5 12"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.151785 1.21783C-0.0686916 0.915797 -0.0463501 0.453306 0.201687 0.18483C0.438939 -0.0719738 0.796751 -0.0582476 1.02037 0.207759L1.05001 0.245594L4.81308 5.4007C5.06231 5.74212 5.06231 6.25788 4.81308 6.5993L1.05001 11.7544C0.829529 12.0564 0.449723 12.0836 0.201687 11.8152C-0.0355659 11.5584 -0.0663223 11.1241 0.124403 10.8224L0.151785 10.7822L3.49677 6.19977C3.57985 6.08596 3.57985 5.91404 3.49677 5.80023L0.151785 1.21783Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- <section class="py-10 h-auto">
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

                @forelse ($bestdeal as $item)
                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts/{{$item->slug}}" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{$item->getFirstMediaUrl('products')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts/{{$item->slug}}">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                {{$item->title}}
                            </h5>
                            <div class="text-sm font-normal line-clamp-4 text-abu">
                                {!! $item->excerpt !!}
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/product/first-kiss.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                first kiss
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Aroma romantis dan manis yang membangkitkan sensasi getaran pertama cinta. Lembut, menggoda, dan tak terlupakan.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/product/most-wanted.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                most wanted
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Wewangian yang bold dan karismatik, mencerminkan keberanian pria yang selalu jadi pusat perhatian.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/product/catwalk.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                catwalk
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Aura percaya diri dan glamor yang terinspirasi dari dunia mode. Sensasi elegan dalam setiap langkah Anda.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{asset('img/product/hokkaido.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                hokkaido sunset
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Segar dan maskulin seperti angin senja di utara Jepang. Perpaduan sempurna antara kesejukan dan kehangatan.
                            </p>
                        </a>
                    </div>
                </div>
                @endforelse
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
</section> --}}

    <section class="py-10 h-auto">
        <div class="container p-6 mx-auto lg:p-0 lg:px-10">
            <div class="flex flex-col-reverse lg:flex-row">
                <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                    <div>
                        <h1
                            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner md:text-5xl lg:text-6xl lg:leading-tight lg:tracking-wide">
                            BERANGKAT UMRAH BERSAMA MUNTRU!
                        </h1>
                        <p class="mb-10 text-center text-abu lg:text-start">
                            Bergabung menjadi Mintra Affiliate Muntru dan dapatkan <br class="hidden md:block"> berbagai
                            reward dan hadiah utama Umrah!
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6281214599739" target="_blank"
                            class="flex justify-center lg:justify-start">
                            <div class="px-20 py-5 text-lg font-normal tracking-widest text-white uppercase bg-tombol">
                                selengkapnya
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex flex-1 justify-center items-center self-center mb-5 max-w-screen-xl lg:mb-0">
                    <img src="{{ asset('img/general/mitra-beranda.png') }}" class="object-contain w-full h-full"
                        alt="mitra beranda">
                </div>
            </div>
        </div>
    </section>
@endsection
