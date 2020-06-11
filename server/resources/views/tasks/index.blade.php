@extends('layout')

@section('content')
<div class="top__items">
  <h1>{{ $current_channel_name }}</h1>
  <div class="ml-auto">
    <a href="{{ route('channels.new') }}" class="btn btn-primary">
      チャンネル追加
    </a>
    <a href="{{ route('tasks.new', ['id' => $current_channel_id]) }}" class="btn btn-primary">
      タスク追加
    </a>
    <a href="{{ route('channels.index') }}" class="btn btn-success">
      チャンネル一覧
    </a>
  </div>
</div>

<table class="table table-hover table-responsive-sm tasks__table">
  <thead>
    <tr>
      <th>タイトル</th>
      <th>状態</th>
      <th>期限</th>
      <th>時間</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
      <tr>
        <td>{{ $task->title }}</td>
        <td>
        <span class="badge {{ $task->status_class }}">{{ $task->status_label }}</span>
        </td>
        <td>{{ $task->formatted_due_date }}</td>
        <td>{{ $task->time }}分</td>
        <td><a href="{{ route('tasks.edit', ['id' => $task->channel_id, 'task_id' => $task->id]) }}" class="btn btn-success">編集</a></td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection