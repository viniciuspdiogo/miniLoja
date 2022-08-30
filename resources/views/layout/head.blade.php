<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Louja</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('categories')}}">Categorias</a>
          </li>
          @if(Auth::user())
            <li class="nav-item">
              <a class="nav-link" href="{{route('orders')}}">Pedidos</a>
            </li>
          @endif
        </ul>
        <div class="d-flex">
            <a class="nav-link text-muted" href="{{route('cart')}}" title="Ver Carrinho"><i class="fa-solid fa-cart-shopping"></i></a>
            @if (Auth::user())
              <a class="nav-link text-muted" href="{{route('logout')}}" title="Logout">Logout {{Auth::user()->name}}</a>
            @else
              <a class="nav-link text-muted" href="{{route('login')}}" title="Fazer Login">Login</a>    
            @endif
        </div>
      </div>
    </div>
  </nav>