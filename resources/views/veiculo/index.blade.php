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

          </ul>
    </nav>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-3">
                <form class="form-inline my-2 my-lg-0 text-end md-8" action="{{route('veiculo.index')}}" method="get">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
          
          @endforeach
      </div>
    @endif
    <div class="container">
      <div class="row g-12 mt-3">
          @if(Session::has('status'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
          @endif
            <div class="col-auto">
                <h1> Veículos </h1>
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
            <td><span class="plate">{{$veiculo->placa}}</span></td>
            <td>{{$veiculo->marca}}</td>
            <td>{{$veiculo->modelo}}</td>
            <td>R$<span class="money">{{$veiculo->valor_venda}}</span></td>
            <td><a href="{{route('veiculo.edit', $veiculo->id)}}" class="btn btn-warning">Editar</button></td>
            <td><form action="{{route('veiculo.destroy', $veiculo->id)}}" method="POST">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger"><img src="">Excluir</button>
            </form></td>
          </tr>
        @endforeach
      
        </tbody>
      </table>
      <div class="col text-center">
        {{ $veiculos->appends(['search'=>$search])->links() }}
       </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.plate').mask('SSS-0A00');
          });
    </script>
    {{-- <script>
      new Noty({
        text: 'Some notification text',
      }).show();
  </script> --}}

</body>
</html>