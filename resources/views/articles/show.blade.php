<x-layout>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-md-8">
        <h1>{{ $article->title }}</h1>
        <p class="text-muted">{{ $article->subtitle }}</p>
        <p>{{ $article->body }}</p>
        <p class="text-muted">Creato da: {{ $article->user->name }}</p>

        <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-3">Torna agli articoli</a>

        @auth
          @if ($article->user_id == Auth::id())
            <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning mt-3">Modifica</a>

            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline mt-3">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
          @endif
        @endauth
      </div>
    </div>
  </div>
</x-layout>
