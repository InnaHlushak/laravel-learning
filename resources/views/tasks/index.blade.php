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
        <div class="row row-cols-3">
            @foreach ($tasks as $task)
                <div class="container">
                    <div class="d-flex justify-content-around">
                        <div class="card" style="width: 18rem;">
                            <img src="https://apod.nasa.gov/apod/image/9811/saturn_herhst.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $task->name }} </h5>
                                <!--оскільки у шаблон передаємо $task у якого є привязка до категорії через метод category()
                                що описаний у моделі Task -->
                                <h6 class="card-subtitle mb-2 text-muted">Категорія: {{ $task->category->name }}</h6>
                                <p class="card-text">{{ $task->description }}</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Переглянути</a>
                                    @if ($role === 'admin') 
                                        <a href="#" class="btn btn-sm btn-outline-primary">Редагувати</a>
                                        <a href="#" class="btn btn-sm btn-outline-warning">Видалити</a>                                    
                                    @endif  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container">
            <div  class="d-flex justify-content-center">
                <!-- Перемикання сторінок пагінатора -->
                {{ $tasks->links() }}
            </div> 
        </div>
    </div>
@endsection
