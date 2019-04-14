@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Index')

@section('body')

    <h1>Edit the values</h1>

    {{-- <form method="POST" action="/assignments/{{ $assignment->id }}"> --}}
    <form method="POST" action="{{ url("/budget/$budget->id") }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="inputname">Name</label>
            <input type="text" class="form-control" id="inputname" name="inputname" placeholder="{{$budget->name}}" value="{{ $budget->name }}">
        </div>
        <div class="form-group">
            <label for="inputActive"> Amount (€) </label>
            <input type="number" class="form-control" id="inputActive" name="inputActive" placeholder="{{$budget->active}}" value="{{ $budget->active }}">
        </div>
        <div class="form-group">
            <label for="inputdescription">Project description</label>
            <textarea class="form-control" id="inputdescription" name="inputdescription" rows="4">{{ $budget->description}}</textarea>
        </div>
        <div class="row">
            <button type="submit">Submit Edit</button>
        </div>
    </form>

@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush