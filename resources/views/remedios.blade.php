@extends('layouts.app')


@section('conteudo')

<div id="cadastro" class="md-5 container">
            <h2 class="text-center mb-3 titulo">Remédios</h2>
            <form id="frm-cadastro" action="" method="post" enctype="multipart/form-data">
              <input type="text" class="form-control mb-3" name="titulo" placeholder="Insira um Título" required>
              <input type="text" class="form-control mb-3" name="desc" placeholder="Digite uma Descrição sobre o Remédio" required>



              <p class="mt-2">
                <br><input type="checkbox" name="alerta" value="alerta" class="form-check-input"> Alerta Diário
                </p>
                <br>
                <label for="data_inicio">Data Início:</label>
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
            <input type="submit" value="Enviar" class="btn btn-primary">  
</div>

@endsection