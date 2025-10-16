<x-layout>
  <div class="container">
    <div class="row justify-content-center mt-5 text">
      <div class="col-12 col-md-6">
          <h1 class="mb-4">Tutti gli articoli del blog</h1>

          <x-card/>

           @foreach($articles as $article)
      <div class="card mb-3 mt-5">
        <div class="card-body">
          <h3>{{ $article->title }}</h3>
          <h5>{{ $article->subtitle }}</h5>
          <p>{{ Str::limit($article->body, 150) }}</p>
          <a href="{{ route('articles.show', $article) }}" class="btn btn-primary">Dettagli</a>
          <a href="{{ route('articles.edit', $article) }}" class="btn btn-primary">modifica</a>

        <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>



        </div>
      </div>
    @endforeach

    
    @if($articles->isEmpty())
      <p class="my-5">Nessun articolo presente.</p>
    @endif
    </div>

      </div>
 
  </div>
</x-layout>
