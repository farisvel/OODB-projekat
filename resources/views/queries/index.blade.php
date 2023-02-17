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
                    <h1>Upit 1: Pisci koji pisu zanr: Automobili</h1>
                    <hr/>
                    @foreach($pisci as $pisci)
                    <p>{{$loop->iteration}}. {{$pisci->name}} - {{$pisci->brojac}}</p>
                    @endforeach
                </div>
                <div>
                    <h1>Upit 2: Članci iz žanra Kultura u prvom mjesecu 2023 godine</h1>
                    <hr/>
                    @foreach($clanci as $clanci)
                    <p>{{$loop->iteration}}.  {{$clanci->name}}</p>
                    @endforeach
                </div>
                <div align="center"><br>
                    <h1>Upit 3: Citaoci koji imaju najvise pretplata</h1>
                    <hr/>
                    @foreach($csnp as $csnp)
                    <p>{{$loop->iteration}}.  {{$csnp->reader_id}}</p>
                    @endforeach
                </div>
                <div align="center"><br>
                    <h1>Upit 4: Pretplate za odredjeni zanr u nekom periodu</h1>
                    <hr/>
                    @foreach($pretplate as $pretplate)
                    <p>{{$loop->iteration}}.  {{$pretplate->datum}}</p>
                    @endforeach
                </div>
                <div align="center"><br>
                    <h1>Upit 5: Pretplate za odredjeni zanr u nekom periodu nekog citaoca</h1>
                    <hr/>
                    @foreach($citaoci as $citaoci)
                    <p>{{$loop->iteration}}.  {{$citaoci->reader_id}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

