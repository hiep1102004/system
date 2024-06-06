@extends('master')

@section('title')
    danh sach
@endsection
@section('content')
<a href="/hotels/add" class="btn btn-info">add</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>address</th>
            <th>price_avg</th>
            <th>action</th>
        </tr>
        @foreach ($hotels as $item)
            
        @endforeach
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['address']}}</td>
            <td>{{$item['price_avg']}}</td>
            <td>
                <a href="/hotels/{{$item['id']}}/update" class="btn btn-info">update</a>
                <a href="/hotels/{{$item['id']}}/delete" class="btn btn-info">xoa</a>
            </td>

        </tr>
    </table>
@endsection