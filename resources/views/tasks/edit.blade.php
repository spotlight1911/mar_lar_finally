@extends('layouts.app')

@section('content')
    <h2>Edit Tasks</h2>
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой задачи -->
        <form action="{{ route('tasks.update', $task->id ) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
            {{method_field('PUT')}}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Задача</label>
                <div class="col-sm-6">
                    <input type="text" value="{{old('name') ?? $task->name}}" name="name" class="form-control" id="task">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i> Save changes
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection