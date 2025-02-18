<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fairy Nails</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="overflow-x-hidden">

    <header>
        <x-carrousel />
        @include('layouts.navbar')
    </header>
    <main class="w-full overflow-x-hidden">
        <div class="section max-w-full mx-auto ">
            {{-- setions about --}}
            @include('sections.about')

            {{-- features sections --}}
            @include('sections.features')

            {{-- gallery sections --}}
            @include('sections.gallery')

            {{-- product sections --}}
            @include('sections.product')

            {{-- sections divider --}}
            @include('sections.divider')

            {{-- sections testimony --}}
            @include('sections.testimony')

            {{-- sections location --}}
            @include('sections.location')



        </div>
    </main>
    <footer>
        {{-- sections footer --}}
        @include('sections.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>


</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll(".lazyload");

        images.forEach(img => {
            img.addEventListener("load", function() {
                this.previousElementSibling?.classList.add(
                    "hidden"); // Sembunyikan skeleton setelah gambar dimuat
            });
        });
    });
</script>

</html>
