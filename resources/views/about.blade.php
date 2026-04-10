<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Story – PizzaHub</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-black bg-[#F5EBE0] min-h-screen flex flex-col font-sans" style="font-family: 'Instrument Sans', sans-serif;">

<!-- Header / Nav -->
<header class="flex justify-between items-center px-8 py-4 bg-white shadow-md sticky top-0 z-50">
    <h2 class="text-xl font-bold">PizzaHub</h2>

    <nav class="hidden lg:flex gap-6">
        <a href="/" class="font-semibold hover:text-orange-600 transition-colors">Home</a>
        <a href="{{ route('menu.index') }}" class="font-semibold hover:text-orange-600 transition-colors">Menu</a>
        <a href="{{ route('about') }}" class="font-semibold" style="color: #E65100;">About</a>
        <a href="#" class="font-semibold hover:text-orange-600 transition-colors">Contact</a>
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
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="inline-block px-5 py-1.5 text-white rounded-lg text-sm transition-colors"
                       style="background-color: #E65100;"
                       onmouseover="this.style.backgroundColor='#BF360C'"
                       onmouseout="this.style.backgroundColor='#E65100'">
                        Register
                    </a>
                @endif
            @endauth
        @endif
    </div>
</header>

<!-- Hero – same height as home page -->
<section class="relative w-full flex items-end justify-center py-32">
    <img
        src="{{ asset('images/pizza2.jpg') }}"
        alt="Pizza making"
        class="absolute inset-0 w-full h-full object-cover"
    >
    <!-- Dark gradient from bottom -->
    <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0,0,0,0.72) 0%, rgba(0,0,0,0.25) 50%, rgba(0,0,0,0.05) 100%);"></div>

    <div class="relative z-10 text-center pb-20 px-6">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-3" style="text-shadow: 0 2px 12px rgba(0,0,0,0.4);">Our Story</h1>
        <p class="text-white text-lg md:text-xl" style="opacity: 0.90;">Bringing the authentic taste of Italy to your table since 2011</p>
    </div>
</section>

<!-- From Naples to Your Door -->
<section class="px-8 py-16 max-w-6xl mx-auto w-full">
    <div class="flex flex-col lg:flex-row gap-12 items-start">

        <div class="flex-1">
            <div class="flex items-center gap-3 mb-5">
                <div class="w-11 h-11 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: #E65100;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2C6.5 2 2 6.5 2 12l10 10 10-10C22 6.5 17.5 2 12 2z"/>
                        <path d="M12 2v20"/>
                        <circle cx="8" cy="12" r="1.2" fill="currentColor" stroke="none"/>
                    </svg>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold">From Naples to Your Door</h2>
            </div>

            <p class="text-gray-600 leading-relaxed mb-7">
                PizzaHub was born from a simple dream: to share the authentic flavors of Italian pizza with our community.
                Our founder, Antonio Rossi, grew up in Naples, where he learned the art of pizza-making from his grandmother.
            </p>

            <h3 class="text-xl font-bold mb-3">The Beginning</h3>
            <p class="text-gray-600 leading-relaxed mb-7">
                After moving to America, Antonio missed the genuine taste of home. He decided to open PizzaHub, where every pizza
                is made with the same care and traditional techniques he learned as a child.
            </p>

            <h3 class="text-xl font-bold mb-3">Our Commitment</h3>
            <p class="text-gray-600 leading-relaxed">
                Every pizza that leaves our kitchen carries the soul of Naples. We source our ingredients carefully, work with
                local suppliers where possible, and never cut corners — because you deserve nothing less than the real thing.
            </p>
        </div>

        <div class="w-full lg:w-[420px] flex-shrink-0">
            <div class="rounded-2xl overflow-hidden shadow" style="height: 420px; background: #d1c4b0;">
                <img
                    src="{{ asset('images/restaurant.jpg') }}"
                    alt="PizzaHub restaurant"
                    class="w-full h-full object-cover"
                    onerror="this.src='https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800&q=80'"
                >
            </div>
        </div>
    </div>
</section>

<!-- What Drives Us -->
<section class="px-8 py-16 w-full" style="background-color: #F5EBE0;">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-2">What Drives Us</h2>
        <p class="text-gray-500 mb-12">The core values that make PizzaHub special</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white rounded-2xl p-8 text-left shadow">
                <div class="w-14 h-14 rounded-full flex items-center justify-center mb-5" style="background-color: #E65100;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-3">Passion for Pizza</h3>
                <p class="text-gray-500 text-sm leading-relaxed">We pour our heart into every pizza, using traditional recipes passed down through generations.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 text-left shadow">
                <div class="w-14 h-14 rounded-full flex items-center justify-center mb-5" style="background-color: #E65100;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="6"/>
                        <path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/>
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-3">Quality Ingredients</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Only the finest, freshest ingredients make it onto our pizzas. We never compromise on quality.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 text-left shadow">
                <div class="w-14 h-14 rounded-full flex items-center justify-center mb-5" style="background-color: #E65100;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-3">Family Atmosphere</h3>
                <p class="text-gray-500 text-sm leading-relaxed">We treat every customer like family, creating a warm and welcoming environment for all.</p>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="mt-auto py-6 bg-white text-center text-sm text-gray-500">
    &copy; {{ date('Y') }} PizzaHub. All rights reserved.
</footer>

</body>
</html>
