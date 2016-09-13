@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div class="about-section">
                       <div class="text-content">
                         <div class="span7 offset1">
                            @if(Session::has('success'))
                              <div class="alert-box success">
                              <h2>{!! Session::get('success') !!}</h2>
                              </div>
                            @endif
                            <div class="secure">Upload form</div>
                            {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
                             <div class="control-group">
                              <div class="controls">
                              {!! Form::file('file') !!}
                          <p class="errors">{!!$errors->first('file')!!}</p>
                        @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                        @endif
                            </div>
                            </div>
                            <div id="success"> </div>
                          {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                          {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
