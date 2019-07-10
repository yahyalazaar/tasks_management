@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card card-new-task">
                    <div class="card-header">New Task</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf
                            <div class="form-group">
                                <div class="">
                                    <label for="title">Title</label>
                                    <input id="title" name="title" type="text" maxlength="255" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" autocomplete="off" />
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                                <div  class="">
                                    <label for="user">User</label>
                                    <select name="user" id="" class="form-control">
                                    @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option> 
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Tasks</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>task name</th>
                                <th>user</th>
                                <th>completed?</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($tasks as $task)

                                <tr>
                                    <td>
                                        @if ($task->is_complete)
                                            <s>{{ $task->title }}</s>
                                        @else
                                            {{ $task->title }}
                                        @endif
                                    </td>
                                    <td>
                                    @foreach ($users as $user)
                                        @if ($user->id == $task->user_id)
                                            {{ $user->name }}
                                        @endif
                                    @endforeach
                                    </td>
                                    <td class="text-right">
                                        @if (! $task->is_complete)
                                            <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-primary">Complete</button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                    <button type="button" class="btn btn-danger"> <i class="trash icon"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {{ $tasks->links() }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
