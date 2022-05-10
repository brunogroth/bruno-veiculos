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
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Marca</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('marca.index')}}">Consultar Marcas</a></li>
              <li><a class="dropdown-item" href="{{ route('marca.index')}}">Cadastrar Marca</a></li>
            </ul>
          </li>
        <li class="nav-item justify-content-end">
          <form action="destroy" method="{{route('logout')}}">
          <button class="nav-link btn btn-danger" type="submit" style="color:white">Logoff</button>
          </form>
        </li>
      </ul>
</nav>