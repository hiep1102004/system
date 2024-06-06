@extends('master')
@section('title')
    danh sach
@endsection


@section('content')
<a href="/teacher/add" class="btn btn-primary">add</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>action</th>
    </tr>
   <tr>
    @foreach ($teacher as $item)
        
    @endforeach

    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['email']}}</td>
    <td>{{$item['phone']}}</td>
    <td>
        <a href="/teacher/{{$item['id']}}/update" class="btn btn-info">sua</a>
        <a href="/teacher/{{$item['id']}}/delete" class="btn btn-info" onclick="return confirm('chac chua')">xoa</a>
    </td>
   </tr>

</table>
    
@endsection