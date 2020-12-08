
@extends('layouts.main')
@section('content')


<div class="container py-5">
@if(count($data) > 0)
<table class="table table-hover table-borderd" id="dataTable_search">
<thead>
<tr>
<th>#</th>
@foreach($data as $d)
<th>{{ $d->field_name }}</th>
@endforeach
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
@foreach($data as $d)


<td>{{ $d->field_value }}</td>

@endforeach


</tr>
</tbody>



</table>
@else
<h3>No Data Avaiable</h3>
@endif

</div>


@endsection