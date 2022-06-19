@extends('layouts.main')

@section('container')
    <div class="row justify-content-center align-items-center my-5">
        <div class="col-md-5 p-5 shadow border">
            <form method="POST" action="/register/company">
                @csrf
                <h1 class="h3 mb-5 fw-normal text-center">Register as Company</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="floatingInput" required placeholder="Company name" value="{{ old('name') }}">
                    <label for="floatingInput">Company name</label>
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="floatingInput" required placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="floatingPassword" required placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <div class="invalid-feedback">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <button class="w-100 btn btn-lg btn-dark my-3" type="submit">Register</button>
                <small class="d-block text-center">Already has an account? <a class="text-secondary" href="/login">Login
                        here!</a></small>
            </form>
        </div>
    </div>
@endsection
