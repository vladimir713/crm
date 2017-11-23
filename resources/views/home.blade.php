@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Текущие задачи</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

					@if (auth()->check())
                    <div class="panel panel-default">
 <!--     <div class="panel-heading">
        Текущие задачи
      </div>-->

					      <div class="panel-body">
					        <table style="display: flex;
								    align-items: center;
								    align-content: center; 
								    justify-content: center;
								    width: 100%;
								    height: 100%;
								    position: fixed;
								    top: 0;
								    left: 0;
								    overflow: auto;">
					          <tbody >  
					                  <tr>
					                  	<th>Задача</th>
					                  	<th>Дата</th>
					                  	<th>Срок выполнения</th>
					                  	<th>Ответственный</th>
					                  </tr>
					                   @foreach ($tasks as $task)
					                  <tr>
					  					<!-- РРјСЏ Р·Р°РґР°С‡Рё -->
					 					<td class="table-text">
										<div>{{ $task->name }}</div>
										</td>
										<td class="table-text">
										<div>{{ $task->created_at }}</div>
										</td>
										<td class="table-text">
										<div>{{ $task->execute_in }}</div>
										</td>
										<td class="table-text">
										<div>{{ $task->to_user_id }}</div>
										</td>
										  <!-- РљРЅРѕРїРєР° РЈРґР°Р»РёС‚СЊ -->
										  <td>
										    <form action="{{ url('task/'.$task->id) }}" method="POST">
										      {{ csrf_field() }}
										      {{ method_field('DELETE') }}

										      <button type="submit" class="btn btn-danger">
										        <i class="fa fa-trash"></i> Удалить
										      </button>
										    </form>
										  </td>
										</tr>
					              
					              
					            @endforeach
					            @endif
					          </tbody>
        					</table>
      					</div>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
