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
    <div class="container">
        <div class="row g-12 mt-3">
            <div class="col-auto">
                <h1> Cadastre um novo veículo </h1>
            </div>
        </div>
        <form>
            <div class="row col-12 col-md-10 col-lg-7 col-xl-6">
                <div class="col-12 col-md-6">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" id="placa" class="form-control" maxlength="7">
                </div>
                <div class="col-12 col-md-6">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" id="marca" class="form-control" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" id="modelo" class="form-control" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="valorvenda" class="form-label">Valor de Venda</label>
                    <input type="text" class="form-control" required>
                </div>
            </div>
            <div class="row g-12 mt-3">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>