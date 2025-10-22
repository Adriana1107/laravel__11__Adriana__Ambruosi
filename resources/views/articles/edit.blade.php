<x-layout>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-md-6">

        <h1>Modifica il tuo articolo</h1>

        <x-display-error />

        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input 
              type="text" 
              class="form-control" 
              id="title" 
              name="title" 
              value="{{ old('title', $article->title) }}" 
              required
            >
          </div>

          <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input 
              type="text" 
              class="form-control" 
              id="subtitle" 
              name="subtitle" 
              value="{{ old('subtitle', $article->subtitle) }}" 
              required
            >
          </div>

          <div class="mb-3">
            <label for="body" class="form-label">Contenuto</label>
            <textarea 
              class="form-control" 
              id="body" 
              name="body" 
              rows="5" 
              required
            >{{ old('body', $article->body) }}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Modifica</button>
        </form>

      </div>
    </div>
  </div>
</x-layout>
