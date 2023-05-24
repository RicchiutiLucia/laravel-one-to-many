@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <table class="table table-hover table-striped table-bordered ">
            <thead>
            <tr>
                
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Numero dei tipi</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{$type->id}}</td>
                        <td>{{$type->name}}</td>
                        <td>{{$type->slug}}</td>
                        <td>{{count($type->projects)}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Confermi di voler eliminare l'elemento selezionato?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Conferma eliminazione</button>
            </div>
            </div>
        </div>
    </div>

</div>
@endsection