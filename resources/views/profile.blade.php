<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2 class="text-white text-center mt-5">Profilo di {{ Auth::user()->name }}</h2>
        <h3 class="text-white text-center">I tuoi articoli:</h3>
            
            @forelse (Auth::user()->posts as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article"/>
                </div>
            @empty
                <h3 class="my-5 text-center text-secondary">non hai caricato nessun articolo</h3>
            @endforelse


          
            
        </div>
    </div>
</x-layout>