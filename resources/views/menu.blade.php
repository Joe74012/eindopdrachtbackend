<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu - PizzaHub</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-amber-50 text-[#1b1b18] min-h-screen font-sans">

<header class="flex justify-between items-center px-8 py-4 bg-white shadow-md sticky top-0 z-50">
    <h2 class="text-xl font-bold">PizzaHub</h2>

    <nav class="hidden lg:flex gap-6">
        <a href="/" class="font-semibold hover:text-orange-600 transition-colors">Home</a>
        <a href="{{ route('menu.index') }}" class="font-semibold hover:text-orange-600 transition-colors" style="color: #E65100;">Menu</a>
        <a href="{{ route('about') }}" class="font-semibold hover:text-orange-600 transition-colors">About</a>
        <a href="{{ route('contact') }}" class="font-semibold transition-colors">Contact</a>
    </nav>

    <div class="flex items-center gap-3">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="inline-block px-5 py-1.5 border border-[#19140035] hover:border-orange-600 rounded-sm text-sm transition-colors">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="inline-block px-5 py-1.5 text-sm hover:text-orange-600 transition-colors">
                    Log in
                </a>
            @endauth
        @endif
    </div>
</header>

    <!-- Menu sectie -->
    <section class="px-8 py-16 max-w-6xl mx-auto w-full text-center">
        <h1 class="text-5xl font-bold mb-3">Our Menu</h1>
        <p class="text-gray-500 mb-10 max-w-xl mx-auto">
            Explore our wide selection of authentic Italian pizzas, made fresh with premium ingredients
        </p>

        <!-- Filter knoppen -->
        <div class="flex gap-3 justify-center flex-wrap mb-12" id="filters">
            <button onclick="filterCategory('all')"
                class="filter-btn active px-6 py-2 rounded-full font-semibold bg-orange-600 text-white transition-colors"
                data-category="all">All</button>
            <button onclick="filterCategory('classic')"
                class="filter-btn px-6 py-2 rounded-full font-semibold bg-white text-gray-700 hover:bg-orange-50 transition-colors"
                data-category="classic">Classic</button>
            <button onclick="filterCategory('specialty')"
                class="filter-btn px-6 py-2 rounded-full font-semibold bg-white text-gray-700 hover:bg-orange-50 transition-colors"
                data-category="specialty">Specialty</button>
            <button onclick="filterCategory('vegetarian')"
                class="filter-btn px-6 py-2 rounded-full font-semibold bg-white text-gray-700 hover:bg-orange-50 transition-colors"
                data-category="vegetarian">Vegetarian</button>
            <button onclick="filterCategory('premium')"
                class="filter-btn px-6 py-2 rounded-full font-semibold bg-white text-gray-700 hover:bg-orange-50 transition-colors"
                data-category="premium">Premium</button>
        </div>

        <!-- Pizza grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-left" id="pizza-grid">
            @foreach($gerechten as $gerecht)
            <div class="pizza-card rounded-2xl overflow-hidden shadow relative" data-category="{{ strtolower($gerecht->categorie) }}">
                <img src="{{ asset($gerecht->afbeelding) }}"
                     class="w-full h-56 object-cover"
                     alt="{{ $gerecht->naam }}">
                <span class="absolute top-3 right-3 bg-orange-600 text-white text-xs px-3 py-1 rounded-full font-semibold capitalize">
                    {{ $gerecht->categorie }}
                </span>
                <div class="bg-white p-4">
                    <h3 class="text-lg font-bold mb-1">{{ $gerecht->naam }}</h3>
                    <p class="text-gray-500 text-sm mb-3">{{ $gerecht->beschrijving }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-orange-600 text-xl font-bold">${{ $gerecht->prijs }}</span>
                        <button class="bg-orange-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-orange-700 transition-colors">
                            Add
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <script>
        function filterCategory(category) {
            // Knoppen updaten
            document.querySelectorAll('.filter-btn').forEach(btn => {
                if (btn.dataset.category === category) {
                    btn.classList.add('bg-orange-600', 'text-white');
                    btn.classList.remove('bg-white', 'text-gray-700');
                } else {
                    btn.classList.remove('bg-orange-600', 'text-white');
                    btn.classList.add('bg-white', 'text-gray-700');
                }
            });

            // Kaartjes filteren
            document.querySelectorAll('.pizza-card').forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
