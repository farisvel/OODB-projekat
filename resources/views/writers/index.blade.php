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
                
                <div class="p-2">
                    <h1 class="font-xl">Ovdje ce biti izlistani autori</h1><br>
                    @foreach ($writers as $writer)
                        <div class="p-2"> {{$writer->name}} - {{$writer->bio}} - {{$writer->genre}} - {{$writer->contact}}</div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('delete_writer') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$writer->id}}">
                                    <div class="p-2">
                                        <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                            {{__('Obrisi') }}
                                        </button>
                                    </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_writer') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$writer->id}}">
                                    <div class="p-2">
                                        <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                            {{__('Uredi') }}
                                        </button>
                                    </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
