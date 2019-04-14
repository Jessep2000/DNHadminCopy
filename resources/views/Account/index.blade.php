@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Transactions')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Account</li>
</ol>
@stop

@section('body')

    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Account</h4>
                    <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search accounts"> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
             </form>
         <div>
             <a class="btn btn-block btn-primary col-lg" href="/account/create" >Add Row</a>
        </div>
        </nav>
        </div>
        <div class="card-body">

    <table class="table table-responsive-sm table-hover mb-0">
        <thead class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>IBAN</th>
        <th>Description</th>
        <th>Timestamp</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        @foreach ($accounts as $account)
            <tr onclick="window.location.href = '/account/{{$account->id}}/show';">
                <td><strong>{{$account->id}}</strong></td>
                <td>{{$account->name}}</td>
                <td>{{$account->IBAN}}</td>
                <td>{{$account->description}}</td>
                <td>{{$account->created_at}}</td>
                <td>
                    <a class="btn btn-block btn-primary" href="/account/{{$account->id}}/edit" >Edit</a>
                </td>
                <td>
                <form method="POST" action="{{ url("/account/$account->id") }}">

                    <!-- blade derective -->
                    {{-- @method('DELETE')
                    @csrf --}}

                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-block btn-danger">Delete</button>
                    </div>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>

@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush