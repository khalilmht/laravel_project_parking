<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand  text-light" href="#">Sahara Motors Tchad APP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            {{-- <a class="nav-link active  text-light" aria-current="page" href="#">Acceuil</a> --}}
            <a class="nav-link active  text-light" aria-current="page" href="/">Voitures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-light" href="{{route('list.client')}}">Clients</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item  text-light" href="#">Action</a></li>
              <li><a class="dropdown-item  text-light" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item  text-light" href="#">Something else here</a></li>
            </ul>
          </li>
  
        </ul>
  
      </div>
    </div>
  </nav>
  