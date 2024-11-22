@extends('layouts.main')
@section('title','Створення завдання')
@section('content')
<!-- Відображення усіх помилок при валідації -->
    <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
<!-- Форма для введення даних -->
    <div class="container">
    <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Назва</label>
            <div class="col-sm-10">
                <input 
                    type="text" 
                    class="form-control @error('name') is-invalid @enderror"
                    id="name" 
                    name="name"
                    placeholder="Введіть назву"
                    value="{{ old('name') }}"
                >
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Опис</label>
            <div class="col-sm-10">
                <textarea
                    class="form-control @error('description') is-invalid @enderror" 
                    id="description" 
                    name="description" 
                    placeholder="Введіть опис">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Категорія</label>
            <div class="col-sm-10">
                <select 
                    class="form-select  @error('category_id') is-invalid @enderror" 
                    aria-label="Default select example" 
                    id="category_id" 
                    name="category_id"
                >
                    <!-- <option value="1">Категорія 1</option>
                    <option value="2">Категорія 2</option>
                    <option value="3">Категорія 3</option> -->
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
                <input 
                    type="datetime-local" 
                    class="form-control @error('deadline') is-invalid @enderror" 
                    id="deadline" 
                    name="deadline"
                    value="{{ old('deadline') }}"
                >
                @error('deadline')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="cost" class="col-sm-2 col-form-label">Вартість (в грн.)</label>
            <div class="col-sm-10">
                <input 
                    type="text" 
                    class="form-control @error('cost') is-invalid @enderror" 
                    id="cost" 
                    name="cost" 
                    placeholder="0.00"
                    value="{{ old('cost') }}"
                >
                @error('cost')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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