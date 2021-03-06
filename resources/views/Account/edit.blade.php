@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Edit account</li>
    </ol>
@stop
@section('body')
    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Edit account</h4>
        </nav>
        </div>
        <div class="card-body">

        <form action="{{url('/account/'.$account->id)}}" method="POST">
            {{ method_field('PATCH') }}
            @csrf

            <div class="form-group">
                <label for="inputname"> Name </label>
                <input type = "text" class = "form-control" id = "inputname" name = "inputname" placeholder = "Enter Name" required="required" value="{{$account->name}}">
            </div>

            <div class="form-group">
                <label for="inputIBAN"> IBAN </label>
                <input type = "text" class = "form-control" id = "inputIBAN" name = "inputIBAN" placeholder = "Enter IBAN" required="required" value="{{$account->IBAN}}">
            </div>

            <div class="form-group">
                <label for="inputdescription"> Description </label>
                <input type = "text" class = "form-control" id = "inputdescription" name = "inputdescription" placeholder = "Enter Description" required="required" value="{{$account->description}}">
            </div>

            <div class="row justify-content-end" style="margin-right: auto; margin-bottom: auto;">
                <button type="submit" class="btn btn-block btn-primary col-2">Submit</button>
            </div>
        </form>
        </div>


@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush