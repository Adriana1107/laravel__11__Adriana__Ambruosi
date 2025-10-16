<x-layout>
  <div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6">

        <h1>{{ $article->title }}</h1>
        <p> {{ $article->subtitle }}</p>
        <p>{{ $article->body }}</p>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-3">Torna agli articoli</a>

        </div>
    </div>
  </div>
</x-layout>
