@extends('layouts.app')


@section('conteudo')
<div id="cadastro" class="md-5 container">
            <h2 class="text-center mb-3 titulo">Anotações Gerais</h2>
            <form id="frm-cadastro" action="" method="post" enctype="multipart/form-data">
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

</div>
             
             
 @endsection
             