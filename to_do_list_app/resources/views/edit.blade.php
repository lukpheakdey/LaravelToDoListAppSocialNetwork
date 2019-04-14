@extends('layouts.master')

@section('content')

    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
            <input value="Task content to edit" id="task2" type="text" class="validate">
            <label for="task">Edit task</label>
            </div>
        </div>

        @include('partials.coworkers')

        <a class="waves-effect waves-light btn">Edit task</a>
    </form>

@endsection
