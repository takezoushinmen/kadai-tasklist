@extends('layouts.app')

@section('content')
<h1>id = {{ $tasklist->id }} のタスク詳細ページ</h1>

    <p>{{ $tasklist->content }}</p>
    
    <p>ステータス: {{ $tasklist->status }}</p>
    
    {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id]) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection