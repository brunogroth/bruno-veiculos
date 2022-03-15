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