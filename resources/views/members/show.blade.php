@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('body')
    <h1>members</h1>

    <table class="table table-responsive-sm table-striped">
        <thead>
        <tr>
            <th>membersID</th>
            <th>name</th>
            <th>adress</th>
            <th>email</th>
            <th>phone</th>
            <th>iban</th>
            <th>boatID</th>
        </tr>
        </thead>
        <tbody>
        {{--@foreach ($members as $member)--}}
            <tr>
                <td>{{$members->id}}</td>
                <td>{{$members->name}}</td>
                <td>{{$members->adress}}</td>
                <td>{{$members->email}}</td>
                <td>{{$members->phone}}</td>
                <td>{{$members->iban}}</td>
                <td>{{$members->boatid}}</td>
            </tr>
        {{--@endforeach--}}
        </tbody>
    </table>
    <a href="members/create">
        <button class="btn btn-block btn-primary" type="button">Register</button>
    </a>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush
