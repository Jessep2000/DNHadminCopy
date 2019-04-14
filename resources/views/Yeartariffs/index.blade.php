@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Yeartariff')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Yeartariff</li>
    </ol>
@stop


@section('body')
<div class="card">
  <div class="card-title">
    <nav class="navbar navbar-light bg-light">
    <h4>Yeartariff</h4>
    <a class="btn btn-primary float-right" href="/yeartariffs/create">Add Row</a>
    </nav>
  </div>
  <div class="card-body">

    <table class="table table-responsive-sm table-hover table-outline mb-0">
    <thead class="thead-dark">
    <th>ID</th>
    <th>Year</th>
    <th>Contribution</th>
    <th>Port dues</th>
    <th>Energy allowance</th>
    <th>Guest Payments</th>
    <th>Total Amount</th>
    <th></th>
    <th></th>
    </thead>
    <tbody>
        @foreach ($Yeartariffs as $Yeartariff)
        <tr onclick="window.location.href = '/yeartariffs/{{$Yeartariff->id}}';"> 
        <!-- ^ Makes TR clickable -->
            <td class = "table-secondary">{{$Yeartariff->id}}</td>
            <td class = "table-secondary">{{$Yeartariff->year}}</td>
            <td> € {{$Yeartariff->contributions}}</td>
            <td> € {{$Yeartariff->port_dues}}</td>
            <td> € {{$Yeartariff->energy_allowance}}</td>
            <td> € {{$Yeartariff->guest}}</td>
            <td class = "table-info"> € {{$Yeartariff->contributions + $Yeartariff->port_dues + $Yeartariff->energy_allowance + $Yeartariff->guest}}</td>

            <td> <form method="POST" action="{{ url("/yeartariffs/$Yeartariff->id") }}">
                <!-- blade derective -->
            @method('DELETE')
            @csrf 

            <div>
                <button type="submit" class="form-control btn btn-block btn-danger">Delete</button>
            </div>
                </form>
            </td>
            <td> <a href="/yeartariffs/{{$Yeartariff->id}}/edit" class="btn btn-block btn-primary">Edit Row</a> </td>

            </tr>
            @endforeach
    </tbody>
    </table>

    </div>
</div>

@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush