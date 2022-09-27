@extends('layouts.master')
@section('title','Home Page')
@section('content')
    <section class="container">
        <div class="row justify-content-center">
            <h1 class="py-5">Employees List</h1>
            <h2>{{ $employeeslist }}</h2>
        </div>
    </section>
@endsection