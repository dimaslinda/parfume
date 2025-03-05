<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="py-10 min-h-screen">
        <div class="container p-6 mx-auto xl:p-0">
            <div class="flex flex-col-reverse lg:flex-row">
                <div class="flex flex-1 justify-center items-center self-center">
                    <form method="POST" action="{{ route('login') }}" class="p-6 w-full max-w-xl rounded-lg border border-gray-200 shadow-xl drop-shadow-xl">
                        @csrf
                        <div class="mb-5">
                        <x-input-label for="email" class="block mb-2 text-sm font-medium text-[#BDBDBD]">Your email</x-input-label>
                        <x-text-input type="email" name="email" id="email" class="block placeholder:text-[#BDBDBD] p-2.5 w-full text-sm text-tombol bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol" placeholder="name@gmail.com" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                        <x-input-label for="password" class="block mb-2 text-sm font-medium text-[#BDBDBD]">Your password</x-input-label>
                        <x-text-input type="password" name="password" autocomplete="current-password" id="password" class="block p-2.5 w-full text-sm text-tombol bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol placeholder:text-[#BDBDBD]" placeholder="Password" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" name="remember" class="w-4 h-4 bg-gray-50 rounded-sm border border-gray-300 focus:ring-3 focus:ring-tombol" />
                        </div>
                        <label for="remember" class="text-sm font-medium text-[#BDBDBD] ms-2">Remember me</label>
                        </div>
                        <button type="submit" class="px-5 py-2.5 w-full text-sm font-medium text-center text-white uppercase rounded-lg bg-tombol hover:bg-tombol focus:ring-4 focus:outline-none focus:ring-tombol sm:w-auto">
                            masuk
                        </button>
                    </form>
                </div>
                <div class="flex flex-col flex-1 gap-5 justify-center items-center self-center">
                    <div class="text-4xl font-bold text-center uppercase md:text-6xl md:mb-10 font-banner text-tombol">
                        muntru <br> affiliate
                    </div>
                    <div>
                        <img src="{{asset('img/general/mitra-banner.png')}}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
