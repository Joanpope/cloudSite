@extends('layouts.app')
@section('content')
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
