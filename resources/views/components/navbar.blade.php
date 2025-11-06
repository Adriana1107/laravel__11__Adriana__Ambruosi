<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">I nostri articoli!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('articles.create') }}">Crea articolo</a>
        </li>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('contactUs') }}">Contattaci!</a>
        </li>

        
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login')}}">Accedi</a></li>
            <li><a class="dropdown-item" href="{{ route('register')}}">Registrati</a></li>
          <li>
            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
          </li>
          @endguest


          @auth
           <li class="nav-link active">
            <a href="{{ route('user.profile') }}">Profilo personale</a>
           </li>
            <li class="nav-item">
               <span class="nav-link"> Ciao,{{ Auth::user()->name }}</span>
           </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                      <button type="submit" class="nav-link btn btn-link" style="display:inline">
                          Logout
                      </button>
                  </form>
            </li>
            @endauth
      </ul>
    </div>
  </div>
</nav>