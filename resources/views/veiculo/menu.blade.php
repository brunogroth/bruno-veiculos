<nav>
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('veiculo.index')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Veículo</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('veiculo.index')}}">Consultar veículos</a></li>
              <li><a class="dropdown-item" href="{{ route('veiculo.create')}}">Cadastrar veículo</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Marcas</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('marca.index')}}">Consultar Marcas</a></li>
              <li><a class="dropdown-item" href="{{ route('marca.create')}}">Cadastrar Marca</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Modelos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('modelo.index')}}">Consultar Modelos</a></li>
              <li><a class="dropdown-item" href="{{ route('modelo.create')}}">Cadastrar Modelos</a></li>
            </ul>
          </li>
        <li class="nav-item">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="nav-link btn btn-danger" type="submit" style="color:white">Logoff</button>
          </form>
        </li>
      </ul>
</nav>