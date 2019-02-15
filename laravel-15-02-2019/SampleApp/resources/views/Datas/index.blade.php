@extends('layouts.app')
@section('content')
<table border="3">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>password</th><th>Edit</th><th>Delete</th>
    </tr>
    @foreach ($dbdata as $row)
    <tr>
        <td>{{($row['id'])}}</td>
        <td>{{($row['name'])}}</td>
        <td>{{($row['email'])}}</td>
        <td>{{($row['password'])}}</td>
        <td><a href="{{route('datas.edit',$row['id'])}}"><button name="edit">Edit</button></a></td>
        <td>
            <form action="{{route('datas.destroy',$row['id'])}}" method="POST">
                @csrf
                @method('Delete')
            <button name="delete">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    <tr>

    </tr>
</table>
@endsection