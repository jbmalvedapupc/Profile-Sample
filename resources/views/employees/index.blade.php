@extends('layouts.master_layout')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Employees</h1>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                {{-- Buong object ang ipinasa --}}
                                <td><a href="{{ route('employees.show', $employee) }}">{{ $employee->full_name }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection