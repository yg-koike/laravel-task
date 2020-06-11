@extends('layout')

@section('content')
<div class="top__items">
  <h1>チャンネル追加</h1>
  <div class="ml-auto">
    <a href="{{ route('channels.index') }}" class="btn btn-primary">
      チャンネル一覧
    </a>
  </div>
</div>

@include('errors')

<form action="{{ route('channels.create') }}" method="post">
  @csrf 
  <div class="form-group">
    <label for="name">チャンネル名 <span class="badge badge-danger">20文字以内</span></label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
  </div>
  <div>
    <button type="submit" class="btn btn-primary btn-block">送信</button>
  </div>
</form>
@endsection