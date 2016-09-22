@extends('layouts.app')
@section('content')
<div id="itemMenu">
  <ul class="list-unstyled">
    <li id="down" class="option"><span class="glyphicon glyphicon-save-file">Descargar</span></li>
    <li id="dele" class="option"><span class="glyphicon glyphicon-trash">Eliminar</span></li>
    <li id="dele" class="option"><span class="glyphicon glyphicon-plus">Añadir categoria</span></li>
  </ul>  
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">FileSystem!</div>
                  <div id="dragandrophandler">

                    @yield("iconCreation")                    
                  </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/upload.js') }}"></script>
<script src="{{ URL::asset('js/menu.js') }}"></script>
@endsection
