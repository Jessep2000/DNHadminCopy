
@extends('coreui::master')

@push('css')
    <link rel='stylesheet' type='text/css' href='/url/to/stylesheet.css'>
@endpush

@section('title', 'Dashboard')

@section('body')
    <h1>Add data!</h1>

    <form action='{{'/budget'}}' method='POST'>
        {{--{{method_field('GET')}}--}}
        @csrf

        <div class='form-group'>
            <label for='inputname'> Name </label>
            <input type = 'text' class = 'form-control' id = 'inputname' name = 'inputname' placeholder = 'Enter Name' required='required'>
        </div>

        <div class='form-groucp'>
            <label for='inputActive'> Amount  </label>
            <input type = 'number' class = 'form-control' id = 'inputActive' name = 'inputActive' placeholder = 'Enter IBAN' required='required'>
        </div>

        <div class='form-group'>
            <label for='inputdescription'> Description </label>
            <input type = 'text' class = 'form-control' id = "inputdescription" name = "inputdescription" placeholder = “Enter Description” required=“required”>
        </div>

        <div class='row'>
            <button type='submit'>Submit</button>
        </div>
    </form>

@endsection

@push('js')
    <script src='/url/to/script.js'></script>
@endpush