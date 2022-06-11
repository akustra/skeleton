<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden ">

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div>
                        <h1 class="text-xl font-semibold">Klienci</h1>
                    </div>

                    <div class="text-right">
                        <div class="inline-block ml-4">
                            <a href="/clients/create" class="bg-red-900 text-white px-4 py-2 hover:bg-red-700">Nowy klient</a>
                        </div>

                        <div class="inline-block ml-4">
                            <form action="/search-clients" method="GET">
                                <input type="text" name="search" placeholder="Szukaj" />
                                <button type="submit" class="bg-gray-900 text-white px-4 py-2 hover:bg-gray-700">Szukaj</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bg-white mb-8">

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

                <div>{{ $clients->links() }}</div>
            </div>
        </div>
    </div>
</x-guest-layout>