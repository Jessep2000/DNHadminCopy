@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Index')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Budget</li>
    </ol>
@stop

@section('body')
    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Budget</h4>
                <a class="btn btn-primary float-right" href="/budget/create">Add Row</a>
        </div>
        </nav>

        <div class="card-body">
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Total Amount</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        @foreach ($budgets as $budget)
            <tr onclick="window.location.href = '/budget/{{$budget->id}}';">
                <td class = "table-secondary">{{$budget->id}}</td>
                <td class = "table-secondary">{{$budget->name}}</td>
                <td>€ {{$budget->active}}</td>
                <td>{{$budget->description}}</td>
                <td class = "table-info"> € {{$budget->active}}</td>

                <td> <form method="POST" action="{{ url("/budget/$budget->id") }}">
                        <!-- blade derective -->
                        @method('DELETE')
                        @csrf

                        <div>
                            <button type="submit" class="form-control btn btn-block btn-danger">Delete</button>
                        </div>
                    </form>
                </td>
                <td> <a href="/budget/{{$budget->id}}/edit" class="btn btn-block btn-primary">Edit Row</a> </td>

            </tr>
        @endforeach

        </tbody>
    </table>
        </div>
    </div>



@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush