@extends('layouts.app')

@section('conteudo')

   @if(count($boletos) == 0)
   <p>Não há boletos cadastrados!</p>
   @else
    @foreach($boletos as $boleto)
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Boletos</div>
            <div class="card-body text-success">
                <h5 class="card-title">{{$boleto->titulo}}</h5>
                <p class="card-text">{{$boleto->descricao}}</p>
            </div>
            <div class="card-footer bg-transparent border-success">{{$boleto->valor}}</div>
        </div>
    @endforeach
    @endif
    

        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Datas Comemorativas</div>  
            <div class="card-body text-success">
                <h5 class="card-title">aniversário do Joviscreidison da esquina</h5>
                <p class="card-text">Dia tal, levar presente para o Joviscreidison, aniversário dele.</p>
            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>
        
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Edição total</div>
            <div class="card-body text-success">  
                <h5 class="card-title">Lembrete de alguma coisa</h5>
                <p class="card-text">Uma coisa muito importante que eu tenho que guardar aqui</p>
            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>

        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Curso/Faculdade</div>
            <div class="card-body text-success">
                <h5 class="card-title">Pagar curso/faculdade</h5>
                <p class="card-text">Dia 00/00 pagar curso/faculdade, notificação</p>
            </div>
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>

        <div class="card border-success mb-3">
          <div class="card-header bg-transparent border-success">Remédios</div>
          <div class="card-body text-success">
              <h5 class="card-title">Remédios das 07:00</h5>
              <p class="card-text">Tomar remédio para dor muscular, notificação</p>
          </div>
          <div class="card-footer bg-transparent border-success">Footer</div>
      </div>

    
    
     
        <div class="collapse float-menu" id="menu_categoria">
            <a href="#" data-bs-toggle="modal" data-bs-target="#cadboleto"> 
                boletos 
            </a> <br> 
            <a href="#" data-bs-toggle="modal" data-bs-target="#cadcomemorativa"> 
                Datas-Comemorativas
            </a> <br>
            <a href="#" data-bs-toggle="modal" data-bs-target="#cadacademica"> 
                Notas Academicas
            </a> <br>
            <a href="#" data-bs-toggle="modal" data-bs-target="#cadgeral"> 
                Notas Gerais 
            </a> <br>
            <a href="#" data-bs-toggle="modal" data-bs-target="#cadremedio"> 
                Remédios 
            </a> <br>
        </div>
      <a class="float-button text-white" href="#" data-bs-toggle="collapse" data-bs-target="#menu_categoria" >
        <i class="fa-solid fa-file-circle-plus"></i>
    </a>
    <!-- //data-bs-toggle="modal" data-bs-target="#cadastro" -->
     
    
    
    <div class="modal" id="cadboleto" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastre uma anotação!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-cadastro" action="{{route('cadastra_lembrete')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <input type="text" class="form-control mb-3" name="titulo" placeholder="Insira um Título" required>
                                <input type="text" class="form-control mb-3" name="descricao" placeholder="Digite uma Descrição" required>
                                <input type="number" step="0.010" class="form-control" name="valor" placeholder="Digite um valor" required>
                                
                                
                                
                                
                                <p class="mt-2">
                                <br><input type="checkbox" name="alerta" value="alerta" class="form-check-input"> Alerta Diário
                                </p>
                                
                            
                                
                                <label for="vencimento">Data Predestinada:</label>
                                <input type="date" name="vencimento" id="vencimento">
                                <br>
                            
                                
                                
                                <p class="mt-2">Foto do Boleto(Opcional)
                                    <input type="file" name="imagem" id="imagem" class="form-control"></p>
                                    <br>
                                    
                                
                                <br>
                                <input type="submit" value="Enviar" class="btn btn-primary">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal" id="cadcomemorativa" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastre uma anotação!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-cadastro" action="{{route('cadastra_lembrete')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <input type="text" class="form-control mb-3" name="titulo" placeholder="Insira um Título" required>
                                <input type="text" class="form-control mb-3" name="descricao" placeholder="Digite uma Descrição" required>
                                <input type="text" class="form-control mb-3" name="nome" placeholder="Digite Homenageado/Aniversariante(Opcional)" required>

                                <p class="mt-3">Selecione se possui uma opção abaixo!
                                    <select name="comemorativo" id="comemorativo" class="form-select">
                                        <option>Selecione</option>
                                        <option value="Aniversário">Aniversário</option>
                                        <option value="Festa">Festa</option>
                                        <option value="Show">Show</option>
                                        <option value="Casamento">Casamento</option>
                                        <option value="Formatura">Formatura</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                    <br>
                        <input type="text" class="form-control mb-3" name="outra_festa" placeholder="Digite o tipo da festa!" required>
                                </p>
                                
                        <p class="mt-2">
                                <br><input type="checkbox" name="alerta" value="alerta" class="form-check-input"> Alerta Diário
                         </p>

                            <label for="data">Data:</label>
                            <input type="date" name="data" id="data">
                            <br>
                        <br>
                            <label for="hora">Horário:</label>
                            <input type="time" name="hora" id="hora">
                        <br>
                        <br>
                        <input type="submit" value="Enviar" class="btn btn-primary">   
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal" id="cadacademica" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastre uma anotação!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-cadastro" action="{{route('cadastra_lembrete')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control mb-3" name="titulo" placeholder="Insira um Título!" required>
                            <input type="text" class="form-control mb-3" name="descricao" placeholder="Digite uma descrição sobre o Curso/Faculdade!" required>
   
                            <p class="mt-3">Selecione uma opção para o tipo de lembrete
                                <select name="tipo" id="tipo" class="form-select">
                                    <option>Selecione</option>
                                    <option value="Pagamento">Pagamento</option>
                                    <option value="Prova">Prova</option>
                                    <option value="Trabalho">Trabalho</option>
                                    <option value="Aula">Aula</option>
                                    <option value="Outros">Outros</option>
                                </select>
                                <br>
                                <input type="text" class="form-control mb-3" name="outro_tipo" placeholder="Digite o tipo de lembrete!" required>
                            </p>

                            <br>
                            <p class="mt-2">
                            <br>

                            <input type="checkbox" name="alerta" value="alerta" class="form-check-input"> Alerta Diário

                            </p>

                            <br>

                                <input type="date" name="data_inicio" id="data_inicio">

                            <br>
                            <br>

                                <label for="data_final">Data Final:</label>
                                <input type="date" name="data_final" id="data_final">

                            <br>
                            <br>
                            
                                <label for="hora">Horário:</label>
                                <input type="time" name="hora" id="hora">

                            <br>
                            <br>
                            <br>
                            <br>
                            <input type="submit" value="Enviar" class="btn btn-primary"> 
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal" id="cadgeral" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastre uma anotação!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-cadastro" action="{{route('cadastra_lembrete')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="text" class="form-control mb-3" name="titulo" placeholder="Insira um Título" required>
                            <input type="text" class="form-control mb-3" name="descricao" placeholder="Digite uma Descrição" required>
                

                            <p class="mt-2">
                                <br><input type="checkbox" name="alerta" value="alerta" class="form-check-input"> Alerta Diário
                                </p>
                            <br>

                            <label for="data">Data Alertada</label>
                            <input type="date" name="dataPred" id="data">
                            <br>
                            <br>
                            <input type="submit" value="Enviar" class="btn btn-primary">  
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal" id="cadremedio" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastre uma anotação!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-cadastro" action="{{route('cadastra_lembrete')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control mb-3" name="titulo" placeholder="Insira um Título" required>
                            <input type="text" class="form-control mb-3" name="descricao" placeholder="Digite uma Descrição" required>
                

                            <p class="mt-2">
                                <br><input type="checkbox" name="alerta" value="alerta" class="form-check-input"> Alerta Diário
                                </p>
                            <br>

                            <label for="data">Data Alertada</label>
                            <input type="date" name="dataPred" id="data">
                            <br>
                            <br>
                            <input type="submit" value="Enviar" class="btn btn-primary">  
                        </form>
                    </div>
                </div>
            </div>
        </div>





@endsection