
@extends('layouts.main')
@section('content')

<div class="container py-5">

<div class="card">
  <div class="card-header">
    {{ $form[0]->name }}
  </div>
  <div class="card-body">
  <form action = "{{ url('/submit') }}" method="post">
  @csrf
 
  @foreach($form as $field)
  <input type="text" class="form-control" name="form_id" value ="{{ $field->id }}" hidden>
  @if($field->field_type != "Text_Area")
  <div class="form-group">
    <label for="exampleFormControlInput1">{{ $field->field_name }}</label>
    <input type="{{ strtolower(trans($field->field_type)) }}" name="{{ $field->field_name }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter your value">
  </div>
  @else 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">{{ $field->field_name }}</label>
    <textarea class="form-control" name="{{ $field->field_name }}" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  @endif
 @endforeach

 
  <div class="card-footer">
  <button type="submit" class="btn btn-primary">Post Data</button>
  <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
  </div>

</form>
  </div>
</div>
</div>
@endsection