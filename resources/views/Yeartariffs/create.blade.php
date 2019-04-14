@extends('coreui::master') @push('css')
<link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush
@section('title', 'Dashboard')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/yeartariffs">Yeartariffs</a></li>
        <li class="breadcrumb-item active">Create Page</li>
    </ol>
@stop
@section('body')
<h1>Add data!</h1>

<form action="{{'/yeartariffs'}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="inputyear"> Year </label>
        <input type="text" class="form-control" id="inputyear" name="inputyear" placeholder="Enter Year">
    </div>

    <div class="form-group">
        <label for="inputcontribution"> Contribution </label>
        <input type="text" class="form-control" id="inputcontribution" name="inputcontribution" placeholder="Enter Contribution">
    </div>

    <div class="form-group">
        <label for="inputportdues"> Port Dues </label>
        <input type="text" class="form-control" id="inputportdues" name="inputportdues" placeholder="Enter Port Dues">
    </div>

    <div class="form-group">
        <label for="inputenergyallowance"> Energy Allowance </label>
        <input type="text" class="form-control" id="inputenergyallowance" name="inputenergyallowance" placeholder="Enter Energy Allowance">
    </div>

    <div class="form-group">
        <label for="inputguest"> Guest Costs </label>
        <input type="text" class="form-control" id="inputguest" name="inputguest" placeholder="Enter Guest costs">
    </div>


    <div class="row">
        <button type="submit">Submit</button>
    </div>
</form>
@endsection
 @push('js')
<script src="/url/to/script.js"></script>

@endpush
