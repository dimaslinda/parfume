@extends('layouts.main')
@section('konten')
<section class="py-10 h-auto">
    <div class="container p-6 mx-auto lg:p-10">
        <div class="my-10">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-10 lg:grid-cols-3 xl:grid-cols-4">

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/first-kiss.png')}}" alt="product image" />
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
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/most-wanted.png')}}" alt="product image" />
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
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/catwalk.png')}}" alt="product image" />
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
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/hokkaido.png')}}" alt="product image" />
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

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/mirror.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                mirror of pink
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Feminin, ceria, dan penuh pesona. Wewangian yang memantulkan keindahan alami dan daya tarik yang elegan.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/sandtown.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                sandtown
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Aroma eksotis yang terinspirasi dari petualangan di gurun pasir. Hangat, misterius, dan penuh daya tarik.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/busan.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                one night in busan
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Kombinasi aroma modern dan urban yang memancarkan keberanian dalam gemerlap malam kota.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105">
                    <a href="/detailproducts" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{asset('img/product/moment.png')}}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="/detailproducts">
                            <h5 class="mb-5 text-xl font-semibold tracking-tight capitalize text-titleprod">
                                unforgatable moment
                            </h5>
                            <p class="text-sm font-normal text-abu">
                                Segar dan maskulin seperti angin senja di utara Jepang. Perpaduan sempurna antara kesejukan dan kehangatan.
                            </p>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
@endsection
