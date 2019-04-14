@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Show')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/yeartariffs">Yeartariffs</a></li>
        <li class="breadcrumb-item active">Show Page</li>
    </ol>
@stop

@section('body')
    <h1>Show</h1>

    <table class="table table-responsive-sm table-hover table-outline mb-0">
    <thead class="thead-dark">
    <th>ID</th>
    <th>Year</th>
    <th>Contribution (€)</th>
    <th>Port dues (€)</th>
    <th>Energy allowance (€)</th>
    <th>Guest (€)</th>
    <th class = "cui-align-center">Acties</th>
    </thead>
    <tbody>
        <tr>
            <td>{{$yeartariff->id}}</td>
            <td>{{$yeartariff->year}}</td>
            <td>{{$yeartariff->contributions}}</td>
            <td>{{$yeartariff->port_dues}}</td>
            <td>{{$yeartariff->energy_allowance}}</td>
            <td>{{$yeartariff->guest}}</td>
            <td> <form method="POST" action="{{ url("/yeartariffs/$yeartariff->id") }}">

                <!-- blade derective -->
                    {{-- @method('DELETE')
                    @csrf --}}

                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}

                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
</form>
             <a href="/yeartariffs/{{$yeartariff->id}}/edit" class="btn btn-info">Edit Row</a></td>
        </tr>
    </tbody>
    </table>

    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
        <a class="btn btn-block btn-primary" href="/yeartariffs/create" type="button">Add</a>
    </div>

    

@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush