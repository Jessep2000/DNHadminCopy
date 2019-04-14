@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Index')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Show</a></li>
        <li class="breadcrumb-item active">Budget</li>
    </ol>
@stop


@section('body')
    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Show</h4>
            </nav>
        </div>


    <div class="card-body">
    <table class="table table-responsive-sm table-hover table-outline mb-0">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Acties</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$budget->id}}</td>
            <td>{{$budget->name}}</td>
            <td>{{$budget->active}}</td>
            <td>{{$budget->description}}</td>

    <td>
            <a href="/budget/{{$budget->id}}/edit" class="btn btn-info">Edit Row</a>
    </td>

    </tr>
        </tbody>
    </table>
        <div class="row justify-content-end" style="margin-right: auto; margin-bottom: auto">
    <a class="btn btn-block btn-primary col-2" href="/budget">Back</a>
    </div>
    </div>


@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush