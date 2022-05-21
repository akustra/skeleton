<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden ">

                <h1 class="text-xl font-semibold">Nowy klient</h1>
                
                <div class="bg-white">

                    <form action="/clients" method="POST">
                        @csrf

                        <input type="text" name="surname" placeholder="Imię"/>
                        <input type="text" name="name" placeholder="Nazwisko"/>

                        <button type="submit">Zapisz</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>