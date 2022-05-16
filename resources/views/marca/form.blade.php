<div class="row col-12 col-md-10 col-lg-7 col-xl-6">
    <div class="col-12 col-md-6">
        <label for="descricao" class="form-label">Nome da Marca</label>
        <input type="text" id="descricao" name="descricao" class="form-control" maxlength="50">
        @if($errors->has('descricao'))
        <div class="alert alert-danger p-2">
            @foreach($errors->get('descricao') as $error)
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