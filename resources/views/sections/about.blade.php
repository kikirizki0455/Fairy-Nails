<section id="about" class="w-full py-16 bg-gray-100">
    <div class="container mx-auto px-6 lg:px-20">
        <h2 class="text-3xl md:text-5xl font-sm text-center text-[#292352]">About Us</h2>
        <x-border-line />

        <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Bagian Gambar -->
            <div class="flex gap-[10px] items-stretch flex-nowrap p-4 justify-center  content-between">
                <div class="order-[] mb-10">
                    <img src="{{ asset('assets/images/about1.webp') }}" alt="about1"
                        class="w-[260px] lg:rounded-lg h-[370px]">
                </div>
                <div class=" mt-10">
                    <img src="{{ asset('assets/images/about2.webp') }}" alt="about2"
                        class="w-[260px] lg:rounded-lg h-[370px]">
                </div>
            </div>

            <!-- Bagian Teks -->
            <div class="text-center lg:text-center px-4">
                <h1 class="text-xl md:text-2xl font-bold text-[#292352] mb-4">GET A PERFECT NAILS</h1>
                <p class="text-[#272635] text-sm md:text-base leading-relaxed">
                    Fairy Nails is the perfect destination for those who want to flaunt beautiful and stylish nails!
                    We offer the latest nail art services, from trendy gel polish colors to unique accessories
                    that make your nails stand out. Get everything you need for stunning and creative nail designs,
                    only at Fairy Nails!
                </p>
            </div>
        </div>
    </div>
</section>
