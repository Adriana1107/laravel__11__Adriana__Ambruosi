<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-around align-items-center">
            <div class="col-12 col-md-6 justify-content-center align-items-center">
                <h1 class="text-center mt-5">
                    CONTATTACI
                </h1>
            </div>
        </div>
        
        <div class="row justify-content-center align-items-center h-100">
            <h2 class="text-white display-4 text-center">scrivici una mail</h2>
            <div class="col-12 col-md-8 text-color">

@if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif

    <form action="{{route('contactUs.store')}}" method="post">
        @csrf 
        <div class="mb-3">
        <label for="user" class="form-label">Inserisci qui il tuo nome:</label>
        <input type="user" name="user" class="form-control" id="user" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Inserisci qui la tua mail:</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
   
    <div class="mb-3">
        <label for="message" class="form-label">Scrivi qui il tuo messaggio</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary mb-3">invia</button>
    </form>
            </div>
        </div>
    </div>
</x-layout>