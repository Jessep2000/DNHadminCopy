@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="members">Members</a></li>
        <li class="breadcrumb-item active">edit a member</li>
    </ol>
@stop
@section('body')
    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Edit Member</h4>
            </nav>
        </div>
        <div class="card-body">
            <form method='get' action="{{'/updateEntry'}}">
                @csrf
                @foreach ($members as $member)
                    <div class="card-b  ody">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input class="form-control" name='name' id="name" type="text" value="{{$member->name}}">
                        </div>
                        <div class="form-group">
                            <label for="adress">adress</label>
                            <input class="form-control" name='adress' id="adress" type="text"
                                   value="{{$member->adress}}">
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-8">
                                <label for="email">email</label>
                                <input class="form-control" name='email' id="email" type="text"
                                       value="{{$member->email}}">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="phone">phone</label>
                                <input class="form-control" name='phone' id="phone" type="text"
                                       value="{{$member->phone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="boatID">boatID</label>
                            <input class="form-control" name='boatID' id="boatID" type="text"
                                   value="{{$member->boatid}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="iban">iban</label>
                        <input class="form-control" name='iban' id="iban" type="text" value="{{$member->iban}}">
                    </div>
                    <input type="hidden" name="entryId" id="entryId" value='{{$member->id}}'>
                @endforeach
                <div class="row justify-content-end" style="margin-right: auto; margin-bottom: auto;">
                    <button type="submit" class="btn btn-block btn-primary col-2">Submit</button>
                </div>
            </form>
        </div>
        @endsection

        @push('js')
            <script src="/url/to/script.js"></script>
    @endpush

