<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Formulario</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

</head>
<body>

  <div class="container">
        <br>
        <div class="row">
            <h2>Pagina de Contato com Laravel</h2>
        </div>
        <div class="row">
          <form action="/enviar" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label>Nome</label>
              <input type="text" name="nome" class="form-control" placeholder="Seu nome">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Seu e-mail">
            </div>
            <div class="form-group">
              <label>Mensagem</label>
              <textarea class="form-control" name="mensagem"></textarea>
            </div>
              <button class="btn btn-primary">Enviar</button>
            </form>
          </div>
  </div>
</body>
</html>
