@extends('filesystem')
@section('iconCreation')
  @foreach ($repoArr['fileSystemItem'] as $fsItem)
      <div class="iconContainer dropdownmenu">
        <div class="iconEffect">
          <div class="icon-{{ $fsItem['extensio'] }}">
          </div>
          <div class="iconText">
            <span class="fiId hidden">{{ $fsItem['id'] }}</span>
            <span class="fiName">{{ $fsItem['name'] }}</span></br>
            <span class="fiSize">Size:  {{ $fsItem['size'] }} KB</span></br>
          </div>
        </div>
      </div>
  @endforeach
@stop