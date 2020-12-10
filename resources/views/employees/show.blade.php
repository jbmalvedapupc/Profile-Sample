@extends('layouts.master_layout')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $employee->full_name }}</h1>

    <div class="row">
        <div class="col-12">
            <label for="">First Name:</label>
            <input class="form-control" type="text" disabled value="{{ $employee->fname }}" name="fname">
            <label for="">Middle Name:</label>
            <input class="form-control" type="text" disabled value="{{ $employee->mname }}" name="mname">
            <label for="">Last Name:</label>
            <input class="form-control" type="text" disabled value="{{ $employee->lname }}" name="lname">
            <form action="{{ route('employees.update', $employee) }}" method="post">
                @csrf
                @method('put')
                <label for="">Image Filename:</label>
                <input class="form-control" type="text" value="{{ $employee->img_filename }}" name="img_filename">
                <button class="btn btn-primary" type="submit">Save Image</button>
            </form>
        </div>
    </div>
@endsection