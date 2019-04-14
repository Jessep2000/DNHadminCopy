@extends('coreui::master')

@push('css')
<link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Account')

@section('body')
<h1>Accounts</h1>

<table class="table">
<thead class="thead-dark">
<th>ID</th>
<th>Name</th>
<th>IBAN</th>
<th>Description</th>
<th>Timestamp</th>
<th></th>
</thead>
<tbody>
@foreach ($accounts as $account)
<tr>
<td>{{$account->id}}</td>
<td>{{$account->name}}</td>
<td>{{$account->IBAN}}</td>
<td>{{$account->description}}</td>
<td>{{$account->created_at}}</td>
<td>
<form method='get' action="{{'/account/update'}}">
<input type="hidden" id="entryID" name="entryID" value="{{$account->id}}">
<button class="btn btn-block btn-primary" type="submit">Edit</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>

<div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
<a class="btn btn-block btn-primary" href="/account/create" type="button">Add</a>
</div>

@endsection

@push('js')
<script src="/url/to/script.js"></script>
@endpush