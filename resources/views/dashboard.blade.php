<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <!-- TITLE -->
        <h1 class="text-3xl font-bold mb-2">Dashboard Overzicht</h1>
        <p class="text-gray-600 mb-8">
            Welkom terug! Hier is een overzicht van je restaurant.
        </p>

        <!-- STATS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

            <!-- GERECHTEN -->
            <div class="bg-white p-6 rounded-2xl shadow flex items-center justify-between">

                <div class="flex items-center gap-4">
                    <div class="bg-blue-500 text-white p-3 rounded-xl">
                        🍴
                    </div>

                    <div>
                        <p class="text-gray-500">Totaal Gerechten</p>
                        <h2 class="text-3xl font-bold">
                            {{ $dishesCount }}
                        </h2>
                    </div>
                </div>

                <span class="text-gray-400 text-xl">↗</span>
            </div>

            <!-- CONTACT -->
            <div class="bg-white p-6 rounded-2xl shadow flex items-center justify-between">

                <div class="flex items-center gap-4">
                    <div class="bg-green-500 text-white p-3 rounded-xl">
                        💬
                    </div>

                    <div>
                        <p class="text-gray-500">Contact Berichten</p>
                        <h2 class="text-3xl font-bold">
                            {{ $contactsCount }}
                        </h2>
                    </div>
                </div>

                <span class="text-gray-400 text-xl">↗</span>
            </div>

        </div>

        <!-- SNELLE ACTIES -->
        <div class="bg-white p-6 rounded-2xl shadow">
            <h2 class="text-xl font-bold mb-6">Snelle Acties</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- GERECHTEN -->
                <a href="{{ route('menu.index') }}"
                   class="flex items-center gap-4 border rounded-xl p-5 hover:shadow transition">

                    <div class="bg-orange-500 text-white p-3 rounded-xl">
                        🍽️
                    </div>

                    <div>
                        <h3 class="font-bold text-lg">
                            Gerechten Beheren
                        </h3>
                        <p class="text-gray-500 text-sm">
                            Voeg toe, bewerk of verwijder gerechten
                        </p>
                    </div>
                </a>

                <!-- CONTACT -->
                <a href="{{ route('contacts.index') }}"
                   class="flex items-center gap-4 border rounded-xl p-5 hover:shadow transition">

                    <div class="bg-green-500 text-white p-3 rounded-xl">
                        💬
                    </div>

                    <div>
                        <h3 class="font-bold text-lg">
                            Contact Berichten
                        </h3>
                        <p class="text-gray-500 text-sm">
                            Bekijk en beheer contact berichten
                        </p>
                    </div>
                </a>

            </div>
        </div>

    </div>

</x-app-layout>
