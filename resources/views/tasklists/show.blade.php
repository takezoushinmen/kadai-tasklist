@extends('layouts.app')

@section('content')
    <h1>id = {{ $tasklist->id }} のタスクリスト詳細ページ</h1>

    <p>{{ $tasklist->content }}</p>
    
    {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id]) !!}
        {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection