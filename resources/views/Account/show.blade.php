@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Details')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Details</li>
    </ol>
@stop
@section('body')
    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Details</h4>
            </nav>
        </div>
        <div class="card-body">

    <table class="table">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>IBAN</th>
        <th>Description</th>
        <th>Timestamp</th>
        <th>Action</th>
        </thead>
        <tbody style="border-bottom: 1px groove">
        <tr>
            <td><strong>{{$account->id}}</strong></td>
            <td>{{$account->name}}</td>
            <td>{{$account->IBAN}}</td>
            <td>{{$account->description}}</td>
            <td>{{$account->created_at}}</td>
            <td>
                <a class="btn btn-block btn-primary" href="/account/{{$account->id}}/edit" >Edit</a>
            </td>
        </tr>
        </tbody>
    </table>

    <div class="row justify-content-end" style="margin-right: auto; margin-bottom: auto;">
        <button type="submit" class="btn btn-block btn-primary col-2 " href="/account">Back to accounts</button>
    </div>
        </div>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush