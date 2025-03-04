@extends('layouts.main')
@section('konten')
<section class="py-10 h-auto">
    <div class="container p-6 mx-auto lg:p-10">
        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-1 justify-center items-center self-center max-w-screen-xl">
                <img src="{{asset('img/general/banner-tentang.png')}}" class="object-contain w-full h-full" alt="banner">
            </div>
            <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                <div class="flex flex-col justify-center px-0 py-10 lg:px-20">
                    <h1 class="mb-5 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner lg:text-5xl lg:tracking-widest lg:leading-normal">
                        pt. agung wangi <br class="hidden md:block"> sentosa
                    </h1>
                    <div class="mb-10 leading-relaxed text-justify text-abu">
                        PT. Agung Wangi Sentosa adalah perusahaan yang bergerak di bidang produk kecantikan dan perawatan diri, dengan fokus utama pada parfum berkualitas tinggi. Kami berkomitmen untuk menghadirkan produk-produk yang dapat memberikan pengalaman harum yang tahan lama dan memikat hati.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="h-auto bg-[url('../../public/img/general/bg-about.png')] bg-cover bg-no-repeat bg-center lg:bg-right">
    <div class="container p-6 mx-auto lg:p-10">
        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-col items-center self-center max-w-screen-xl lg:flex-1">
                <div class="flex flex-col justify-center px-0 py-10 lg:pl-20 lg:pr-10">
                    <h1 class="mb-5 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner lg:text-5xl lg:tracking-widest lg:leading-normal">
                        Produk Kami
                    </h1>
                    <div class="mb-10 leading-relaxed text-justify text-abu">
                        Saat ini, PT. Agung Wangi Sentosa memiliki produk utama yaitu parfum dengan brand Muntru. Parfum Muntru hadir dengan berbagai varian, masing-masing dirancang untuk memberikan sensasi keharuman yang berbeda dan memikat sepanjang hari. Setiap varian parfum kami dibuat dengan bahan berkualitas tinggi dan dirancang untuk memenuhi preferensi aroma yang beragam, menjadikannya pilihan ideal untuk berbagai kesempatan.
                    </div>
                    <div class="mb-10 leading-relaxed text-justify text-abu">
                        Selain parfum, kami juga akan segera meluncurkan produk terbaru kami, yaitu Deodorant Muntru. Deodorant ini hadir sebagai solusi praktis untuk menjaga kesegaran tubuh sepanjang hari. Dengan komitmen yang sama terhadap kualitas dan inovasi, deodorant Muntru akan melengkapi rangkaian produk perawatan diri yang kami tawarkan.
                    </div>
                </div>
            </div>
            <div class="hidden flex-1 justify-center items-center self-center max-w-screen-xl xl:flex">

            </div>
        </div>
    </div>
</section>
<section class="h-auto">
    <div class="container px-6 mx-auto md:p-0 md:px-6">
        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-col flex-1 items-center self-center max-w-screen-xl">
                <div class="flex flex-col justify-center px-0 py-10 md lg:px-20">
                    <h1 class="mb-5 text-4xl font-extrabold tracking-tight leading-none text-center text-black uppercase lg:text-start font-banner lg:text-5xl lg:tracking-widest lg:leading-normal">
                        kontak kami
                    </h1>
                    <div class="mb-10 leading-relaxed text-justify text-abu">
                        Untuk informasi lebih lanjut, pemesanan, atau pertanyaan lainnya, Anda dapat menghubungi kami melalui beberapa saluran berikut:
                    </div>
                    <div class="grid grid-cols-1 gap-5 mb-10 leading-relaxed text-justify xl:grid-cols-2 lg:grid-cols-1 md:grid-cols-2 text-abu">
                        <div class="flex items-center self-center space-x-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M28.5747 7.36508C27.1993 5.97624 25.5612 4.87503 23.756 4.12562C21.9507 3.37622 20.0143 2.99361 18.0597 3.00008C9.86971 3.00008 3.19471 9.67508 3.19471 17.8651C3.19471 20.4901 3.88471 23.0401 5.17471 25.2901L3.07471 33.0001L10.9497 30.9301C13.1247 32.1151 15.5697 32.7451 18.0597 32.7451C26.2497 32.7451 32.9247 26.0701 32.9247 17.8801C32.9247 13.9051 31.3797 10.1701 28.5747 7.36508ZM18.0597 30.2251C15.8397 30.2251 13.6647 29.6251 11.7597 28.5001L11.3097 28.2301L6.62971 29.4601L7.87471 24.9001L7.57471 24.4351C6.34103 22.4657 5.68609 20.189 5.68471 17.8651C5.68471 11.0551 11.2347 5.50508 18.0447 5.50508C21.3447 5.50508 24.4497 6.79508 26.7747 9.13508C27.9261 10.2809 28.8386 11.6439 29.4591 13.1451C30.0797 14.6463 30.396 16.2557 30.3897 17.8801C30.4197 24.6901 24.8697 30.2251 18.0597 30.2251ZM24.8397 20.9851C24.4647 20.8051 22.6347 19.9051 22.3047 19.7701C21.9597 19.6501 21.7197 19.5901 21.4647 19.9501C21.2097 20.3251 20.5047 21.1651 20.2947 21.4051C20.0847 21.6601 19.8597 21.6901 19.4847 21.4951C19.1097 21.3151 17.9097 20.9101 16.4997 19.6501C15.3897 18.6601 14.6547 17.4451 14.4297 17.0701C14.2197 16.6951 14.3997 16.5001 14.5947 16.3051C14.7597 16.1401 14.9697 15.8701 15.1497 15.6601C15.3297 15.4501 15.4047 15.2851 15.5247 15.0451C15.6447 14.7901 15.5847 14.5801 15.4947 14.4001C15.4047 14.2201 14.6547 12.3901 14.3547 11.6401C14.0547 10.9201 13.7397 11.0101 13.5147 10.9951H12.7947C12.5397 10.9951 12.1497 11.0851 11.8047 11.4601C11.4747 11.8351 10.5147 12.7351 10.5147 14.5651C10.5147 16.3951 11.8497 18.1651 12.0297 18.4051C12.2097 18.6601 14.6547 22.4101 18.3747 24.0151C19.2597 24.4051 19.9497 24.6301 20.4897 24.7951C21.3747 25.0801 22.1847 25.0351 22.8297 24.9451C23.5497 24.8401 25.0347 24.0451 25.3347 23.1751C25.6497 22.3051 25.6497 21.5701 25.5447 21.4051C25.4397 21.2401 25.2147 21.1651 24.8397 20.9851Z" fill="#2D5D8D"/>
                                </svg>
                            </div>
                            <div class="text-xs font-medium text-black md:text-sm">
                                0812-1459-9739
                            </div>
                        </div>
                        <div class="flex items-center self-center space-x-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M24.9002 8.73C23.8751 7.55929 23.3101 6.0561 23.3102 4.5H18.6752V23.1C18.6402 24.1068 18.2155 25.0606 17.4907 25.7602C16.7659 26.4599 15.7976 26.8506 14.7902 26.85C12.6602 26.85 10.8902 25.11 10.8902 22.95C10.8902 20.37 13.3802 18.435 15.9452 19.23V14.49C10.7702 13.8 6.24023 17.82 6.24023 22.95C6.24023 27.945 10.3802 31.5 14.7752 31.5C19.4852 31.5 23.3102 27.675 23.3102 22.95V13.515C25.1897 14.8648 27.4463 15.589 29.7602 15.585V10.95C29.7602 10.95 26.9402 11.085 24.9002 8.73Z" fill="#2D5D8D"/>
                                </svg>
                            </div>
                            <div class="text-xs font-medium text-black md:text-sm">
                                @muntruparfum
                            </div>
                        </div>
                        <div class="flex items-center self-center space-x-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M11.7 3H24.3C29.1 3 33 6.9 33 11.7V24.3C33 26.6074 32.0834 28.8203 30.4518 30.4518C28.8203 32.0834 26.6074 33 24.3 33H11.7C6.9 33 3 29.1 3 24.3V11.7C3 9.39262 3.9166 7.17974 5.54817 5.54817C7.17974 3.9166 9.39262 3 11.7 3ZM11.4 6C9.96783 6 8.59432 6.56893 7.58162 7.58162C6.56893 8.59432 6 9.96783 6 11.4V24.6C6 27.585 8.415 30 11.4 30H24.6C26.0322 30 27.4057 29.4311 28.4184 28.4184C29.4311 27.4057 30 26.0322 30 24.6V11.4C30 8.415 27.585 6 24.6 6H11.4ZM25.875 8.25C26.3723 8.25 26.8492 8.44754 27.2008 8.79917C27.5525 9.15081 27.75 9.62772 27.75 10.125C27.75 10.6223 27.5525 11.0992 27.2008 11.4508C26.8492 11.8025 26.3723 12 25.875 12C25.3777 12 24.9008 11.8025 24.5492 11.4508C24.1975 11.0992 24 10.6223 24 10.125C24 9.62772 24.1975 9.15081 24.5492 8.79917C24.9008 8.44754 25.3777 8.25 25.875 8.25ZM18 10.5C19.9891 10.5 21.8968 11.2902 23.3033 12.6967C24.7098 14.1032 25.5 16.0109 25.5 18C25.5 19.9891 24.7098 21.8968 23.3033 23.3033C21.8968 24.7098 19.9891 25.5 18 25.5C16.0109 25.5 14.1032 24.7098 12.6967 23.3033C11.2902 21.8968 10.5 19.9891 10.5 18C10.5 16.0109 11.2902 14.1032 12.6967 12.6967C14.1032 11.2902 16.0109 10.5 18 10.5ZM18 13.5C16.8065 13.5 15.6619 13.9741 14.818 14.818C13.9741 15.6619 13.5 16.8065 13.5 18C13.5 19.1935 13.9741 20.3381 14.818 21.182C15.6619 22.0259 16.8065 22.5 18 22.5C19.1935 22.5 20.3381 22.0259 21.182 21.182C22.0259 20.3381 22.5 19.1935 22.5 18C22.5 16.8065 22.0259 15.6619 21.182 14.818C20.3381 13.9741 19.1935 13.5 18 13.5Z" fill="#2D5D8D"/>
                                </svg>
                            </div>
                            <div class="text-xs font-medium text-black md:text-sm">
                                @muntruparfum
                            </div>
                        </div>
                        <div class="flex items-center self-center space-x-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M33 9C33 7.35 31.65 6 30 6H6C4.35 6 3 7.35 3 9V27C3 28.65 4.35 30 6 30H30C31.65 30 33 28.65 33 27V9ZM30 9L18 16.5L6 9H30ZM30 27H6V12L18 19.5L30 12V27Z" fill="#2D5D8D"/>
                                </svg>
                            </div>
                            <div class="text-xs font-medium text-black md:text-sm">
                                agungwangisentosa@gmail.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-1 justify-center items-center self-center max-w-screen-xl">
                <img src="{{asset('img/general/profile-tentang.png')}}" class="object-contain w-full h-full" alt="banner">
            </div>
        </div>
    </div>
</section>
@endsection
