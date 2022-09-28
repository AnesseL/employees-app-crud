@extends('layouts.master')
@section('title','Home Page - Employees List')
@section('content')
    <section class="container">
        <div class="row justify-content-center">
            <h1 class="py-5">Employees List</h1>
           
            <table class="table table-striped">
                <thead>
                    <tr class="col">
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PHONE</th>
                        <th scope="col">PESEL</th>
                        <th scope="col">EMPLOYMENT DATE</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                @foreach ($employeeslist as $employee)
                <tbody>
                    <tr class="col">
                        <td scope="col">{{ $employee->id }}</td>
                        <td scope="col">{{ $employee->name }}</td>
                        <td scope="col">{{ $employee->address }}</td>
                        <td scope="col">{{ $employee->email }}</td>
                        <td scope="col">{{ $employee->phone }}</td>
                        <td scope="col">{{ $employee->pesel }}</td>
                        <td scope="col">{{ $employee->date }}</td>
                        <td scope="col">
                            <a href="" class="btn btn-primary d-inline-block">Edit</a>
                            <form action="" method="POST" class="d-inline-block">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>  
        </div>
    </section>
@endsection