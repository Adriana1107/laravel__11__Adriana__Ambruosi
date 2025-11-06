
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $article->title }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $article->subtitle }}</h6>
    <p class="card-text">{{ Str::limit($article->body, 100) }}</p>

    <p>Creato da: {{ $article->user->name }}</p>

    @auth
        @if ($article->user_id == Auth::id())
            <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">Modifica</a>
            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        @endif
    @endauth
  </div>
</div>

