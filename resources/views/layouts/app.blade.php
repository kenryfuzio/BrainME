<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('/')}}/style.css">
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
                <a class="nav-link {{ (request()-> is('principal')) ? 'active' : '' }} "  href="{{route('principal')}}">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()-> is('boletos')) ? 'active' : '' }}" aria-current="page" href="{{route('boletos')}}">Boletos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()-> is('datas_comemorativas')) ? 'active' : '' }}" href="{{route('datas_comemorativas')}}">Datas Comemorativas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()-> is('notas_gerais')) ? 'active' : '' }}" href="{{route('notas_gerais')}}">Notas Gerais</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()-> is('notas_academicas')) ? 'active' : '' }}" href="{{route('notas_academicas')}}">Notas Acadêmicas</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()-> is('remedios')) ? 'active' : '' }}" href="{{route('remedios')}}">Remédios</a>
              </li>
              <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                  <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault(); this.closest('form').submit(); " role="button">
                  <i class="fas fa-sign-out-alt"></i>
                {{ __('Sair') }}
                </a>
              </form>
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

    <div class="row">
        <div class="col-md-8 offset-md-2">


        @yield('conteudo')


        </div>
    </div>


    


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
