<!-- Шаблон для відображення одного завдання -->
@extends('layouts.main')
@section('title',$task['title'])
@section('content')
    <!-- <div>
        <h1>{{ $task['title'] }}</h1>
        <p>{{ $task['description'] }}</p>
    </div> -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://apod.nasa.gov/apod/image/9811/saturn_herhst.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $task->name }} </h5>
                    <!--оскільки у шаблон передаємо $task у якого є привязка до категорії через метод category()
                    що описаний у моделі Task -->
                    <h6 class="card-subtitle mb-2 text-muted">Категорія: {{ $task->category->name }}</h6>
                    <p class="card-text">{{ $task->description }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">Редагувати</a>
                        <a href="#" class="btn btn-sm btn-outline-warning">Видалити</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection