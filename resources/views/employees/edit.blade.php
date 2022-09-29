@extends('layouts.master')
@section('title','Employees Edit')
@section('content')
    <section class="container">
        <div class="row justify-content-center">
            <h1 class="py-5">Edit An Employee {{ $employee->id }}</h1>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form name="setMessage" action="" method="" id="contactForm" novalidate="novalidate">
                        {{ csrf_field() }}
                        <!-- Name -->
                        <div class="form-floating mb-3">
                            <input class="form-control" value="{{ $employee->name }}" id="name" name="name" type="text"
                                placeholder="Name and Surname Employes" data-sb-validations="required" />
                            <label>Name and Surname of the Employee</label>
                            <div class="invalid-feedback" data-sb-feedback="number:required">Enter the employee's
                                name and surname</div>
                        </div>
                        <!-- Address -->
                        <div class="form-floating mb-3">
                            <input class="form-control" value="{{ $employee->address }}" id="address" name="address" type="text"
                                placeholder="Address" data-sb-validations="required" />
                            <label>Address</label>
                            <div class="invalid-feedback" data-sb-feedback="date:required">Enter the employee's
                                address</div>
                        </div>
                        <!-- Email -->
                        <div class="form-floating mb-3">
                            <input class="form-control" value="{{ $employee->email }}" id="email" name="email" type="text" placeholder="Email"
                                data-sb-validations="required" />
                            <label>Email</label>
                            <div class="invalid-feedback" data-sb-feedback="date:required">Enter the employee's
                                email address</div>
                        </div>
                        <!-- Phone -->
                        <div class="form-floating mb-3">
                            <input class="form-control" value="{{ $employee->phone }}" id="phone" name="phone" type="text" placeholder="Phone"
                                data-sb-validations="required" />
                            <label>Phone</label>
                            <div class="invalid-feedback" data-sb-feedback="total:required">Enter the employee's
                                phone number
                            </div>
                        </div>
                        <!-- PESEL -->
                        <div class="form-floating mb-3">
                            <input class="form-control" value="{{ $employee->pesel }}" id="pesel" name="pesel" type="text" placeholder="PESEL"
                                data-sb-validations="required" />
                            <label>PESEL</label>
                            <div class="invalid-feedback" data-sb-feedback="total:required">Enter the employee's
                                PESEL
                            </div>
                        </div>
                        <!-- Date -->
                        <div class="form-floating mb-3">
                            <input class="form-control" value="{{ $employee->date }}" id="date" name="date" type="text" placeholder="Date: Year-Month-Day"
                                data-sb-validations="required" />
                            <label>Date: Year-Month-Day</label>
                            <div class="invalid-feedback" data-sb-feedback="total:required">Enter the employee's
                                Date
                            </div>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Add a new employee</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection