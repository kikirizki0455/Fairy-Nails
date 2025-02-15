<div x-data="{ activeSlide: 1 }" class="relative w-full h-screen overflow-hidden">
    <!-- Slides -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/images/carrousel.jpg') }}" class="w-full h-full object-cover">
    </div>

    <!-- Teks di Tengah -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black/30 px-6">
        <div class="w-full sm:w-3/4 lg:w-1/2 flex flex-col justify-start text-center sm:text-left">
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-semibold drop-shadow-lg">
                Out
                Standing
                Beauty <br> For Your Nails
            </h1>

            <a href="{{ route('register') }}"
                class="mt-6 py-2 px-6 bg-[#FF8FA4] hover:bg-[#EF557A] text-white rounded-lg 
                transition-all text-lg sm:w-1/3 w-1/2 sm:text-2xl m-auto text-center lg:m-4">
                Register
            </a>
        </div>
    </div>
</div>
