<!-- Шаблон для відображення одного завдання -->
@extends('layouts.main')
@section('title',$task['title'])
@section('content')
    <div>
        <h1>{{ $task['title'] }}</h1>
        <p>{{ $task['description'] }}</p>
    </div>
@endsection