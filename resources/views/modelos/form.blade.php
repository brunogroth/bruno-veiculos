<div class="row col-12 col-md-10 col-lg-7 col-xl-6">
    <div class="col-12 col-md-6">
        <label for="marca" class="form-label">Marca</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <select class="custom-select" id="marca_id" name="marca_id">
                @foreach ($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->descricao}}</option>
                @endforeach
                </select>
            </div>
      
        @if($errors->has('marca'))
        <div class="alert alert-danger p-2">
            @foreach($errors->get('marca') as $error)
            <p> {{$error}} </p>
            @endforeach
        </div>
      @endif
        </div>
        <div class="col-12 col-md-6">
            <label for="descricao" class="form-label">Modelo</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
            @if($errors->has('descricao'))
            <div class="alert alert-danger p-2">
                @foreach($errors->get('descricao') as $error)
                <p> {{$error}} </p>

                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
<div class="row g-12 mt-3">
    <div class="col-6" >
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>