<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact – PizzaHub</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-black bg-[#F5EBE0] min-h-screen flex flex-col" style="font-family: 'Instrument Sans', sans-serif;">

<!-- Header / Nav -->
<header class="flex justify-between items-center px-8 py-4 bg-white shadow-md sticky top-0 z-50">
    <h2 class="text-xl font-bold">PizzaHub</h2>

    <nav class="hidden lg:flex gap-6">
        <a href="/" class="font-semibold hover:text-orange-600 transition-colors">Home</a>
        <a href="{{ route('menu.index') }}" class="font-semibold hover:text-orange-600 transition-colors">Menu</a>
        <a href="{{ route('about') }}" class="font-semibold hover:text-orange-600 transition-colors">About</a>
        <a href="{{ route('contact') }}" class="font-semibold transition-colors" style="color: #E65100;">Contact</a>
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

<!-- Contact Form Section -->
<section class="px-8 py-16 max-w-4xl mx-auto w-full">
    <div class="bg-white rounded-2xl shadow p-10">

        <!-- Title -->
        <div class="flex items-center gap-3 mb-8">
            <div class="w-11 h-11 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: #E65100;">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"/>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                </svg>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold">Send us a Message</h2>
        </div>

        @if(session('success'))
            <div class="mb-6 px-5 py-4 rounded-xl text-sm font-semibold text-white" style="background-color: #E65100;">
                {{ session('success') }}
            </div>
        @endif

        <form class="space-y-6">

            <!-- Name + Phone -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold mb-2 text-gray-800">Your Name</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="John Doe"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:border-transparent transition"
                        style="focus-ring-color: #E65100;"
                        onfocus="this.style.boxShadow='0 0 0 2px #E65100'"
                        onblur="this.style.boxShadow='none'"
                    >
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2 text-gray-800">Phone Number</label>
                    <input
                        type="tel"
                        name="phone"
                        placeholder="+1 (555) 000-0000"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm placeholder-gray-400 focus:outline-none transition"
                        onfocus="this.style.boxShadow='0 0 0 2px #E65100'"
                        onblur="this.style.boxShadow='none'"
                    >
                </div>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold mb-2 text-gray-800">Email Address</label>
                <input
                    type="email"
                    name="email"
                    placeholder="john@example.com"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm placeholder-gray-400 focus:outline-none transition"
                    onfocus="this.style.boxShadow='0 0 0 2px #E65100'"
                    onblur="this.style.boxShadow='none'"
                >
            </div>

            <!-- Subject -->
            <div>
                <label class="block text-sm font-semibold mb-2 text-gray-800">Subject</label>
                <input
                    type="text"
                    name="subject"
                    placeholder="Order inquiry, feedback, etc."
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm placeholder-gray-400 focus:outline-none transition"
                    onfocus="this.style.boxShadow='0 0 0 2px #E65100'"
                    onblur="this.style.boxShadow='none'"
                >
            </div>

            <!-- Message -->
            <div>
                <label class="block text-sm font-semibold mb-2 text-gray-800">Message</label>
                <textarea
                    name="message"
                    rows="6"
                    placeholder="Tell us how we can help you..."
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 text-sm placeholder-gray-400 focus:outline-none transition resize-none"
                    onfocus="this.style.boxShadow='0 0 0 2px #E65100'"
                    onblur="this.style.boxShadow='none'"
                ></textarea>
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="w-full py-4 rounded-full text-white font-semibold text-base flex items-center justify-center gap-2 transition-colors"
                style="background-color: #E65100;"
                onmouseover="this.style.backgroundColor='#BF360C'"
                onmouseout="this.style.backgroundColor='#E65100'"
            >
                Send Message
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"/>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                </svg>
            </button>

        </form>
    </div>
</section>

<!-- FAQ Section -->
<section class="px-8 py-16 w-full bg-[#F5EBE0]">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-2">Frequently Asked Questions</h2>
        <p class="text-gray-500 mb-12">Quick answers to common questions</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">

            <div class="bg-white rounded-2xl p-7 shadow">
                <p class="font-bold mb-3">
                    <span style="color: #E65100;">Q:</span>
                    &nbsp;Do you offer delivery?
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">Yes! We deliver within a 5-mile radius. Orders over $25 get free delivery.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow">
                <p class="font-bold mb-3">
                    <span style="color: #E65100;">Q:</span>
                    &nbsp;Can I customize my pizza?
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">Absolutely! You can add or remove any toppings to create your perfect pizza.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow">
                <p class="font-bold mb-3">
                    <span style="color: #E65100;">Q:</span>
                    &nbsp;Do you have vegan options?
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">Yes, we offer vegan cheese and a variety of fresh vegetable toppings.</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow">
                <p class="font-bold mb-3">
                    <span style="color: #E65100;">Q:</span>
                    &nbsp;How long does delivery take?
                </p>
                <p class="text-gray-500 text-sm leading-relaxed">Typical delivery time is 30-45 minutes, depending on your location and order volume.</p>
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
