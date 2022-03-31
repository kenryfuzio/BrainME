<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <title>BrainME</title>
    </head>
    <body>
   
   
    <div class="collapse col-md-8 offset-md-2" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h5 class="text-white h4">Criado por Japozeno</h5>
      </div>
    </div>
    <nav class="navbar col-md-8 offset-md-2 mb-3 navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BrainME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link "  href="modelopaglembrete.html">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Boletos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="modelodatascomemorativas.html">Datas Comemorativas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="modeloedicaogeral.html">Edição total</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="modelocurso.html">Curso/Faculdade</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="modeloremedios.html">Remédios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Sair</a>
              </li>
              <li class="nav-item dropdown">
             
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Criado por Japozeno</a></li>

                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>  

        @yield('conteudo')

           

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
