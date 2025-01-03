@extends('layouts.app')

@section('content')
 <div id="Content-Container"
        class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">
    <div id="Background"
        class="absolute top-0 w-full h-[280px] rounded-bl-[75px] bg-[linear-gradient(180deg,#F2F9E6_0%,#D2EDE4_100%)]">
    </div>
    <div id="TopNav" class="relative flex items-center justify-between px-5 mt-[60px]">
        <div class="flex flex-col gap-1">
            <p>Good day,</p>
            <h1 class="font-bold text-xl leading-[30px]">Explore Cozy Home</h1>
        </div>
        <a href="#"
            class="w-12 h-12 flex items-center justify-center shrink-0 rounded-full overflow-hidden bg-white">
            <img src="assets/images/icons/notification.svg" class="w-[28px] h-[28px]" alt="icon">
        </a>
    </div>
    <div id="Categories" class="swiper w-full overflow-x-hidden mt-[30px]">
        <div class="swiper-wrapper">
            <div class="swiper-slide !w-fit pb-[30px]">
                <a href="categories.html" class="card">
                    <div
                        class="flex flex-col items-center w-[120px] shrink-0 rounded-[40px] p-4 pb-5 gap-3 bg-white shadow-[0px_12px_30px_0px_#0000000D] text-center">
                        <div class="w-[70px] h-[70px] rounded-full flex shrink-0 overflow-hidden">
                            <img src="assets/images/thumbnails/flats.png" class="w-full h-full object-cover"
                                    alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Flats</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide !w-fit pb-[30px]">
                <a href="categories.html" class="card">
                    <div
                        class="flex flex-col items-center w-[120px] shrink-0 rounded-[40px] p-4 pb-5 gap-3 bg-white shadow-[0px_12px_30px_0px_#0000000D] text-center">
                        <div class="w-[70px] h-[70px] rounded-full flex shrink-0 overflow-hidden">
                            <img src="assets/images/thumbnails/villas.png" class="w-full h-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Villas</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide !w-fit pb-[30px]">
                <a href="categories.html" class="card">
                    <div
                        class="flex flex-col items-center w-[120px] shrink-0 rounded-[40px] p-4 pb-5 gap-3 bg-white shadow-[0px_12px_30px_0px_#0000000D] text-center">
                        <div class="w-[70px] h-[70px] rounded-full flex shrink-0 overflow-hidden">
                            <img src="assets/images/thumbnails/hotel.png" class="w-full h-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Hotel</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Kos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide !w-fit pb-[30px]">
                <a href="categories.html" class="card">
                    <div
                        class="flex flex-col items-center w-[120px] shrink-0 rounded-[40px] p-4 pb-5 gap-3 bg-white shadow-[0px_12px_30px_0px_#0000000D] text-center">
                        <div class="w-[70px] h-[70px] rounded-full flex shrink-0 overflow-hidden">
                            <img src="assets/images/thumbnails/apartments.png" class="w-full h-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <h3 class="font-semibold">Apartments</h3>
                            <p class="text-sm text-ngekos-grey">1,304 Kos</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide !w-fit pb-[30px]">
                    <a href="categories.html" class="card">
                        <div
                            class="flex flex-col items-center w-[120px] shrink-0 rounded-[40px] p-4 pb-5 gap-3 bg-white shadow-[0px_12px_30px_0px_#0000000D] text-center">
                            <div class="w-[70px] h-[70px] rounded-full flex shrink-0 overflow-hidden">
                                <img src="assets/images/thumbnails/buildings.png" class="w-full h-full object-cover"
                                    alt="thumbnail">
                            </div>
                            <div class="flex flex-col gap-[2px]">
                                <h3 class="font-semibold">Flats</h3>
                                <p class="text-sm text-ngekos-grey">1,304 Kos</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    <div id="BottomNav" class="relative flex w-full h-[138px] shrink-0">
            <nav class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
                <div class="grid grid-cols-4 h-fit rounded-[40px] justify-between py-4 px-5 bg-ngekos-black">
                    <a href="index.html" class="flex flex-col items-center text-center gap-2">
                        <img src="assets/images/icons/global-green.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                        <span class="font-semibold text-sm text-white">Discover</span>
                    </a>
                    <a href="check-booking.html" class="flex flex-col items-center text-center gap-2">
                        <img src="assets/images/icons/note-favorite.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                        <span class="font-semibold text-sm text-white">Orders</span>
                    </a>
                    <a href="find-kos.html" class="flex flex-col items-center text-center gap-2">
                        <img src="assets/images/icons/search-status.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                        <span class="font-semibold text-sm text-white">Find</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-center gap-2">
                        <img src="assets/images/icons/24-support.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                        <span class="font-semibold text-sm text-white">Help</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
@endsection
