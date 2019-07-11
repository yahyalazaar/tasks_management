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
                <div class="card-header">Ressources</div>

                <div class="card-body">
                <form method="POST" action="{{ url('tasksByUser') }}">
                        @csrf
                    <div class="form-group">
                        <div class="">
                            <select name="ressource" id="ressource" class="form-control" onchange="this.form.submit()">
                                <option disabled selected>-- Selectionner un ressource --</option>
                                @foreach ($users as $user)
                                    @if ($ressource != null && $ressource==$user->name )
                                        <option value="{{ $user->name }}" selected>{{ $user->name }}
                                        </option>
                                    @else
                                        <option value="{{ $user->name }}">{{ $user->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <!-- <button type="submit" class="btn btn-primary"><i class="fa fa-download"></i> Importer les taches</button> -->
                    </div>
                </form>
                </div>
            </div>
            <div class="card">
            @if ($ressource != null)
                <div class="card-header">Liste des taches de <b>{{$ressource}}</b></div>
            @else
                <div class="card-header">Liste des taches </div>
            @endif

                <div class="card-body">
                    <table class="table table-striped" > 
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

                </div>
            </div>

        </div>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function getData() {
    var res = $("#ressource").val();
    $.ajax({
        url: 'tasksByUser/' + res,
        type: 'GET',
        data: {
            ressource: res
        },
        success: function(data) {
            console.log(data);     
        }
    });
}
</script> -->

@endsection