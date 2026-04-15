<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <h1 class="text-2xl font-bold mb-6">Gerecht Bewerken</h1>

        <form action="{{ route('gerechten.update', $gerecht) }}"
              method="POST"
              enctype="multipart/form-data"
              class="bg-white p-6 rounded-2xl shadow">

            @csrf
            @method('PUT')

            <!-- NAAM -->
            <label class="block font-semibold mb-1">Naam</label>
            <input type="text" name="naam" value="{{ $gerecht->naam }}"
                   class="w-full border p-2 mb-4 rounded">

            <!-- BESCHRIJVING -->
            <label class="block font-semibold mb-1">Beschrijving</label>
            <textarea name="beschrijving"
                      class="w-full border p-2 mb-4 rounded">{{ $gerecht->beschrijving }}</textarea>

            <!-- PRIJS -->
            <label class="block font-semibold mb-1">Prijs</label>
            <input type="number" step="0.01" name="prijs" value="{{ $gerecht->prijs }}"
                   class="w-full border p-2 mb-4 rounded">

            <!-- CATGORIE -->
            <label class="block font-semibold mb-1">Categorie</label>
            <input type="text" name="categorie" value="{{ $gerecht->categorie }}"
                   class="w-full border p-2 mb-4 rounded">

            <!-- OUDE AFBEELDING -->
            <label class="block font-semibold mb-1">Huidige afbeelding</label>

            @if($gerecht->afbeelding)
                <img src="{{ asset('storage/' . $gerecht->afbeelding) }}"
                     class="w-40 h-40 object-cover rounded mb-4">
            @endif

            <!-- NIEUWE AFBELDING -->
            <label class="block font-semibold mb-1">Nieuwe afbeelding</label>
            <input type="file" name="image"
                   class="w-full border p-2 mb-4 rounded">

            <!-- BUTTON -->
            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Update
            </button>

        </form>

    </div>

</x-app-layout>
