<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Gerechten Beheren</h1>

            <a href="{{ route('gerechten.create') }}"
               class="bg-orange-500 text-white px-4 py-2 rounded-lg">
                + Nieuw Gerecht
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">

            @if(session('success'))
                <div class="mb-4 text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            <table class="w-full text-left">
                <thead>
                <tr class="border-b">
                    <th class="py-2">Naam</th>
                    <th>Prijs</th>
                    <th>Categorie</th>
                    <th class="text-right">Acties</th>
                </tr>
                </thead>

                <tbody>
                @foreach($gerechten as $gerecht)
                    <tr class="border-b">
                        <td class="py-3">{{ $gerecht->naam }}</td>
                        <td>€{{ $gerecht->prijs }}</td>
                        <td>{{ $gerecht->categorie }}</td>

                        <td class="text-right space-x-2">
                            <a href="{{ route('gerechten.edit', $gerecht) }}"
                               class="text-blue-500">Edit</a>

                            <form action="{{ route('gerechten.destroy', $gerecht) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')

                                <button class="text-red-500"
                                        onclick="return confirm('Weet je het zeker?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>

    </div>

</x-app-layout>
