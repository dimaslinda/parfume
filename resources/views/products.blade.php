@extends('layouts.main')
@section('konten')
<section class="min-h-screen md:py-10">
    <div class="container p-6 mx-auto lg:p-10">
        <div class="my-10">
            <div class="container relative z-10 p-6 mx-auto">
                <div class="relative font-bold text-center text-white uppercase">
                    <div id="myBtnContainer" class="container hidden mx-auto md:block">
                        <div class="flex flex-wrap gap-5 justify-center">
                        <button class="px-10 py-3 text-sm uppercase rounded-full border-2 btn active hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('all')"> semua produk </button>
                        @forelse ($tags as $item)
                        <button class="px-10 py-3 text-sm uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('{{$item->name}}')"> {{$item->name}} </button>
                        @empty
                        <button class="px-10 py-3 text-sm uppercase rounded-full border-2 btn active hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('all')"> semua produk </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('FLORAL')"> FLORAL </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('FRUITY')"> FRUITY </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('CITRUS')"> CITRUS </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('WOODY')"> WOODY </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('TROPICAL')"> TROPICAL </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('SWEET')"> SWEET </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('VANILLA')"> VANILLA </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('MUSK')"> MUSK </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('EARTHY')"> EARTHY </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('AMBER')"> AMBER </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('AQUATIC')"> AQUATIC </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('AROMATIC')"> AROMATIC </button>
                        <button class="px-10 py-3 text-sm md:text-base uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('Powdery')"> Powdery </button>
                        @endforelse
                        </div>
                    </div>
                    <div class="block md:hidden">


                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white rounded-lg bg-tombol hover:bg-tombol focus:ring-4 focus:outline-none focus:ring-tombol" type="button">Filter <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>

                            <!-- Dropdown menu -->
                            <div id="dropdown" class="hidden z-10 w-64 bg-white rounded-lg divide-y divide-gray-100 shadow-sm">
                                <div id="myBtnContainer" class="container mx-auto">
                                    <div class="flex flex-wrap justify-center">
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('all')"> semua produk </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('FLORAL')"> FLORAL </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('FRUITY')"> FRUITY </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('CITRUS')"> CITRUS </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('WOODY')"> WOODY </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('TROPICAL')"> TROPICAL </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('SWEET')"> SWEET </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('VANILLA')"> VANILLA </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('MUSK')"> MUSK </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('EARTHY')"> EARTHY </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('AMBER')"> AMBER </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('AQUATIC')"> AQUATIC </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('AROMATIC')"> AROMATIC </button>
                                    <button class="px-[4px] py-[2px] mb-2 mr-2 text-xs uppercase rounded-full border-2 btn hover:bg-[#D6EBFF] text-[#7F7F7F] border-[#7F7F7F] hover:text-tombol hover:border-[#D6EBFF] font-semibold transition-all transform duration-300 ease-in-out" onclick="filterSelection('Powdery')"> Powdery </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-10 lg:grid-cols-3 xl:grid-cols-4">

                @forelse ($products as $item)
                <div class="p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-xl drop-shadow-xl transition-all duration-300 ease-in-out transform cursor-pointer group hover:scale-105 kolom {{$item->tags->pluck('name')->implode(' ')}}">
                    <a href="/detailproducts/{{$item->slug}}" class="flex justify-center">
                        <img class="mb-5 rounded-t-lg" src="{{$item->getFirstMediaUrl('products')}}" alt="product image" />
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
                @endforelse

            </div>


        </div>
    </div>
</section>
@endsection
@section('kaki')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("kolom");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            removeClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
        }
    }
    function addClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function removeClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        })
    }
</script>
@endsection
