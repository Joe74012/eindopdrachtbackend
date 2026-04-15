<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <h1 class="text-2xl font-bold mb-6">Gerecht Bewerken</h1>

        <form action="{{ route('gerechten.update', $gerecht) }}" method="POST" class="bg-white p-6 rounded-2xl shadow">
            @csrf
            @method('PUT')

            <input type="text" name="naam" value="{{ $gerecht->naam }}"
                   class="w-full border p-2 mb-4 rounded">

            <textarea name="beschrijving"
                      class="w-full border p-2 mb-4 rounded">{{ $gerecht->beschrijving }}</textarea>

            <input type="number" step="0.01" name="prijs" value="{{ $gerecht->prijs }}"
                   class="w-full border p-2 mb-4 rounded">

            <input type="text" name="categorie" value="{{ $gerecht->categorie }}"
                   class="w-full border p-2 mb-4 rounded">

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Update
            </button>
        </form>

    </div>

</x-app-layout>
