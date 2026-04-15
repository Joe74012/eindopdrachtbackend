<x-app-layout>

    <div class="p-10 bg-[#F5EBE0] min-h-screen">

        <h1 class="text-2xl font-bold mb-6">Bericht bekijken</h1>

        <div class="bg-white p-6 rounded-2xl shadow">

            <p class="mb-2"><strong>Naam:</strong> {{ $contact->name }}</p>
            <p class="mb-2"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="mb-2"><strong>Telefoon:</strong> {{ $contact->phone }}</p>
            <p class="mb-2"><strong>Onderwerp:</strong> {{ $contact->subject }}</p>

            <div class="mt-4">
                <strong>Bericht:</strong>
                <p class="mt-2 text-gray-700">
                    {{ $contact->message }}
                </p>
            </div>

            <a href="{{ route('contacts.index') }}"
               class="inline-block mt-6 text-blue-500">
                ← Terug
            </a>

        </div>

    </div>

</x-app-layout>
