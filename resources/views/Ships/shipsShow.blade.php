@extends('coreui::master') @push('css')
<link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush
@section('title', 'ships')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/ships">Home</a></li>
    <li class="breadcrumb-item active">Ships</li>
</ol>

@stop
@section('body')
<div class="card">
    <div class="card-title">
        <nav class="navbar navbar-light bg-light">
            <h4>Ships</h4>
            <a class="btn btn-primary float-right" href="/ships/create " type="button">Add</a>
    </div>
    </nav>
    <div class='card-body'>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>BoatID</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $ship->id }}</td>
                    <td>{{ $ship->Name }}</td>
                    <td>{{ $ship->Size }}</td>
                    <td><img src="{{ $ship->image_url }}" style="max-width : 100px;" /></td>
                    <td>
                        <form action="{{url("/ships/$ship->id/edit")}}">
                            <button type="submit" class="btn btn-block btn-primary">edit</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ url("/ships/$ship->id") }}">

                            <!-- blade derective -->
                            {{-- @method('DELETE') @csrf --}} {{ method_field('DELETE') }} {{ csrf_field() }}

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-danger mb-2">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
 @push('js')
    <script src="/url/to/script.js"></script>

@endpush
