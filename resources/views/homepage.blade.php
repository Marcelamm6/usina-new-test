<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OurApp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />
  </head>
  <body style="background: url('images/background.jpg'); background-repeat: no-repeat;  background-size: 1800px 900px;" >

    <header style="background-color: #000;" class="header-bar mb-3">
      <div class="container d-flex flex-column flex-md-row align-items-center p-3">
        <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/"  style="font-family: roboto; font-size: 32px;" class="text-white">Sistema de Usina</a></h4>
        <form action="#" method="POST" class="mb-0 pt-2 pt-md-0">
          <div class="row align-items-center">
            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
              <input name="loginusername" class="form-control form-control-sm input-dark" type="text" placeholder="Usuáro" autocomplete="off" />
            </div>
            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
              <input name="loginpassword" class="form-control form-control-sm input-dark" type="password" placeholder="Senha" />
            </div>
            <div class="col-md-auto">
              <button style="font-family: roboto;"class="btn btn-primary btn-sm">Entrar</button>
            </div>
          </div>
        </form>
      </div>
    </header>
    <!-- header ends here -->

    <div style="background-color:#fff; border-radius: 5px; padding: 3rem" class="container py-md-5">
      <div class="row align-items-center">
        <div class="col-lg-7 py-3 py-md-5">
          <h1 class="display-3">Bem-vindo!</h1>
          <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, eum architecto in voluptatum id iure et? Architecto laboriosam ex suscipit ipsa, quasi dolorum consectetur corporis cumque atque harum? Nostrum, odio?</p>
        </div>
        <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
          <form action="#" method="POST" id="registration-form">
            <div class="form-group">
              <label for="username-register" class="text-muted mb-1"><small>Nome</small></label>
              <input name="username" id="username-register" class="form-control" type="text" placeholder="Escolha um nome" autocomplete="off" />
            </div>

            <div class="form-group">
              <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
              <input name="email" id="email-register" class="form-control" type="text" placeholder="nome@email.com" autocomplete="off" />
            </div>

            <div class="form-group">
              <label for="password-register" class="text-muted mb-1"><small>Senha</small></label>
              <input name="password" id="password-register" class="form-control" type="password" placeholder="Crie uma senha" />
            </div>

            <div class="form-group">
              <label for="password-register-confirm" class="text-muted mb-1"><small>Confirmação de senha</small></label>
              <input name="password" id="password-register-confirm" class="form-control" type="password" placeholder="senha" />
            </div>

            <button style="background:#0062cc; font-family: roboto;" type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Criar Conta</button>
          </form>
        </div>
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $('[data-toggle="tooltip"]').tooltip()
    </script>
  </body>
</html>
