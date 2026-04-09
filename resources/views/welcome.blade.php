<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PizzaHub</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-black bg-[#f5ebe0] min-h-screen flex flex-col font-sans">

        <!-- Header / Nav -->
        <header class="flex justify-between items-center px-8 py-4 bg-white shadow-md sticky top-0 z-50">
            <h2 class="text-xl font-bold">PizzaHub</h2>

            <nav class="hidden lg:flex gap-6">
                <a href="/" class="font-semibold hover:text-orange-600 transition-colors">Home</a>
                <a href="{{ route('menu.index') }}" class="font-semibold hover:text-orange-600 transition-colors">Menu</a>
                <a href="#" class="font-semibold hover:text-orange-600 transition-colors">About</a>
                <a href="#" class="font-semibold hover:text-orange-600 transition-colors">Contact</a>
            </nav>

            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="inline-block px-5 py-1.5 border border-[#19140035] dark:border-[#3E3E3A] hover:border-orange-600 rounded-sm text-sm transition-colors">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="inline-block px-5 py-1.5 text-sm hover:text-orange-600 transition-colors">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="inline-block px-5 py-1.5 bg-orange-600 text-white rounded-lg text-sm hover:bg-orange-700 transition-colors">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </header>

        <section class="relative flex flex-col justify-center items-center text-center px-8 py-32 w-full"
         style="background-image: url('{{ asset('images/pizza2.jpg') }}'); background-size: cover; background-position: center;">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-white/70"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-2xl">
        <h1 class="text-5xl font-bold mb-4 text-gray-900">Fresh Pizza,<br>Real Italian Taste.</h1>
        <p class="mb-8 text-gray-600">
            Crafted with authentic Italian recipes and the finest ingredients. Experience<br>
            the true taste of Italy, delivered fresh to your doorstep.
        </p>
        <div class="flex gap-4 justify-center flex-wrap">
            <button class="bg-orange-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-orange-700 transition-colors">
                Order Now
            </button>
            <button class="bg-white text-orange-600 border-2 border-orange-600 px-8 py-3 rounded-full font-semibold hover:bg-orange-50 transition-colors">
                Reserve Table
            </button>
        </div>
    </div>
</section>
<!-- Special Offers -->
<section class="px-8 py-16 max-w-6xl mx-auto w-full text-center">
    <h2 class="text-3xl font-bold mb-2">Special Offers</h2>
    <p class="text-gray-500 mb-10">Amazing deals you don't want to miss!</p>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Family Deal -->
        <div class="bg-white rounded-2xl flex flex-col items-center justify-center text-center shadow p-6 relative">
            <div class="flex mb-4">
                <span class="bg-orange-600 text-white text-sm px-4 py-1 rounded-full font-semibold">Save $10</span>
            </div>
            <h3 class="text-2xl font-bold mb-1">Family Deal</h3>
            <p class="text-gray-500 mb-4">2 Large Pizzas + Garlic Bread + 2L Soda</p>
            <div class="flex items-center gap-3 mb-6">
                <span class="text-orange-600 text-3xl font-bold">$39.99</span>
                <span class="text-gray-400 line-through text-lg">$49.99</span>
            </div>
            <button class="w-full bg-orange-600 text-white py-3 rounded-full font-semibold hover:bg-orange-700 transition-colors">
                Order Now
            </button>
        </div>

        <!-- Lunch Special -->
        <div class="bg-white rounded-2xl flex flex-col items-center justify-center text-center shadow p-6 text-left relative">
            <div class="flex justify-between items-start mb-4">
                <span class="bg-orange-600 text-white text-sm px-4 py-1 rounded-full font-semibold">Mon-Fri 11-3PM</span>
            </div>
            <h3 class="text-2xl font-bold mb-1">Lunch Special</h3>
            <p class="text-gray-500 mb-4">Any Personal Pizza + Salad + Drink</p>
            <div class="flex items-center gap-3 mb-6">
                <span class="text-orange-600 text-3xl font-bold">$12.99</span>
                <span class="text-gray-400 line-through text-lg">$16.99</span>
            </div>
            <button class="w-full bg-orange-600 text-white py-3 rounded-full font-semibold hover:bg-orange-700 transition-colors">
                Order Now
            </button>
        </div>

    </div>
</section>
        <!-- Populaire pizzas -->
<section class="px-8 py-12 max-w-6xl mx-auto w-full">
    <div class="flex justify-between items-start mb-8">
        <div>
            <h2 class="text-3xl font-bold">Our Popular Pizzas</h2>
            <p class="text-gray-500 mt-1">Fan favorites that keep customers coming back</p>
        </div>
        <a href="{{ route('menu.index') }}">
            <button class="bg-orange-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-orange-700 transition-colors">
                View Full Menu →
            </button>
        </a>
    </div>

    <div class="grid grid-cols-[repeat(auto-fit,minmax(220px,1fr))] gap-6">
        @foreach($gerechten as $gerecht)
        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset($gerecht->afbeelding) }}"
                 class="w-full h-52 object-cover"
                 alt="{{ $gerecht->naam }}">
            <div class="p-4">
                <h3 class="text-lg font-bold text-black mb-1">{{ $gerecht->naam }}</h3>
                <div class="flex justify-between items-center">
                    <span class="text-orange-600 text-xl font-bold">${{ $gerecht->prijs }}</span>
                    <button class="bg-orange-600 text-white px-5 py-2 rounded-full hover:bg-orange-700 transition-colors font-semibold">
                        Add
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
        <!-- How It Works -->
<section class="px-8 py-16 max-w-6xl mx-auto w-full text-center">
    <h2 class="text-3xl font-bold mb-2">How It Works</h2>
    <p class="text-gray-500 mb-16">Four simple steps to delicious pizza</p>

    <div class="relative flex justify-between items-start">

        <!-- Verbindingslijn -->
        <div class="absolute top-10 left-16 right-16 h-0.5 bg-orange-200 z-0"></div>

        <!-- Stap 1 -->
        <div class="relative z-10 flex flex-col items-center w-1/4 px-4">
            <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center text-white text-xl font-bold mb-6">01</div>
            <h3 class="font-bold text-lg mb-2">Choose Your Pizza</h3>
            <p class="text-gray-500 text-sm">Browse our menu and select your favorite pizza</p>
        </div>

        <!-- Stap 2 -->
        <div class="relative z-10 flex flex-col items-center w-1/4 px-4">
            <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center text-white text-xl font-bold mb-6">02</div>
            <h3 class="font-bold text-lg mb-2">Customize</h3>
            <p class="text-gray-500 text-sm">Add extra toppings or create your own combination</p>
        </div>

        <!-- Stap 3 -->
        <div class="relative z-10 flex flex-col items-center w-1/4 px-4">
            <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center text-white text-xl font-bold mb-6">03</div>
            <h3 class="font-bold text-lg mb-2">Order & Pay</h3>
            <p class="text-gray-500 text-sm">Secure checkout with multiple payment options</p>
        </div>

        <!-- Stap 4 -->
        <div class="relative z-10 flex flex-col items-center w-1/4 px-4">
            <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center text-white text-xl font-bold mb-6">04</div>
            <h3 class="font-bold text-lg mb-2">Enjoy</h3>
            <p class="text-gray-500 text-sm">Receive your fresh, hot pizza and enjoy!</p>
        </div>

    </div>
</section>

        <!-- Footer -->
        <footer class="mt-auto py-6 bg-white text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} PizzaHub. All rights reserved.
        </footer>

    </body>
</html>
