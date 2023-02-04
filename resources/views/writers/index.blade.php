<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pisci') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_writer" class="m-2 p-2 text-xl">Dodaj autora</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <div class="p-2">
                    <h1 class="font-xl">Ovdje ce biti izlistani autori</h1><br>
                    @foreach ($writers as $writer)
                        <p class="p-2"> {{$writer->name}} - {{$writer->bio}} - {{$writer->genre}} - {{$writer->contact}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
