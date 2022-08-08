@extends('layouts.app')
@section('content')


<h2>Student Create </h2>

<form action="{{route('studentCreate')}}" class="form-group" method="post">

{{csrf_field()}}

<!-- all errors at a time -->

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>ID</span>
        <input type="text" name="id" value="{{old('id')}}" class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

<br>

<div class="col-md-4 form-group">
        <span>DOB</span>
        <input type="text" name="dob" value="{{old('dob')}}" class="form-control">
        @error('dob') 
            <span class="text-danger">{{$message}}</span>
        @enderror
</div>
<br>

<div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email') 
            <span class="text-danger">{{$message}}</span>
        @enderror
</div>
<br>

<div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone') 
            <span class="text-danger">{{$message}}</span>
        @enderror
</div>
<br>

<input type="submit" name="submit" value="Add Student" class="btn btn-danger">


</form>

@endsection
