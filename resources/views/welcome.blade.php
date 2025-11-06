<x-layout>
<div class="container">
    <div class="row">

    @if(session()->has('successMessage'))
    <div class="alert alert-success">
        {{ session('successMessage') }}
    </div>
    @endif
    @if(session()->has('errorMessage'))
    <div class="alert alert-danger">
        {{ session('errorMessage') }}
    </div>
    @endif
    



        <div class="col-12 col-md-8 title">
            BENVENUTI!
        </div>
    </div>
</div>

</x-layout>