<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículo - Bruno Veículos</title>
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
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
    </nav>
    <div class="container">
        <div class="row g-12 mt-3">
            <div class="col-auto">
                <h1> Cadastre um novo veículo </h1>
            </div>
        </div>
        <form action="{{route('veiculo.store')}}" method="POST">
            @csrf
            <div class="row col-12 col-md-10 col-lg-7 col-xl-6">
                <div class="col-12 col-md-6">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" id="placa" name="placa" class="form-control plate" maxlength="7">
                    @if($errors->has('placa'))
                    <div class="alert alert-danger p-2">
                        @foreach($errors->get('placa') as $error)
                        <p> {{$error}} </p>
                        
                        @endforeach
                    </div>
                  @endif
                </div>
                <div class="col-12 col-md-6">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" id="marca" name="marca" class="form-control">
                    @if($errors->has('marca'))
                    <div class="alert alert-danger p-2">
                        @foreach($errors->get('marca') as $error)
                        <p> {{$error}} </p>
                        
                        @endforeach
                    </div>
                  @endif
                </div>
                <div class="col-12 col-md-6">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" id="modelo" name="modelo" class="form-control">
                    @if($errors->has('modelo'))
                    <div class="alert alert-danger p-2">
                        @foreach($errors->get('modelo') as $error)
                        <p> {{$error}} </p>
                        
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="col-12 col-md-6">
                    <label for="valorvenda" class="form-label">Valor de Venda</label>
                    <input type="text" name="valor_venda" class="form-control money">
                    @if($errors->has('valor_venda'))
                    <div class="alert alert-danger p-2">
                        @foreach($errors->get('valor_venda') as $error)
                        <p> {{$error}} </p>
                        
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            <div class="row g-12 mt-3">
                <div class="col-6" >
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
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
</body>
</html>