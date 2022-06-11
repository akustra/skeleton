<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden ">

                <div class="mb-8">
                    <h1 class="text-xl font-semibold">Linki</h1>
                </div>

                <div class="bg-white mb-8">

                    @foreach($links as $link)

                    @php
                    $clazz = 'bg-gray-100';
                    if(\Str::contains($link->title, 'Rosja')) {
                        $clazz = 'bg-red-300';
                    }
                    @endphp


                    <div class="flex {{ $clazz }} p-2 mb-2">
                        <div class="flex-grow ">
                            {{ $link-> title ?? '[Brak tytułu]'}}
                        </div>
                        <div>

                            <a href="{{ $link->url }}" target="blank" class="hover:text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div>{{ $links->links() }}</div>
            </div>
        </div>
    </div>
</x-guest-layout>