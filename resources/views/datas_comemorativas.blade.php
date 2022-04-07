@extends('layouts.app')


@section('conteudo')
<div id="cadastro" class="md-5 container">
            <h2 class="text-center mb-3 titulo">Datas Comemorativas</h2>
            <form id="frm-cadastro" action="" method="post" enctype="multipart/form-data">
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
                <input type="text" class="form-control mb-3" name="outra_festa" placeholder="Digite o tipo da festa!" required>
              </p>
                </form>



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
</div>


@endsection