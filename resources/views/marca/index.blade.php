@extends('layout.template', ['title' => 'Consulta de Marcas - Bruno Veículo'])

@push('styles')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endpush
@section('content')
<div class="container">
  <div class="row justify-content-end">
      <div class="col-3">
          <form class="form-inline my-2 my-lg-0 text-end md-8" action="{{route('marca.index')}}" method="get">
              <div style="display:inline-flex">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 pb-2" type="submit"><img width="16px" src="{{URL::asset('/images/search.png')}}"></button>
              </div>
          </form>
      </div>
  </div>
</div>

<div class="container">
    <div class="row g-4 mt-3">
      @if(Session::has('status'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
      @endif
        <div class="col-auto">
            <h1>Consulta de Marcas</h1>
        </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        
        @endforeach
    </div>
  @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
          </tr>
        </thead>
       
        <tbody>
          @foreach ($marcas as $marca)
          <tr>
              <th scope="row">{{$marca->id}}</th>
              <td>{{$marca->descricao}}</td>
             <td><a href=" #{{-- {{route('veiculo.edit', $veiculo->id)}}--}} " class="btn btn-warning pb-2"><img width="16px" src="{{URL::asset('/images/edit.png')}}"></a></td> 
              <td><form action="{{-- {{route('veiculo.destroy', $veiculo->id)}}--}}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form></td>
            </tr>
          @endforeach
@endsection
    
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endpush