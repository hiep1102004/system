@extends('master')
@section('title')
update
    
@endsection

@section('content')
<form action="" method="POST">
<div class="mb-3 mt-3">
    <label for="name" class="form-label">name:</label>
    <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{$teacher['name']}}">
</div>
<div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$teacher['email']}}">
</div>
<div class="mb-3 mt-3">
    <label for="phone" class="form-label">phone:</label>
    <input type="number" class="form-control" id="phone" placeholder="phone" name="phone" value="{{$teacher['phone']}}">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="/teacher/" class="btn btn-info">quay lai</a>
</form>
@endsection