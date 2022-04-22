<nav>
    <ul class="nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Veículo</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('veiculo.create')}}">Cadastrar veículo</a></li>
            </ul>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('veiculo.index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('veiculo.create')}}">Create</a>
        </li>
        <li class="nav-item justify-content-end">
          <a class="nav-link btn btn-danger" style="color:white" href="#">Logoff</a>
        </li>
      </ul>
</nav>