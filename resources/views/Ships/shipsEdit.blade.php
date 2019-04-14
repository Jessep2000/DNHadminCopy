@extends('coreui::master') @push('css')
<link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush
@section('title', 'Dashboard')
@section('body')
<h1>Edit an existing boat</h1>

        {{-- <form method="POST" action="/assignments/{{ $assignment->id }}"> --}}
            <form method="POST" action="{{ url("/ships/$ship->id") }}">

                {{ method_field('PATCH') }}
                {{ csrf_field() }}

    <div class="form-group">
        <label for="Name"> Name </label>
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name" value="{{$ship->Name}}">
    </div>
    <div class="form-group">
        <label for="Size"> Size </label>
        <input type="number" class="form-control" id="Size" name="Size" placeholder="Enter Size" value="{{$ship->Size}}">
    </div>
    <div class="form-group">
        <label for="image_url"> Image_url </label>
        <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Enter image_url" value="{{$ship->image_url}}">
    </div>

    <div class="row">
        <button type="submit">Submit</button>
    </div>
</form>
@endsection
 @push('js')
<script src="/url/to/script.js"></script>


@endpush
