<x-app-layout>

    <div class="py-10">
        <div class="container p-6 mx-auto">
            <div class="toast-container">
                @if (session('success'))
                    <div class="p-4 mb-4 text-white bg-green-500 rounded-lg shadow-md" role="alert">
                        <div class="flex justify-between items-center">
                            <span>{{ session('success') }}</span>
                            <button type="button" class="ml-2 text-white"
                                onclick="this.parentElement.parentElement.style.display='none';">&times;</button>
                        </div>
                    </div>
                @endif

                @if (session('error'))
                    <div class="p-4 mb-4 text-white bg-red-500 rounded-lg shadow-md" role="alert">
                        <div class="flex justify-between items-center">
                            <span>{{ session('error') }}</span>
                            <button type="button" class="ml-2 text-white"
                                onclick="this.parentElement.parentElement.style.display='none';">&times;</button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="flex flex-col gap-5 justify-center items-center self-center lg:flex-row">
                <div class="flex relative flex-col flex-1 justify-center items-center self-center">
                    <div class="flex flex-row space-x-5 w-full md:flex-col md:px-10">
                        <div class="flex relative justify-center mb-10">
                            <div class="overflow-hidden relative w-40 h-40 rounded-full border-4 border-[#6298CE]">
                                <img src="{{ $user->getFirstMediaUrl('avatars') ?: asset('img/general/default.jpg') }}"
                                    class="object-cover w-full h-full" alt="profile">
                            </div>
                            <div
                                class="absolute -bottom-2 left-1/2 z-10 w-32 h-8 text-white rounded-md transform -translate-x-1/2 bg-tombol">
                                <div class="flex justify-center items-center self-center p-1 space-x-2 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 22 20"
                                        fill="none">
                                        <path
                                            d="M0.636719 19.2636V6.85151H6.39672V19.2636H0.636719ZM8.22945 19.2636V0.645447H13.9894V19.2636H8.22945ZM15.8222 19.2636V8.92019H21.5822V19.2636H15.8222Z"
                                            fill="white" />
                                    </svg>
                                    <div class="font-bold">
                                        No.{{ $rank }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex relative flex-col md:px-32">
                            @if ($user->getTier() == 'Bronze')
                                <div class="flex space-x-2">
                                    <div class="overflow-hidden items-center w-7 h-7 rounded-full md:w-10 md:h-10">
                                        <img src="{{ asset('img/tier/bronze.png') }}" class="object-cover w-full h-full"
                                            alt="tier">
                                    </div>
                                    <div
                                        class="items-center self-center text-[#5B5959] italic font-bold md:text-xl uppercase">
                                        {{ $user->getTier() }}
                                    </div>
                                </div>
                            @endif
                            @if ($user->getTier() == 'Silver')
                                <div class="flex space-x-2">
                                    <div class="overflow-hidden items-center w-7 h-7 rounded-full md:w-10 md:h-10">
                                        <img src="{{ asset('img/tier/silver.png') }}" class="object-cover w-full h-full"
                                            alt="tier">
                                    </div>
                                    <div
                                        class="items-center self-center text-[#5B5959] italic font-bold md:text-xl uppercase">
                                        {{ $user->getTier() }}
                                    </div>
                                </div>
                            @endif
                            @if ($user->getTier() == 'Gold')
                                <div class="flex space-x-2">
                                    <div class="overflow-hidden items-center w-7 h-7 rounded-full md:w-10 md:h-10">
                                        <img src="{{ asset('img/tier/gold.png') }}" class="object-cover w-full h-full"
                                            alt="tier">
                                    </div>
                                    <div
                                        class="items-center self-center text-[#5B5959] italic font-bold md:text-xl uppercase">
                                        {{ $user->getTier() }}
                                    </div>
                                </div>
                            @endif
                            @if ($user->getTier() == 'Platinum')
                                <div class="flex space-x-2">
                                    <div class="overflow-hidden items-center w-7 h-7 rounded-full md:w-10 md:h-10">
                                        <img src="{{ asset('img/tier/platinum.png') }}"
                                            class="object-cover w-full h-full" alt="tier">
                                    </div>
                                    <div
                                        class="items-center self-center text-[#5B5959] italic font-bold md:text-xl uppercase">
                                        {{ $user->getTier() }}
                                    </div>
                                </div>
                            @endif
                            <div class="py-5 text-xl font-bold text-black line-clamp-2">
                                {{ Auth()->user()->name }}
                            </div>
                            <div class="flex flex-col">
                                <div class="flex mb-2 space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27"
                                        viewBox="0 0 26 27" fill="none">
                                        <circle cx="12.926" cy="13.8376" r="12.926" fill="#6298CE" />
                                        <path
                                            d="M12.321 7.59725C12.6036 7.15722 13.2468 7.15722 13.5294 7.59725L15.2222 10.2326C15.3194 10.384 15.4699 10.4934 15.644 10.5391L18.6735 11.3346C19.1793 11.4674 19.3781 12.0791 19.0469 12.4839L17.0636 14.9081C16.9496 15.0474 16.8921 15.2244 16.9024 15.404L17.0821 18.5311C17.112 19.0532 16.5917 19.4312 16.1044 19.2414L13.1859 18.1042C13.0183 18.0389 12.8322 18.0389 12.6645 18.1042L9.74603 19.2414C9.25873 19.4312 8.73841 19.0532 8.7684 18.5311L8.948 15.404C8.95832 15.2244 8.90082 15.0474 8.78688 14.9081L6.80355 12.4839C6.47239 12.0791 6.67114 11.4674 7.17697 11.3346L10.2065 10.5391C10.3805 10.4934 10.531 10.384 10.6283 10.2326L12.321 7.59725Z"
                                            fill="white" />
                                    </svg>
                                    <div class="text-[#6298CE] items-center self-center">
                                        {{ number_format($user->total_points, 0, ',', '.') }} point
                                    </div>

                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-full h-2.5 bg-[#F1F1F1] rounded-full">
                                        <div class="h-2.5 bg-[#6298CE] rounded-full"
                                            style="width: {{ $user->getProgressToNextTier() }}%"></div>
                                    </div>
                                    <div class="w-10">
                                        <img src="{{ asset($user->getNextTierLogo()) }}"
                                            class="object-cover w-full h-full" alt="tier">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full lg:flex-1 lg:p-6">
                    <div class="mb-4 border-b border-[#C2C2C2]">
                        <ul class="flex justify-center text-sm font-medium text-center" id="default-styled-tab"
                            data-tabs-toggle="#default-styled-tab-content"
                            data-tabs-active-classes="text-white bg-[#6298CE] hover:text-white"
                            data-tabs-inactive-classes="text-black hover:text-white" role="tablist">
                            <li class="flex-1" role="presentation">
                                <button class="inline-block p-4 w-full hover:text-white uppercase hover:bg-[#6298CE]"
                                    id="profile-styled-tab" data-tabs-target="#styled-profile" type="button"
                                    role="tab" aria-controls="profile" aria-selected="false">
                                    Mission
                                </button>
                            </li>
                            <li class="flex-1" role="presentation">
                                <button class="inline-block p-4 w-full hover:text-white uppercase hover:bg-[#6298CE]"
                                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                    role="tab" aria-controls="dashboard" aria-selected="false">
                                    Leaderboard
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-styled-tab-content" class="border-l border-[#c2c2c2] p-6">
                        <div class="hidden overflow-y-auto flex-col p-4 space-y-5 h-96 rounded-lg" id="styled-profile"
                            role="tabpanel" aria-labelledby="profile-tab">

                            @if ($rewards->isEmpty())
                                <div class="flex font-bold justify-center text-center text-[#6298CE] text-xl">
                                    Tidak ada Reward yang Tersedia
                                </div>
                            @else
                                @foreach ($rewards as $item)
                                    <div class="border-2 border-[#c2c2c2] p-6 rounded-lg bg-white flex flex-col">
                                        <div class="flex justify-between">
                                            <div class="flex flex-col flex-1 justify-start">
                                                <div class="text-[#6298CE] capitalize  lg:text-xl">
                                                    Capai
                                                </div>
                                                <div class="text-[#6298CE] font-bold lg:text-3xl">
                                                    {{ number_format($item->point_cost, 0, ',', '.') }} point
                                                </div>
                                                <div class="text-[#808080] mt-2">
                                                    {!! $item->description !!}
                                                </div>
                                            </div>
                                            <div class="flex-col flex-1 justify-end items-end">
                                                <div class="text-[#6298CE] text-end capitalize lg:text-xl">
                                                    reward
                                                </div>
                                                <div class="flex justify-end">
                                                    <img src="{{ $item->getFirstMediaUrl('rewards') }}"
                                                        class="w-20" alt="reward">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="flex mt-5">
                                            @if (isset($claims[$item->id]))
                                                @if ($claims[$item->id]->status == 'approved')
                                                    <span
                                                        class="px-5 py-2 w-full font-bold text-center text-white uppercase bg-green-500 cursor-not-allowed lg:text-xl">
                                                        Claimed
                                                    </span>
                                                @elseif($claims[$item->id]->status == 'pending')
                                                    <span
                                                        class="px-5 py-2 w-full font-bold text-center text-white uppercase bg-yellow-500 cursor-not-allowed lg:text-xl">
                                                        Pending
                                                    </span>
                                                @elseif($claims[$item->id]->status == 'rejected')
                                                    <span
                                                        class="px-5 py-2 w-full font-bold text-center text-white uppercase bg-red-500 cursor-not-allowed lg:text-xl">
                                                        Rejected
                                                    </span>
                                                @endif
                                            @elseif($user->total_points >= $item->point_cost)
                                                <form method="POST" action="{{ route('claim-reward', $item->id) }}"
                                                    class="w-full">
                                                    @csrf
                                                    <button type="submit"
                                                        class="px-5 py-2 w-full font-bold text-center text-white uppercase lg:text-xl bg-tombol">
                                                        Claim
                                                    </button>
                                                </form>
                                            @else
                                                <span
                                                    class="px-5 py-2 w-full lg:text-xl font-bold text-center text-white uppercase bg-[#BEBEBE]">
                                                    locked
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                        </div>
                        <div class="hidden overflow-y-auto flex-col p-4 space-y-5 h-96 rounded-lg"
                            id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            @if ($users->isEmpty())
                                <div class="flex font-bold justify-center text-center text-[#6298CE] text-xl">
                                    Belum ada Pengguna
                                </div>
                            @else
                                @foreach ($users->take(10) as $index => $user)
                                    @php
                                        $rank = $index + 1;
                                        $bgColor =
                                            $rank == 1
                                                ? 'bg-tombol'
                                                : ($rank == 2
                                                    ? 'bg-[#6298CE]'
                                                    : ($rank == 3
                                                        ? 'bg-[#D6EBFF]'
                                                        : 'bg-white'));
                                        $textColor =
                                            $rank <= 2 ? 'text-white' : ($rank == 3 ? 'text-[#6298CE]' : 'text-black');
                                        $borderColor = $rank <= 3 ? 'border-2' : 'border';
                                    @endphp
                                    <div
                                        class="flex flex-col gap-3 p-6 {{ $textColor }} rounded-lg {{ $borderColor }} md:gap-0 md:flex-row {{ $bgColor }}">
                                        <div class="flex flex-row flex-1 items-center self-center space-x-5">
                                            <div class="hidden text-4xl font-bold md:block">
                                                {{ $rank }}
                                            </div>
                                            <div
                                                class="flex flex-row justify-center items-center self-center space-x-2">
                                                <div class="overflow-hidden w-10 h-10 rounded-full">
                                                    <img src="{{ asset('img/general/default.jpg') }}"
                                                        class="object-cover w-full h-full" alt="default">
                                                </div>
                                                <div class="self-center font-bold capitalize item-center">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex flex-row flex-1 justify-end items-center self-center space-x-5">
                                            <div>
                                                <div class="font-bold text-end">
                                                    {{ number_format($user->total_points, 0, ',', '.') }} point
                                                </div>
                                                <div class="text-xs text-end">
                                                    {{ number_format($user->getTotalSales(), 0, ',', '.') }} pcs
                                                    terjual
                                                </div>
                                            </div>
                                            <div class="overflow-hidden w-10 h-10 rounded-full md:w-20 md:h-20">
                                                <img src="{{ asset("img/tier/{$user->getTierLogo()}") }}"
                                                    class="object-cover w-full h-full" alt="tier">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('kaki')
        <script>
            // Menghilangkan notifikasi setelah beberapa detik
            setTimeout(function() {
                document.querySelectorAll('.toast-container > div').forEach(function(toast) {
                    toast.style.display = 'none';
                });
            }, 5000); // Notifikasi akan menghilang setelah 5 detik
        </script>
    @endsection
</x-app-layout>
