<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; //щоб звернутися до моделі Category
use App\Models\Task; //щоб звернутися до моделі Task

//Спосіб1: основний контроллер
// class TaskController extends Controller
// {
//     //запит до БД для отримання всіх задач та повернення view з blade-шаблоном для їх перегляду
//     public function index() {
//         return 'Перелік завдань';
//     }

//     //повернути сторінку із формою для створення завдання 
//     //create

//     //прийняти дані із форми та записати в БД
//     //store

//     //за id конкретної задачі відобразити інформацію про неї
//     //show

//     //повернути сторінку із формою для редагування завдання
//     //edit

//      //оновити завдання в БД
//     //update

//      //видалити  завдання в БД
//     //delete
// }

//Спосіб2: як РЕСУРСНИЙ контроллер
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = [
            'Task1',
            'Task2',
            'Task3',
        ];

        $userName = 'John';
        $userRole = 'admin';
        //$userRole = 'user';

        //перевірка чи відповідає шлях вхідного  маршруту шаблону api/*
        if ($request->is('api/*')) {
            //повернути рядок
            return 'Відповідь з API';
            //якщо повертати масив то він перетвор у JSON
            //return [1,2,3];
            //повернути відповідь у форматі JSON
            // return response()->json([
            //     'name' => 'Abigail',
            //     'state' => 'CA',
            // ]);
            //повернути Eloquent-колекцію  моделі
            //return Category::all();
            //додати файлі cookie до відповіді
            //return response('Hello World')->cookie('name-cookie', 'value-cookie', 60);
        }

        //перевірка чи відповідає вхідний запит іменованому маршруту
        // if ($request->is('tasks.*')) {
        //     return 'Відповідь з tasks';
        // }

        return view('tasks.index', ['tasks' => $tasks, 'user' => $userName, 'role' => $userRole]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Звернемося до моделі Category i повернемо усі записи із таблиці categories
        $categories = Category::all();
        // //dd($categories);
        // foreach ($categories as $category) {
        //     dump($category->name);
        // }

        return view('tasks.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request); //вивід обєкта $request
        //dd($request->path()); //отримання шляху запиту $request
        
        //отримати всі дані із запиту
        //dd($request->all());
         
        //отримати всі дані із форми крім "прихованого" поля
        $data = $request->except('_token');
       //dd($data);

       //отримати значення конкретного параметру (за ключем)
       //dd($request->input('name')); 

        //Звернутися до моделі Task і створити у відповідній таблиці запис
        $task = Task::create($data);
        //dd($task);
        //Зробити редірект на сторінку із цим завданням
        return redirect()->route('tasks.show',['task'=>$task->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $task = [
        //     'title' => 'Task'. $id,
        //     'description' => 'Description of task1',
        // ];
        //Звернутися до моделі Task і знайти 1-й запис у таблиці із $id 
        $task = Task::findOrFail($id);

        return view('tasks.show',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
