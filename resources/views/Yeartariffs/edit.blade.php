@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/yeartariffs">Yeartariffs</a></li>
        <li class="breadcrumb-item active">Edit Page</li>
    </ol>
@stop

@section('body')
    
    <form method="POST" action={{'/yeartariffs/'}}{{$yeartariff->id}}>
    @method('PUT')
    @csrf

    <div class="card">
        <div class="card-title">
    <nav class="navbar navbar-light bg-light">
        <h4>Edit Data!</h4>
    </nav>
    </div>
    <div class="card-body">

    <div class="form-group">
        <label for="inputyear"> Year </label>
            <input type = "text" class = "form-control" id = "inputyear" name = "inputyear" placeholder = "Enter Year" value = "{{$yeartariff->id}}">
    </div>

    <div class="form-group">
        <label for="inputcontribution"> Contribution (€) </label>
            <input type = "text" class = "form-control" id = "inputcontribution" name = "inputcontribution" placeholder = "Enter Contribution" value = "{{$yeartariff->contributions}}">
    </div>

    <div class="form-group">
        <label for="inputportdues"> Port Dues (€) </label>
            <input type = "text" class = "form-control" id = "inputportdues" name = "inputportdues" placeholder = "Enter Port Dues" value = "{{$yeartariff->port_dues}}">
    </div>

    <div class="form-group">
        <label for="inputenergyallowance"> Energy Allowance (€) </label>
            <input type = "text" class = "form-control" id = "inputenergyallowance" name = "inputenergyallowance" placeholder = "Enter Energy Allowance" value = "{{$yeartariff->energy_allowance}}">
    </div>

    <div class="form-group">
        <label for="inputguest"> Guest Costs (€) </label>
            <input type = "text" class = "form-control" id = "inputguest" name = "inputguest" placeholder = "Enter Guest costs" value = "{{$yeartariff->guest}}">
    </div>
    

    
    <div class="row justify-content-end" style="margin-right: auto; margin-bottom: auto;">
    <button class = "btn btn-block btn-primary col-2" type="submit">Submit Edit</button>  
    </div>
    </form>
</div>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush