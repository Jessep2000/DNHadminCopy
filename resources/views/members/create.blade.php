@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/members">Members</a></li>
        <li class="breadcrumb-item active">register a new member</li>
    </ol>
@stop

@section('body')
    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Register a Member</h4>
            </nav>
        </div>
        <div class="card-body">
    <form method='get' action="{{'/storeMember'}}">

        @csrf

        <div class="card-b  ody">
            <div class="form-group">
                <label for="name">name</label>
                <input class="form-control" name='name' id="name" type="text" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="adress">adress</label>
                <input class="form-control" name='adress' id="adress" type="text" placeholder="Kalverstraat 1">
            </div>
            <div class="row">
                <div class="form-group col-sm-8">
                    <label for="email">email</label>
                    <input class="form-control" name='email' id="email" type="text" placeholder="Enter your email">
                </div>
                <div class="form-group col-sm-4">
                    <label for="phone">phone</label>
                    <input class="form-control" name='phone' id="phone" type="text" placeholder="phone">
                </div>
            </div>
            <div class="form-group">
                <label for="boatID">boatID</label>
                <input class="form-control" name='boatID' id="boatID" type="text" placeholder="boatID">
            </div>
        </div>
        <div class="form-group">
            <label for="iban">iban</label>
            <input class="form-control" name='iban' id="iban" type="text" placeholder="NL12ICT12345678  ">
        </div>
        <div class="row justify-content-end" style="margin-right: auto; margin-bottom: auto;">
            <button type="submit" class="btn btn-block btn-primary col-2">Register</button>
        </div>
    </form>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush
