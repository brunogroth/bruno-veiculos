<nav>
    <ul class="nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Veículo</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('veiculo.create')}}">Cadastrar veículo</a></li>
            </ul>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="/veiculo">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/veiculo/create">Create</a>
        </li>
      </ul>
</nav>