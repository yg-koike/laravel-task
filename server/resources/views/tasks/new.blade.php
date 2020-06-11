@extends('layout')

@section('styles')
  @include('tasks.styles')
@endsection

@section('content')
<div class="top__items">
  <h1>タスク追加</h1>
  <div class="ml-auto">
    <a href="{{ route('channels.new') }}" class="btn btn-primary">
      チャンネル追加
    </a>
    <a href="{{ route('channels.index') }}" class="btn btn-success">
      チャンネル一覧
    </a>
    <a href="{{ route('tasks.index', ['id' => $channel_id]) }}" class="btn btn-success">
      タスク一覧
    </a>
  </div>
</div>

@include('errors')

<form action="{{ route('tasks.create', ['id' => $channel_id]) }}" method="POST">
  @csrf 
  <div class="form-group">
    <label for="title">タイトル</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
  </div>
  <div class="form-group">
    <label for="due_date">期限</label>
    <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}">
  </div>
  <div class="form-group">
    <label for="time">視聴時間(分)</label>
    <input type="number" class="form-control" name="time" id="time" value="{{ old('time') }}" min="0">
  </div>
  <button type="submit" class="btn btn-primary btn-block">送信</button>
</form>
@endsection

@section('scripts')
  @include('tasks.scripts')
@endsection