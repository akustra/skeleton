<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden ">

                <h1 class="text-xl font-semibold">Edycja klienta</h1>
                
                <div class="bg-white">

                    <form action="/clients/{{ $client->id }}" method="PUT">
                        @csrf

                        <input type="text" name="surname" placeholder="Imię" value="{{ $client->surname ?? '' }}">
                        <input type="text" name="name" placeholder="Nazwisko" value="{{ $client->name ?? '' }}">

                        <button type="submit">Zapisz</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>