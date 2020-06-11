@extends('layout')

@section('content')
<div class="top__items">
  <h1>チャンネル一覧</h1>
  <div class="ml-auto">
    <a href="{{ route('channels.new') }}" class="btn btn-primary">
      チャンネル追加
    </a>
  </div>
</div>
<div class="list-group">
  @foreach($channels as $channel)
    <a href="{{ route('tasks.index', ['id' => $channel->id]) }}" 
        class="list-group-item">
      {{ $channel->name }}<span> {{ $channel->time }}分</span>
    </a>
  @endforeach
</div>
@endsection
      
 