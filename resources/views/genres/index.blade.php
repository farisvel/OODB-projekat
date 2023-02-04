<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zanrovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Zanrovi koji su dostupni kroz newslettere</h1>
                    @foreach ($genres as $genre)
                        <p class="p-2"> {{$genre->id}}: {{$genre->name}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
