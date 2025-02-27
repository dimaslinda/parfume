@extends('layouts.main')
@section('konten')
<section class="py-10 pt-0 h-auto md:pt-10 md:pb-0">
    <div class="container p-6 mx-auto lg:p-10 lg:pb-0">
        <div class="flex flex-col-reverse lg:flex-row">

            <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                <div>
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center uppercase text-tombol lg:text-start font-banner md:text-5xl lg:text-6xl 2xl:text-7xl lg:tracking-wide">
                        muntrue <br> affiliate
                    </h1>
                    <h3 class="my-5 text-3xl font-semibold text-center text-black uppercase lg:text-start font-banner">
                        Jual parfum bisa berangkat umrah!
                    </h3>
                    <p class="mb-10 text-center text-abu lg:text-start">
                        Bergabung menjadi Mintra Affiliate Muntru dan dapatkan <br class="hidden md:block"> berbagai reward dan hadiah utama Umrah!
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=6281214599739" target="_blank" class="flex justify-center text-center lg:justify-start">
                        <div class="px-20 py-5 text-lg font-normal tracking-widest text-white uppercase bg-tombol">
                            bergabung sekarang!
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-1 justify-center items-center self-center mb-10 max-w-screen-xl lg:mb-0">
                <img src="{{asset('img/general/mitra-banner.png')}}" class="object-contain w-full h-full" alt="banner">
            </div>
        </div>
    </div>
</section>
<section class="py-10 h-auto">
    <div class="container p-6 mx-auto lg:p-10">
        <div class="lg:py-20">
            <h3 class="text-2xl font-bold text-center uppercase text-titleprod lg:text-5xl font-banner">
                affiliate reward
            </h3>
            <div class="my-10 text-xl leading-relaxed text-center text-abu">
                Kumpulkan Poin dan naikkan tingkatanmu untuk <br> mendapatkan reward yang semakin besar!
            </div>
        </div>

        <div class="grid grid-cols-1 place-items-center md:grid-cols-2">
            <div>
                <img src="{{asset('img/general/bronze.png')}}" class="object-cover w-full h-full" alt="tier">
            </div>
            <div>
                <img src="{{asset('img/general/silver.png')}}" class="object-cover w-full h-full" alt="tier">
            </div>
            <div>
                <img src="{{asset('img/general/gold.png')}}" class="object-cover w-full h-full" alt="tier">
            </div>
            <div>
                <img src="{{asset('img/general/platinum.png')}}" class="object-cover w-full h-full" alt="tier">
            </div>
        </div>
    </div>
</section>
@endsection
