@extends('coreui::master') @push('css')
<link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush
@section('title', 'Dashboard')
@section('body')
<h1>Ships</h1>

<form action="{{'/shipsStore'}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="Name"> Name </label>
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="Size"> Size </label>
        <input type="number" class="form-control" id="Size" name="Size" placeholder="Enter Size">
    </div>
    <div class="form-group">
        <label for="image_url"> Image_url </label>
        <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Enter image_url">
    </div>

    <div class="row">
        <button type="submit">Submit</button>
    </div>
</form>
@endsection
 @push('js')
<script src="/url/to/script.js"></script>


@endpush
