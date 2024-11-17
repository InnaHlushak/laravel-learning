<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/welcome-laravel', function () {
//     return view('welcome-laravel');
// });

//Спосіб1
// Route::get('/palmo', function() {
//     return view('palmo');
// });

//Спосіб2
//Route::view('palmo', 'palmo');

//Спосіб: передати логіку обробки маршруту на контроллер UserController
//Route::get('/user', [UserController::class, 'getUser']);

//Іменовані маршрути
//Route::get('/user', [UserController::class, 'getUser'])->name('get-name');


//отримати ідентифікатор користувача з URL-адреси, визначивши параметри маршруту:
//Route::get('/user/{id}/profile/{groupId}', [UserController::class, 'getUser']);

//обмеження регулярним виразом
// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



//Створення групи маршрутів (для сутності TASK)
//Додаванная префіксу до кожного марштуру в групі маршрутів
//Спосіб1
// Route::prefix('tasks')->group(function () {
//     //маршрут на сторінку перегляду усіх записів-тасків
//     Route::get('/',[TaskController::class, 'index'])->name('tasks.index');
//     //сторінка яка містить форму, що відповідає за створення таска
//     Route::get('/create',[TaskController::class, 'create'])->name('tasks.create');
//     //сторінка яка відповідає за логіку створення маршруту, приймає дані з форми, створенння відповідного запису у БД
//     Route::post('/',[TaskController::class, 'store'])->name('tasks.store');
//     //перехід за наступним маршрутом має відобразити сторінку з описом конкретного таску
//     Route::get('/{task}',[TaskController::class, 'show'])->name('tasks.show');
//     //роут повертає сторінку з формою для редагування конкретного таску
//     Route::get('/{task}/edit',[TaskController::class, 'edit'])->name('tasks.edit');
//     //не відображає сторінку а просто робить оновлення таску в БД
//     Route::put('/{task}',[TaskController::class, 'update'])->name('tasks.update');
//     //видалення таску з БД
//     Route::delete('/{task}',[TaskController::class, 'destroy'])->name('tasks.destroy');
// });

//Спосіб2
// Route::group([
//     'as' => 'tasks.', //до імен маршрутів додається префікс tasks.
//     'prefix' => 'tasks', //до url маршрутів додати префікс /tasks
//     //'midleware' =>'auth'
// ], function () {
//     //маршрут на сторінку перегляду усіх записів-тасків
//     Route::get('/',[TaskController::class, 'index'])->name('index');
    //сторінка яка містить форму, що відповідає за створення таска
    // Route::get('/create',[TaskController::class, 'create'])->name('create');
    // //сторінка яка відповідає за логіку створення маршруту, приймає дані з форми, створенння відповідного запису у БД
    // Route::post('/',[TaskController::class, 'store'])->name('store');
    // //перехід за наступним маршрутом має відобразити сторінку з описом конкретного таску
    // Route::get('/{task}',[TaskController::class, 'show'])->name('show');
    // //роут повертає сторінку з формою для редагування конкретного таску
    // Route::get('/{task}/edit',[TaskController::class, 'edit'])->name('edit');
    // //не відображає сторінку а просто робить оновлення таску в БД
    // Route::put('/{task}',[TaskController::class, 'update'])->name('update');
    // //видалення таску з БД
    // Route::delete('/{task}',[TaskController::class, 'destroy'])->name('destroy');
//});

//Спосіб3: якщо контроллер TaskController створено як ресурсний
Route::resource('tasks',TaskController::class);


