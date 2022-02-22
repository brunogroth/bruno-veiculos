<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos - Bruno Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </ul>
    </nav>
    <div class="container">
        <div class="row g-12 mt-3">
            <div class="col-auto">
                <h1> Consulte seus veículos </h1>
            </div>
        </div>
    <table class="table">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Placa</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Valor de Venda</th>
          </tr>
        </thead>
       
        <tbody>
        @foreach ($veiculos as $veiculo)
        <tr>
            <th scope="row">{{$veiculo->id}}</th>
            <td>{{$veiculo->placa}}</td>
            <td>{{$veiculo->marca}}</td>
            <td>{{$veiculo->modelo}}</td>
            <td>{{$veiculo->valor_venda}}</td>
        </tr>
        @endforeach
        

        </tbody>
      </table>
      <div class="col text-center">
        {{ $veiculos->links() }}
       </div>
    </div>

</body>
</html>