@extends('layout.template', ['title' => 'Cadastro de Veículos'])

@push('styles')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endpush

@section('content')
    <div class="container">
        <div class="row g-12 mt-3">
            <div class="col-auto">
                <h1> Cadastre um novo veículo </h1>
            </div>
        </div>
        <form action="{{route('veiculo.store')}}" method="POST">
        @csrf
            @include('veiculo.form')
        </form>
    </div>
@endsection
    
 @push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.plate').mask('SSS-0A00');
          });
    </script>
@endpush