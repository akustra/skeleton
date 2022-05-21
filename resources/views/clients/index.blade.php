<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden ">

                <h1 class="text-xl font-semibold">Klienci</h1>

                <div>
                    <a href="/clients/create">Nowy klient</a>
                </div>

                <div class="bg-white">

                    @foreach($clients as $client)
                    <div class="flex gap-8 bg-gray-100 p-4 shadow-xl hover:bg-gray-200">
                        <div class="flex-grow mb-8 ">
                            <div class="font-bold text-sm">Imię</div>
                            <div class="text-lg text-red-900">{{ $client->surname ?? '-' }}</div>
                            <div class="font-bold text-sm">Nazwisko</div>
                            <div class="text-lg text-red-900">{{ $client->name ?? '-' }}</div>
                            <div class="font-bold text-sm">W systemie</div>
                            <div class="text-lg text-red-900">{{ $client->created_at ?? '-' }}</div>
                        </div>
                        <div>
                            <a href="/clients/{{ $client->id }}/edit">Edycja</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>