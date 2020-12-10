@extends('layouts.master_layout')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create New Employee Profile</h1>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">First Name:</label>
                    <input class="form-control" type="text" name="fname">
                </div>
                <div class="form-group">
                    <label for="">Middle Name:</label>
                    <input class="form-control" type="text" name="mname">
                </div>
                <div class="form-group">
                    <label for="">Last Name:</label>
                    <input class="form-control" type="text" name="lname">
                </div>
                <div class="form-group">
                    <label for="">Image File Name:</label>
                    <input class="form-control" type="text" name="img_filename">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection