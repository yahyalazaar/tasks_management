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
                <div class="card-header">Ajouter une tache</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="form-group">
                            <div class="">
                                <label for="title">Titre</label>
                                <input id="title" name="title" type="text" maxlength="255"
                                    class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    autocomplete="off" />
                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="">
                                <label for="ressource">Ressources</label>
                                <select name="ressource" id="" class="form-control">
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Liste des taches</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Tache</th>
                            <th>Ressource</th>
                            <th>Date</th>
                            <th>% d'avancement </th>
                            <th>Supprimer</th>
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
                                {{ $task->ressource }}
                            </td>
                            <td>
                                {{ $task->created_at }}
                            </td>
                            <td class="text-right">
                                @if (! $task->is_complete)
                                <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    0%
                                    <button type="submit" class="btn btn-warning">compléter
                                    </button>
                                </form>
                                @else
                                100%
                                <button type="button" class="btn btn-success" disabled><i class="fa fa-check"></i>
                                    Compléte
                                </button>
                                @endif
                            </td>
                            <td>
                                <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
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