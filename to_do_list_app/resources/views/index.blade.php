@extends('layouts.master')

@section('content')

<table>
    <thead>
        <tr>
            <th>Task</th>
            @isAdmin
            <th>Assigned to</th>
            @endisAdmin
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>
                    <a href="">
                        @if(!$task->status)
                            {{ $task->content }}
                        @else
                            <strike class="grey-text"> {{ $task->content }} </strike>
                        @endif
                    </a>
                </td>
                @isAdmin
                <td>{{ $task->user->name }}</td>
                @endisAdmin
                <td><a title="edit" href="{{ route('edit', $task->id)}}"><i class="small material-icons">edit</i></a></td>
                <td><a title="delete" onclick="return confirm('Delete?');" href="{{ route('edit', $task->id)}}"><i class="small material-icons">delete_forever</i></a></td>
            </tr>
        @endforeach
    </tbody>
</table>

    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>

    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
            <input id="task" type="text" class="validate">
            <label for="task">New task</label>
            </div>
        </div>

        @include('partials.coworkers')

        <a class="waves-effect waves-light btn">Add new task</a>
    </form>



    @isWorker
    <br><br><br>
    <form class="col s12">
        <div class="input-field ">
            <select>
                <option value="" disabled selected>Send Invitation to:</option>
                <option value="2">Buzz McCallister</option>
                <option value="3">Fuller McCallister</option>
                <option value="4">Harry Lime</option>
                <option value="5">Marv Merchants</option>
            </select>
            <label>Send Invitation to</label>
        </div>
        <a class="waves-effect waves-light btn">Send Invitation</a>
    </form>
    @endisWorker


    @isAdmin
    <br><br><br>
    <ul class="collection with-header">
        <li class="collection-header"><h4>My coworkers</h4></li>
        <li class="collection-item"><div>Buzz McCallister<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Fuller McCallister<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Harry Lime<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Marv Merchants<a href="#!" class="secondary-content">delete</a></div></li>
    </ul>
    @endisAdmin


    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
            <input value="Task content to edit" id="task2" type="text" class="validate">
            <label for="task">Edit task</label>
            </div>
        </div>
        <a class="waves-effect waves-light btn">Edit task</a>
    </form>

@endsection
