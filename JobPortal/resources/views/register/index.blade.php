@extends('layouts.main')

@section('container')
    <h3 class="text-center mt-4">Welcome to Job Portal!</h3>
    <h5 class="text-center">First of all, what do you want to do?</h5>
    <div class="d-md-flex justify-content-around">
        <x-box class="bg-dark text-white">
            <h1 class="h4">Looking for a job</h1>
            <p>Show your abilities and qualities as a talent in an easy way. So that recruiters can see if you can be one of
                the candidates for a job interview.</p>
            <a href="/register/seeker" class="btn btn-light">Register as seeker</a>
        </x-box>
        <p class="align-self-center text-center lead">OR</p>
        <x-box>
            <h1 class="h3">Looking for a candidate</h1>
            <p>Recruiting candidates is indeed a challenge. We therefore understand that a job recruiter can require
                multiple job recruitment platforms.
            </p>
            <a href="/register/company" class="btn btn-dark">Register as company</a>
        </x-box>
    </div>
    <div class="text-center">
        <small>Already has an account? <a class="text-secondary" href="/login">Login
                here!</a></small>
    </div>
@endsection
