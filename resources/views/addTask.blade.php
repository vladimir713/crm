@extends('layouts.app')

@section('content')
@if (auth()->check())
	<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой задачи -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal"  style="display: flex;
    align-items: center;
    align-content: center; 
    justify-content: center;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    overflow: auto;">
      {{ csrf_field() }}

      <!-- Имя задачи -->
      <div class="form-group" >
        

        <div class="col-sm-10" >
          	<label for="task" class="col-sm-12 control-label" style="text-align: left;">Задача</label>
          	<input type="text" name="name" id="name" class="form-control col-sm-10">
          	<label for="task" class="col-sm-12 control-label" style="text-align: left;">От кого</label>
        	<input type="int(10)" name="from_user_id" id="from_user_id" class="form-control col-sm-6">
        	<label for="task" class="col-sm-12 control-label" style="text-align: left;">Кому</label>
           	<input type="int(10)" name="to_user_id" id="to_user_id" class="form-control col-sm-6">
           	<label for="task" class="col-sm-12 control-label" style="text-align: left;">Выполнить до</label>
           	<input type="date" name="execute_in" id="execute_in" class="form-control col-sm-2">
        </div>
      </div>

      <!-- Кнопка добавления задачи -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Добавить задачу
          </button>
        </div>
      </div>
    </form>
  </div>
 @endif
@endsection