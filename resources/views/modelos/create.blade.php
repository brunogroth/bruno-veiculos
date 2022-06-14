@extends('layout.template', ['title' => 'Cadastro de Veículos'])

@push('styles')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endpush

@section('content')
    @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
          
          @endforeach
      </div>
    @endif
    <div class="container">
        <div class="row g-12 mt-3">
            <div class="col-auto">
                <h1> Cadastre um novo Modelo </h1>
            </div>
        </div>
        <form action="{{route('modelo.store')}}" method="POST">
        @csrf
            @include('modelos.form')
        </form>
    </div>
@endsection
    
 @push('scripts')