<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksViewController extends Controller {
   public function index() {
      $tasks = DB::select('select * from tasks') ;
      return view('home',['tasks'=>$tasks]) ;
   }
   public function destroy($id) {
      DB::delete('delete from task where id = ?',[$id]) ;

   }
}
