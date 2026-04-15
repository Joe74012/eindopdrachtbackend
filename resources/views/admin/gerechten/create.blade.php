<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <h1 class="text-2xl font-bold mb-6">Nieuw Gerecht</h1>

        <form action="{{ route('gerechten.store') }}" method="POST" class="bg-white p-6 rounded-2xl shadow">
            @csrf

            <input type="text" name="naam" placeholder="Naam"
                   class="w-full border p-2 mb-4 rounded">

            <textarea name="beschrijving" placeholder="Beschrijving"
                      class="w-full border p-2 mb-4 rounded"></textarea>

            <input type="number" step="0.01" name="prijs" placeholder="Prijs"
                   class="w-full border p-2 mb-4 rounded">

            <input type="text" name="categorie" placeholder="Categorie"
                   class="w-full border p-2 mb-4 rounded">

            <button class="bg-orange-500 text-white px-4 py-2 rounded">
                Opslaan
            </button>
        </form>

    </div>

</x-app-layout>
