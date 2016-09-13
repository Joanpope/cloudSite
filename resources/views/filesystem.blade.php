@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">FileSystem!</div>
                  <div id="dragandrophandler">                    
                      @foreach ($repoArr['fileSystemItem'] as $fsItem)
                          <div class="iconContainer">
                            <div class="iconEffect">
                              <div class="icon-{{ $fsItem['extensio'] }}">
                              </div>
                              <div class="iconText">
                                <span class="fiName">{{ $fsItem['name'] }}</span></br>
                                <span class="fiSize">Size:  {{ $fsItem['size'] }} KB</span></br>
                              </div>
                            </div>
                          </div>
                      @endforeach
                  </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/upload.js') }}"></script>
@endsection
