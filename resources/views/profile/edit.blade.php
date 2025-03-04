<x-app-layout>

    <div>
        <div class="container p-10 mx-auto lg:p-32">
            <div class="mb-4 border-b border-[#C2C2C2]">
                <ul class="flex justify-center text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-white bg-[#6298CE] hover:text-white" data-tabs-inactive-classes="text-black hover:text-white" role="tablist">
                    <li class="flex-1" role="presentation">
                        <button class="inline-block p-4 w-full hover:text-white uppercase hover:bg-[#6298CE]" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                            Kelola Profile
                        </button>
                    </li>
                    <li class="flex-1" role="presentation">
                        <button class="inline-block p-4 w-full hover:text-white uppercase hover:bg-[#6298CE]" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                            Ubah Password
                        </button>
                    </li>
                </ul>
            </div>
            <div id="default-styled-tab-content">
                <div class="hidden p-4" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                    @if (session('status'))
                            <div id="status-message" class="py-2 mb-5 w-full text-center text-white bg-green-500 rounded">
                                {{ session('status') }}
                            </div>
                    @endif
                    @if ($errors->any())
                        <div class="py-2 mb-5 w-full text-center text-white bg-red-500 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($errors->updatePassword->any())
                        <div class="py-2 mb-5 w-full text-center text-white bg-red-500 rounded">
                            <ul>
                                @foreach ($errors->updatePassword->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="flex flex-col gap-5 md:flex-row lg:gap-0" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="flex flex-1 justify-center items-center self-center">
                            {{-- <div class="md:w-52 md:h-52 w-32 h-32 rounded-full border-4 border-[#6298CE] overflow-hidden">
                                <img src="{{$user->getFirstMediaUrl('avatars')}}" class="object-cover w-full h-full" alt="profile">
                            </div> --}}
                            <label for="dropzone-file" class="flex overflow-hidden flex-col justify-center items-center w-32 h-32 rounded-full border-2 border-dashed cursor-pointer md:w-52 md:h-52 border-tombol hover:bg-tombol hover:border-tombol">
                                <img src="{{ $user->getFirstMediaUrl('avatars') ?: asset('img/general/default.jpg')}}" class="object-cover w-32 h-32 rounded-full brightness-50 md:w-52 md:h-52" id="showgambar" alt="">
                                <div class="flex absolute flex-col justify-center items-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-6 h-6 text-white md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <p class="mb-2 text-sm text-center text-white"><span class="font-semibold">Upload Foto</span></p>
                                </div>
                                <input id="dropzone-file" type="file" name="avatars" class="hidden" />
                                @error('avatars')
                                    <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </label>
                        </div>
                        <div class="flex flex-col flex-1 justify-center items-center self-center">
                           <div class="w-full lg:w-3/4">
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-black capitalize">name</label>
                                <x-text-input type="text" id="name" :value="old('name', $user->name)" class="block p-2.5 w-full text-sm text-gray-900 placeholder:text-[#ACACAC] bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol" name="name" placeholder="Masukan Nama Lengkap" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-black capitalize">email</label>
                                <x-text-input type="email" id="email" :value="old('email', $user->email)" class="block p-2.5 w-full text-sm text-gray-900 placeholder:text-[#ACACAC] bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol" name="email" placeholder="Masukan Nama@gmail.com" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-5">
                                <label for="phone" class="block mb-2 text-sm font-medium text-black capitalize">No Handphone</label>
                                <x-text-input type="phone" id="phone" :value="old('phone', $user->phone)" class="block p-2.5 w-full text-sm text-gray-900 placeholder:text-[#ACACAC] bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol" name="phone" placeholder="Masukan No Handphone" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <button type="submit" class="px-5 py-2.5 w-full text-sm font-medium text-center text-white rounded-lg bg-tombol hover:bg-tombol focus:ring-4 focus:outline-none focus:ring-tombol sm:w-auto">Simpan Perubahan</button>
                           </div>
                        </div>
                    </form>
                </div>
                <div class="hidden p-4" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <form class="flex flex-col gap-5 md:flex-row lg:gap-0"method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')
                        <div class="flex flex-col flex-1 justify-center items-center self-center">
                           <div class="w-full lg:w-3/4">
                            <div class="mb-5">
                                <label for="current_password" class="block mb-2 text-sm font-medium text-black capitalize">password lama</label>
                                <x-text-input type="password" id="current_password" name="current_password" class="block p-2.5 w-full text-sm text-gray-900 placeholder:text-[#ACACAC] bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol" placeholder="Masukan Password Lama" required />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>
                            <div class="mb-5">
                                <label for="password_new" class="block mb-2 text-sm font-medium text-black capitalize">password baru</label>
                                <x-text-input type="password" id="password_new" name="password" class="block p-2.5 w-full text-sm text-gray-900 placeholder:text-[#ACACAC] bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol" placeholder="Masukan Password Baru" required />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                            <div class="mb-5">
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-black capitalize">Konfirmasi Password</label>
                                <x-text-input type="password" id="password_confirmation" class="block p-2.5 w-full text-sm text-gray-900 placeholder:text-[#ACACAC] bg-gray-50 rounded-lg border border-gray-300 focus:ring-tombol focus:border-tombol" name="password_confirmation" placeholder="Konfirmasi Password Baru" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                            <button type="submit" class="px-5 py-2.5 w-full text-sm font-medium text-center text-white rounded-lg bg-tombol hover:bg-tombol focus:ring-4 focus:outline-none focus:ring-tombol sm:w-auto">Simpan Perubahan</button>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('kaki')
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
        function readURL(input) {
            if(input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#showgambar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#dropzone-file").change(function() {
            readURL(this);
        });
    </script>
    <script>
        // Hide the status message after 5 seconds
        setTimeout(function() {
            var statusMessage = document.getElementById('status-message');
            if (statusMessage) {
                statusMessage.style.display = 'none';
            }
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
    @endsection
</x-app-layout>
