@extends('layouts.app')


@section('conteudo')
<div id="cadastro" class="md-5 container">
            <h2 class="text-center mb-3 titulo">Curso/Faculdade</h2>
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
              <input type="text" class="form-control mb-3" name="outro_tipo" placeholder="Digite p tipo de lembrete!" required>
        </p>
        

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
             
</div>

@endsection