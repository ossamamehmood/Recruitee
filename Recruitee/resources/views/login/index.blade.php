@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center my-5">
        <div class="col-md-5 p-5 shadow border">
            <form action="/login" method="POST">
                @csrf
                <x-flash-message type="success" />
                <x-flash-message type="error" />
                <h1 class="h3 mb-5 fw-normal text-center ">Login as Job Seeker or Company</h1>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" value="{{ old('email') }}"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-dark my-3" type="submit">Login</button>
                <small class="d-block text-center">Don't have an candidate/company account? <a class="text-secondary" href="/register">Register
                        Now!</a></small>
            </form>
        </div>
    </div>
@endsection
