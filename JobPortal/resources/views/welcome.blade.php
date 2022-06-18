@extends('layouts.main')

@section('container')
    <section class="border shadow">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bg-dark">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1200x500/?deal" style="opacity: 30%" class="d-block w-100 bg-dark"
                        alt="Heroes image">
                </div>
                <div class="carousel-caption d-none d-md-block my-lg-5">
                    <h3>Find your dream job here</h3>
                    <p>Various career opportunities await you.
                        Find the right career and connect with companies anytime, anywhere.</p>
                    <a class="btn btn-secondary" href="/register">Register Now</a>
                </div>
            </div>
            <div class="row justify-content-center px-3 py-4 d-block d-md-none">
                <div class="col text-center ">
                    <h3>Find your dream job here</h3>
                    <p>Some representative placeholder content for the first slide.And an even wittier subheading to boot.
                        Jumpstart
                        your
                        marketing
                        efforts with this example based on Apple's marketing pages.</p>
                    <a class="btn btn-dark" href="/register">Register Now</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="d-md-flex justify-content-evenly flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-dark my-3 me-md-3 pt-3 px-3 shadow pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Job Seekers</h2>
                    <p class="lead">Find and get better job opportunities according to skills and location.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;">
                    <a href="/jobs" class="btn btn-dark px-5 py-3" style="position:relative; top:40%;">Search a job</a>
                </div>
            </div>
            <div class="bg-light my-3  me-md-3 pt-3 px-3 shadow pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Company</h2>
                    <p class="lead">Post job advertisements to connect with the most potential job seekers.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 21px 21px 0 0;">
                    <a href="/register/company" class="btn btn-light px-5 py-3" style="position:relative; top:40%;">Post a
                        job</a>
                </div>
            </div>
        </div>
    </section>
@endsection
