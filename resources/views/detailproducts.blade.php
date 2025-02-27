@extends('layouts.main')
@section('konten')
<section class="py-10 pt-0 h-auto md:pt-10">
    <div class="container p-6 mx-auto lg:p-10">
        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-1 justify-center items-center self-center max-w-screen-xl">
                <img src="{{$detailproducts->getFirstMediaUrl('productimages')}}" class="object-contain w-full h-full" alt="banner">
            </div>
            <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                <div class="flex flex-col justify-center px-0 py-10 lg:px-20">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner md:text-5xl lg:text-6xl lg:tracking-widest">
                        muntrue <br> <span class="text-2xl font-medium tracking-tight md:text-3xl lg:text-4xl lg:tracking-widest">{{ $detailproducts->title }}</span>
                    </h1>
                    <div class="mb-10 text-justify text-abu">
                        {!! $detailproducts->description !!}
                    </div>

                    <div class="flex flex-wrap gap-2 justify-center mb-10 lg:justify-start">
                        @forelse ($detailproducts->tags as $item)
                        <div class="px-5 py-2 text-sm font-normal tracking-widest text-center uppercase rounded-full border text-abu border-abu">
                            {{ $item->name ?? '' }}
                        </div>
                        @empty
                        <div class="px-5 py-2 mb-10 text-sm font-normal tracking-widest text-center uppercase rounded-full border text-abu border-abu">
                            woody
                        </div>
                        <div class="px-5 py-2 mb-10 text-sm font-normal tracking-widest text-center uppercase rounded-full border text-abu border-abu">
                            woody
                        </div>
                        <div class="px-5 py-2 mb-10 text-sm font-normal tracking-widest text-center uppercase rounded-full border text-abu border-abu">
                            woody
                        </div>
                        <div class="px-5 py-2 mb-10 text-sm font-normal tracking-widest text-center uppercase rounded-full border text-abu border-abu">
                            woody
                        </div>
                        @endforelse

                    </div>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=6281214599739" target="_blank" class="flex justify-center lg:justify-start">
                            <div class="px-10 py-5 text-lg font-normal tracking-widest text-white uppercase md:px-20 bg-tombol">
                                pesan sekarang!
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-10 h-auto">
    <div class="container p-6 mx-auto lg:p-10">
            <div class="my-10">
                <div class="mb-10 text-center border-black md:border-b">
                    <div class="flex flex-wrap justify-center -mb-px text-sm font-normal text-center transition-all duration-300 ease-in-out md:text-2xl font-banner" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-black font-bold hover:font-bold border-[#6298CE] border-b-4 transition-all duration-300 ease-in-out" data-tabs-inactive-classes="text-black hover:font-bold hover:text-black hover:border-[#6298CE] transition-all duration-300 ease-in-out" role="tablist">
                        <div class="me-2" role="presentation">
                            <button class="inline-block p-4 uppercase rounded-t-lg border-b-2" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                top notes
                            </button>
                        </div>
                        <div class="me-2" role="presentation">
                            <button class="inline-block p-4 uppercase rounded-t-lg border-b-2 hover:text-black hover:font-bold hover:border-[#6298CE]" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                                middle notes
                            </button>
                        </div>
                        <div class="me-2" role="presentation">
                            <button class="inline-block p-4 uppercase rounded-t-lg border-b-2 hover:text-black hover:font-bold hover:border-[#6298CE]" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                base notes
                            </button>
                        </div>
                    </div>
                </div>
                <div id="default-styled-tab-content">

                    <div class="hidden" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="grid grid-cols-1 gap-4 place-items-center md:grid-cols-2 lg:gap-10 lg:grid-cols-3">

                            @forelse ($detailproducts->media->where('collection_name', 'topnotes') as $item)
                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{$item->getFullUrl()}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        {{ $item->name }}
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ yuzu.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        yuzu
                                    </div>
                                </div>
                            </div>

                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ mint.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        mint
                                    </div>
                                </div>
                            </div>

                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ juniper berry.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        juniper berry
                                    </div>
                                </div>
                            </div>
                            @endforelse

                        </div>
                    </div>

                    <div class="hidden" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="grid grid-cols-1 gap-4 place-items-center md:grid-cols-2 lg:gap-10 lg:grid-cols-3">

                            @forelse ($detailproducts->media->where('collection_name', 'middlenotes') as $item)
                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{$item->getFullUrl()}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        {{ $item->name }}
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ yuzu.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        yuzu
                                    </div>
                                </div>
                            </div>

                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ mint.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        mint
                                    </div>
                                </div>
                            </div>

                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ juniper berry.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        juniper berry
                                    </div>
                                </div>
                            </div>
                            @endforelse

                        </div>
                    </div>

                    <div class="hidden" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="grid grid-cols-1 gap-4 place-items-center md:grid-cols-2 lg:gap-10 lg:grid-cols-3">

                            @forelse ($detailproducts->media->where('collection_name', 'basenotes') as $item)
                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{$item->getFullUrl()}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        {{ $item->name }}
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ yuzu.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        yuzu
                                    </div>
                                </div>
                            </div>

                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ mint.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        mint
                                    </div>
                                </div>
                            </div>

                            <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                                <div class="flex relative justify-center">
                                    <img class="object-cover relative w-full h-full" src="{{asset('img/detail/hokkaido/ juniper berry.png')}}" alt="product image" />
                                    <div class="absolute top-1/2 left-1/2 text-4xl font-bold tracking-widest text-center text-white uppercase -translate-x-1/2 -translate-y-1/2 font-banner">
                                        juniper berry
                                    </div>
                                </div>
                            </div>
                            @endforelse

                        </div>
                    </div>

                </div>
            </div>
    </div>

    <div class="container p-6 mx-auto lg:p-10">
        <div class="lg:py-20">
            <h3 class="text-2xl font-bold text-center uppercase text-titleprod lg:text-5xl font-banner">
                personality
            </h3>
        </div>
        <div class="my-10">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-10 lg:grid-cols-3 xl:grid-cols-4">

                @forelse ($detailproducts->media->where('collection_name', 'personality') as $item)
                <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <div class="flex relative justify-center">
                        <img class="object-cover relative w-full h-full" src="{{$item->getFullUrl()}}" alt="product image" />
                        <div class="absolute bottom-5 left-5 text-2xl font-bold tracking-widest text-center text-white uppercase font-banner">
                            {{ $item->name }}
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <div class="flex relative justify-center">
                        <img class="object-cover relative w-full h-full" src="{{asset('img/personality/hokkaido/charismatic.png')}}" alt="product image" />
                        <div class="absolute bottom-5 left-5 text-2xl font-bold tracking-widest text-center text-white uppercase font-banner">
                            charismatic
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <div class="flex relative justify-center">
                        <img class="object-cover relative w-full h-full" src="{{asset('img/personality/hokkaido/explorer.png')}}" alt="product image" />
                        <div class="absolute bottom-5 left-5 text-2xl font-bold tracking-widest text-center text-white uppercase font-banner">
                            explorer
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <div class="flex relative justify-center">
                        <img class="object-cover relative w-full h-full" src="{{asset('img/personality/hokkaido/mysterious.png')}}" alt="product image" />
                        <div class="absolute bottom-5 left-5 text-2xl font-bold tracking-widest text-center text-white uppercase font-banner">
                            mysterious
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-sm transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <div class="flex relative justify-center">
                        <img class="object-cover relative w-full h-full" src="{{asset('img/personality/hokkaido/classic.png')}}" alt="product image" />
                        <div class="absolute bottom-5 left-5 text-2xl font-bold tracking-widest text-center text-white uppercase font-banner">
                            classic
                        </div>
                    </div>
                </div>
                @endforelse

            </div>
        </div>
    </div>
</section>

<section class="py-10 h-auto">
    <div class="container p-6 mx-auto rounded-lg lg:p-32">
        <div>
            <h3 class="text-2xl font-medium capitalize text-prodgrey">
                related perfume
            </h3>
            <p class="capitalize text-abu">
                Rekomendasi parfum yang cocok untuk anda
            </p>
        </div>
        <div class="mt-10">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">

                @forelse ($kategoriproducts as $item)
                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts/{{ $item->slug }}" class="flex justify-center">
                        <img class="p-8 rounded-t-lg" src="{{$item->getFirstMediaUrl('products')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts/{{ $item->slug }}">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                {{ $item->title }}
                            </h5>
                            <div class="text-sm font-normal text-abu">
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
                @endforelse

            </div>
        </div>
    </div>
</section>
@endsection
