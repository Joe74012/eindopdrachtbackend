<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <h1 class="text-2xl font-bold mb-6">Contact Berichten</h1>

        @if(session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow p-6">

            <table class="w-full text-left">
                <thead>
                <tr class="border-b">
                    <th class="py-2">Naam</th>
                    <th>Email</th>
                    <th>Onderwerp</th>
                    <th class="text-right">Acties</th>
                </tr>
                </thead>

                <tbody>
                @foreach($contacts as $contact)
                    <tr class="border-b">
                        <td class="py-3">{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>

                        <td class="text-right space-x-2">

                            <a href="{{ route('contacts.show', $contact) }}"
                               class="text-blue-500">Bekijk</a>

                            <form action="{{ route('contacts.destroy', $contact) }}"
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
