<!-- Цей шаблон успадковується від шаблону main з папки layouts -->
@extends('layouts.main')
@section('title','Перелік завдань')
@section('content')
    <div>
        <h3>Привіт {{ $user }}</h3>
        <h1>Перeлік завдань</h1>
        @empty($tasks)
            <p>Завдання відсутні</p>
        @endempty
        <ul>
            @foreach ($tasks as $task)
                @if ($role === 'admin')
                    <button>Редагувати</button> 
                @endif
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    </div>
@endsection
