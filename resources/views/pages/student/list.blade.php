@extends('layouts.app')
@section('content')

<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Student ID</th>
        <th>Action</th>


</tr>
<tr>
    @foreach($std as $s)
    <tr>
        <td>{{$s->name}}</td>
        <td>{{$s->id}}</td>
        <td>{{$s->dob}}</td>
        <td>{{$s->email}}</td>
        <td>{{$s->student_id}}</td>
        <td><a href="/studentEdit/{{$s->id}}/{{$s->name}}">Details</a></td>
        <td><a href="/studentDelete/{{$s->id}}/{{$s->name}}">delete</a></td>

</tr>
@endforeach

</table>

@endsection