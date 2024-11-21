@extends('layouts.main')
@section('title','Створення завдання')
@section('content')
    <div class="container">
    <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Назва</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Введіть назву">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Опис</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="description" name="description" placeholder="Введіть опис"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Категорія</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                    <!-- <option value="1">Категорія 1</option>
                    <option value="2">Категорія 2</option>
                    <option value="3">Категорія 3</option> -->
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="users" class="col-sm-2 col-form-label">Виконавці</label>
            <div class="col-sm-10">
            <select class="form-select" id="users" multiple name="users[]">
                <option value="1">User 1</option>
                <option value="2">User 2</option>
                <option value="3">User 3</option>
                <option value="3">User 4</option>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="deadline" class="col-sm-2 col-form-label">Термін</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="deadline" name="deadline" placeholder="10.0">
            </div>
        </div>
        <div class="row mb-3">
            <label for="cost" class="col-sm-2 col-form-label">Вартість (в грн.)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="costt" name="cost" placeholder="0.0">
            </div>
        </div>        
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="free" name="free">
                <label class="form-check-label" for="free">
                    Безкоштовно
                </label>
            </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Зображення</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image" name="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Створити</button>
    </form>
    </div>
@endsection