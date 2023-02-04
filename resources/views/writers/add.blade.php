<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Auta-Dodavanje') }}
        </h2>
    </x-slot>
 -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_writer') }}">
                        @csrf
                        <div>
                            <x-jet-label for="name" value="{{ __('Ime i prezime') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-jet-label for="bio" value="{{ __('Kratka biografija') }}" />
                            <x-jet-input id="bio" class="block mt-1 w-full" type="text" name="bio" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-jet-label for="genre" value="{{ __('Zanr') }}" />
                            <x-jet-input id="genre" class="block mt-1 w-full" type="number" name="genre" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-jet-label for="contact" value="{{ __('Kontakt podaci') }}" />
                            <x-jet-input id="contact" class="block mt-1 w-full" type="text" name="contact" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- </x-app-layout> -->