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

    <a class="float-button text-white" href="#" data-bs-toggle="modal" data-bs-target="#cadastro">
        <i class="fa-solid fa-file-circle-plus"></i>
    </a>

        <div class="modal" id="cadastro" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastre uma anotação!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="frm-cadastro" action="{{route('cadastra_lembrete')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <select class="form-select mb-3" name="categoria" id="categoria" aria-label="Selecionar uma Categoria">
                                <option selected>Selecione uma Categoria</option>
                                <option value="boletos">Boletos</option>
                                <option value="datas comemorativas">Datas Comemorativas</option>
                                <option value="anotacoes_gerais">Anotações Gerais</option>
                                <option value="notas_academicas">Notas Acadêmicas</option>
                                <option value="remedios">Remédios</option>
                            </select>
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