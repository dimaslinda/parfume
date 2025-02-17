@extends('layouts.main')
@section('konten')
<section class="py-10 pt-0 h-auto md:pt-10">
    <div class="container p-6 mx-auto lg:p-10">
        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-1 justify-center items-center self-center max-w-screen-xl">
                <img src="{{$detailproducts->getFirstMediaUrl('products')}}" class="object-contain w-full h-full" alt="banner">
            </div>
            <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                <div class="flex flex-col justify-center px-0 py-10 lg:px-20">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner md:text-5xl lg:text-6xl lg:tracking-widest">
                        muntrue <br> <span class="text-2xl font-medium tracking-tight md:text-3xl lg:text-4xl lg:tracking-widest">{{ $detailproducts->title }}</span>
                    </h1>
                    <div class="mb-10 text-justify text-abu">
                        {!! $detailproducts->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-10 h-auto bg-[url('../../public/img/general/bg-detail.png')] bg-top bg-cover bg-no-repeat">
    <div class="container p-6 mx-auto md:mt-72 2xl:mt-96">
        <h4 class="mb-10 text-4xl font-bold text-center uppercase font-banner md:text-start">
            karakteristik aroma
        </h4>
        <div class="text-abu">
            {!! str($detailproducts->karakteristik)->sanitizeHtml() !!}
        </div>
        {{-- <p class="mb-5 text-base text-abu">
            Aroma Hokkaido Sunset adalah kombinasi dari kesegaran, ketenangan, dan kehangatan  alami, seolah membawa Anda ke dalam perjalanan spiritual di Jepang saat matahari terbenam.
        </p>

        <h5 class="mb-2 text-base font-bold text-abu">
            Top Notes (Aroma Awal) Fresh & Invigorating
        </h5>
        <p class="mb-2 text-base text-abu">
            Saat pertama kali disemprotkan, Hokkaido Sunset menghadirkan aroma segar yang  mengingatkan pada udara dingin di pegunungan Jepang saat senja.
        </p>
        <ul class="mb-10 text-base list-disc list-inside text-abu">
            <li>
                Yuzu – Citrus khas Jepang yang segar, memberi energi dan kesan eksotis.
            </li>
            <li>
                Mint – Sensasi dingin yang menyegarkan dan membangkitkan semangat.
            </li>
            <li>
                Juniper Berry  – Aroma segar dengan sentuhan herbal yang maskulin.
            </li>
        </ul>

        <h5 class="mb-2 text-base font-bold text-abu">
            Middle Notes (Aroma Tengah) – Warm & Earthy
        </h5>
        <p class="mb-2 text-base text-abu">
            Setelah beberapa menit, aroma utama mulai muncul dengan perpaduan hangat dan alami yang  menciptakan kesan menenangkan dan elegan.
        </p>
        <ul class="mb-10 text-base list-disc list-inside text-abu">
            <li>
                Hinoki Wood – Aroma kayu khas Jepang yang memberikan nuansa relaksasi dan ketenangan
            </li>
            <li>
                Lavender – Sentuhan floral yang lembut, memperkuat efek menenangkan.
            </li>
            <li>
                Nutmeg – Rempah hangat yang memberikan karakter maskulin yang unik
            </li>
        </ul>

        <h5 class="mb-2 text-base font-bold text-abu">
            Base Notes (Aroma Akhir) – Deep & Sensual
        </h5>
        <p class="mb-2 text-base text-abu">
            Ketika parfum mulai menyatu dengan kulit, aroma dasar menciptakan kesan misterius, tahan  lama, dan memikat.
        </p>
        <ul class="mb-10 text-base list-disc list-inside text-abu">
            <li>
                Sandalwood – Aroma kayu yang creamy dan lembut, menghadirkan ketenangan.
            </li>
            <li>
                Amber – Hangat dan sedikit manis, memberi kesan mewah dan tahan lama.
            </li>
            <li>
                Musk – Aroma lembut yang memberikan daya tarik sensual.
            </li>
        </ul> --}}
    </div>
</section>
@endsection
