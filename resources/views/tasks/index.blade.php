@extends('layouts.app')

@section('content')
    <h2>All Tasks</h2>
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    </div>
    <!-- TODO: Текущие задачи -->
@endsection