<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <h1 class="text-2xl font-bold mb-6">Nieuw Gerecht</h1>

        <form action="{{ route('gerechten.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="bg-white p-6 rounded-2xl shadow">

            @csrf

            <!-- NAAM -->
            <label class="block font-semibold mb-1">Naam</label>
            <input type="text" name="naam"
                   placeholder="Bijv. Margherita"
                   class="w-full border p-2 mb-4 rounded">

            <!-- BESCHRIJVING -->
            <label class="block font-semibold mb-1">Beschrijving</label>
            <textarea name="beschrijving"
                      placeholder="Omschrijving van het gerecht"
                      class="w-full border p-2 mb-4 rounded"></textarea>

            <!-- PRIJS -->
            <label class="block font-semibold mb-1">Prijs</label>
            <input type="number" step="0.01" name="prijs"
                   placeholder="Bijv. 9.99"
                   class="w-full border p-2 mb-4 rounded">

            <label class="block font-semibold mb-1">Categorie</label>

            <select name="categorie"
                    class="w-full border p-2 mb-4 rounded bg-white">

                <option value="">Kies een categorie</option>
                <option value="classic">Classic</option>
                <option value="specialty">Specialty</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="premium">Premium</option>

            </select>

            <!-- AFBEELDING -->
            <label class="block font-semibold mb-1">Afbeelding</label>
            <input type="file"
                   name="image"
                   class="w-full border p-2 mb-4 rounded">

            <!-- BUTTON -->
            <button class="bg-orange-600 text-white px-4 py-2 rounded">
                Opslaan
            </button>

        </form>

    </div>

</x-app-layout>
