@extends('master')

@section('title')
    update
@endsection

@section('content')
<form action="" method="POST">
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">name:</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{$hotels['name']}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="address" class="form-label">address:</label>
        <input type="address" class="form-control" id="address" placeholder="address" name="address " {{$hotels['address']}}>
    </div>
    <div class="mb-3 mt-3">
        <label for="price_avg" class="price_avg">phone:</label>
        <input type="number" class="form-control" id="price_avg" placeholder="price_avg" name="price_avg" {{$hotels['price_avg']}}>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/hotels/" class="btn btn-info">quay lai</a>
 </form>
@endsection