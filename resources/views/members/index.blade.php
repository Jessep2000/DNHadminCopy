@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Members</li>
    </ol>
@stop

@section('body')
    <div class="card">
        <div class="card-title">
            <nav class="navbar navbar-light bg-light">
                <h4>Members</h4>
                <a class="btn btn-primary float-right" href="/members/create">Add</a>
        </div>
        </nav>
        <div class='card-body'>
            <table class="table table-responsive-sm table-hover mb-0">
                <thead class="thead-dark">
                <tr>
                    <th>membersID</th>
                    <th>name</th>
                    <th>adress</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>iban</th>
                    <th>boatID</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td><strong>{{$member->id}}</strong></td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->adress}}</td>
                        <td>{{$member->email}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->iban}}</td>
                        <td>{{$member->boatid}}</td>
                        <td>
                            <form method='get' action="{{'/editEntry'}}">
                                <input type="hidden" id="entryId" name="entryId" value="{{$member->id}}">
                                <button class="btn btn-block btn-primary" type="submit">edit</button>
                            </form>
                        </td>
                        <td>
                            <a href="delete/?entryId={{$member->id}}">
                                <button class="col-sm-12 btn btn-block btn-danger" type="button">delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endsection

            @push('js')
                <script src="/url/to/script.js"></script>
    @endpush
