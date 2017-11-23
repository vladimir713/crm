<?php
use App\Task;
use App\addTask;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Добавление нового задания
//Route::get('add', 'TasksController@add');

Route::any('task', 'TaskController@store');

Route::get('home', 'TasksViewController@index');
Route::get('addTask', function () {
    return view('addTask');
});
//Route::post('addTask', function (Request $request) {
//  $validator = Validator::make($request->all(), [
//    'name' => 'required|max:255',
//  ]);

 // if ($validator->fails()) {
 //   return redirect('/')
 //     ->withInput()
 //     ->withErrors($validator);
 // }

  //$task = new Task;
  //$task->name = $request->name;
  //$task->from_user_id = $request->from_user_id;
  //$task->to_user_id = $request->to_user_id;
  //$task->execute_in = $request->execute_in;
  //$task->save();

  //return redirect('/home');
//});


Route::delete('task/{task}', function (Task $task) {
  $task->delete();

  return redirect('/home');
});