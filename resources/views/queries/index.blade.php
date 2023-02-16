<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upiti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">
                <div>
                    <h1>Upit 1</h1>
                    <hr/>
                    @foreach($pisci as $pisci)
                    <p>{{$loop->iteration}}. {{$pisci->name}} - {{$pisci->brojac}}</p>
                    @endforeach
                </div>
                <div>
                    <h1>Upit 2</h1>
                    <hr/>
                    <p>1. Prvi upit</p>
                </div>
                <div>
                    <h1>Upit 3</h1>
                    <hr/>
                    <p>1. Prvi upit</p>
                </div>
                <div>
                    <h1>Upit 4</h1>
                    <hr/>
                    <p>1. Prvi upit</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

