<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Pisci-Uredjivanje') }}
        </h2>
    </x-slot> 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($writers as $writer)
                    <form method="POST" action="{{ route('update_writer') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$writer->id}}"/>
                        <div>
                            <x-jet-label for="name" value="{{ __('Ime i prezime') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$writer->name}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-jet-label for="bio" value="{{ __('Kratka biografija') }}" />
                            <x-jet-input id="bio" class="block mt-1 w-full" type="text" name="bio" value="{{$writer->bio}}" required autofocus />
                        </div>


                        <div class="mt-4">
                            <x-jet-label for="genre" value="{{ __('Zanr') }}" />
                            <select id="genre" name="genre" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option>Odaberi</option>
                                @foreach ($genres as $genre)
                                <option value="{{$genre->id}}"
                                @if($writer->genre == $genre->id) selected
                                @endif->{{$genre->name}} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mt-4">
                            <x-jet-label for="contact" value="{{ __('Kontakt podaci') }}" />
                            <x-jet-input id="contact" class="block mt-1 w-full" type="text" name="contact" value="{{$writer->contact}}" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-jet-button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
</x-app-layout>