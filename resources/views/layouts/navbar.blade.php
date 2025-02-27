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
                        <span class="block text-sm text-gray-500 truncate">name@gmail.com</span>
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
                                <a href="/" class="block px-3 py-2 rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0 {{route('home') == url()->current() ? 'text-white bg-tombol md:bg-transparent md:text-tombol' : 'text-black'}}" aria-current="page">
                                    beranda
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 text-black rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0">
                                    tentang kami
                                </a>
                            </li>
                            <li>
                                <a href="/products" class="block px-3 py-2 text-black rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0 {{route('products') == url()->current() ? 'text-white bg-tombol md:bg-transparent md:text-tombol' : 'text-black'}}">
                                    produk
                                </a>
                            </li>
                            <li>
                                <a href="/mitra" class="block px-3 py-2 text-black rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0 {{route('mitra') == url()->current() ? 'text-white bg-tombol md:bg-transparent md:text-tombol' : 'text-black'}}">
                                    mitra
                                </a>
                            </li>
                            <li>
                                <a href="https://agungwangisentosa.id/artikel/" target="_blank" class="block px-3 py-2 text-black rounded-sm hover:bg-tombol hover:text-white md:hover:bg-transparent md:hover:text-tombol md:p-0">
                                    artikel
                                </a>
                            </li>
                    </ul>
            </div>
        </div>
    </nav>
</header>
