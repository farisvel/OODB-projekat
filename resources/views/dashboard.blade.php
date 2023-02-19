
<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna stranica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- <body class="bg-blue-200 bg-gradient-to-tr from-blue-200 to-blue-400 min-h-screen">
                    <div class="mt-8">
                        <div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden">
                            <div class="current-weather flex items-center justify-between px-4 py-6"> -->

                      <x-weather-widget :currentWeather="$currentWeather"/>      

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
