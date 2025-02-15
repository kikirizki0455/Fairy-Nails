<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fairy Nails</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-1000vh ">
    <header>
        <x-carrousel />
        @include('layouts.navbar')
    </header>
    <main>
        <div class="section">
            <!-- About Section -->
            @include('sections.about')
            {{-- Features Section --}}
            @include('sections.features')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
