<x-fardelli.layout class="bg-lime-800">

    <x-fardelli.navbar />

    {{-- MANIFESTO --}}
    <main class="container mx-auto p-4">

        <x-fardelli.title title="ManifestO"></x-fardelli.title>


        <div class="lg:p-4 p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 lg:mt-20 mt-10">

            <img class="w-full rounded-xl shadow-xl" src="{{ asset('img/csm_fardello_c7318303cf.jpg') }}" alt="">

            <div class="text-xl md:text-center px-6 bg-white rounded-xl overflow-hidden shadow-xl md:col-span-2">
                <h2 class="text-3xl py-10">Pensieri Confusi</h2>
                <div class="text-xl pb-2">
                    <p>Stufi dei conflitti binari, bianco/nero, bello/brutto, bene/male,</p>
                    <p>vogliamo idee universali con tutte le sfumature e le differenze.</p>
                    <p>Vogliamo pensare tridimensionalmente.</p>
                    <br />
                    <p>Vogliamo che la persona sia libera nella scelta qualunque essa sia</p>
                    <p>e vogliamo che questa libertà sia responsabile.</p>
                    <p>Vogliamo essere consapevoli delle nostre vite</p>
                    <p>e potere agire di conseguenza.</p>
                    <br />
                    <p>Vogliamo consapevolmente vivere.</p>
                    <p>Vogliamo consapevolmente esserci.</p>
                </div>
            </div>

            <img class="w-full rounded-xl shadow-xl" src="{{ asset('img/pexels-artsy-solomon-1108822.jpg') }}" alt="">

            <img class="w-full rounded-xl shadow-xl" src="{{ asset('img/pexels-the-lost-ninja-3849640.jpg') }}" alt="">

            <img class="w-full rounded-xl shadow-xl" src="{{ asset('img/pexels-ln-dangol-2409958.jpg') }}" alt="">

        </div>

</x-fardelli.layout>