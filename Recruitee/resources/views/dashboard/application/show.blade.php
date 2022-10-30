@extends('dashboard.layouts.main')

@section('main')
    <div class=" d-flex flex-column flex-wrap flex-md-nowrap align-items-start pt-3 mt-2 pb-1 mb-2 border-bottom">
        <h1 class="h2">Details applicant</h1>
        <h4 class="mb-2">Position apply: {{ $app->title }}</h4>
    </div>
    <a class="btn btn-dark me-2" href="/dashboard/applications/"> <span data-feather="arrow-left"
            class="mb-1"></span> Back to all
        applications</a>
    <a class="btn btn-outline-dark me-2" href="#"> <span data-feather="mail" class="mb-1"></span>
        Contact</a>
    <form action="/dashboard/applications/{{ $app->id }}" method="POST" class="d-inline">
        @csrf
        @method('delete')

        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure want to reject?');">
            <span data-feather="x-circle" class="mb-1"></span> Reject
        </button>
    </form>
    <div class="row ">
        <x-box class="col-md-8 mt-4">
            <h1 class="text-center ">{{ $app->applicant->name }}</h1>
            <h5 class="text-center text-muted mb-3 border-bottom border-2 border-secondary pb-2">
                {{ $app->applicant->email }}</h5>
            <img src="{{ asset($app->applicant->image) }}" alt="job" style="width: 250px"
                class="d-block me-auto my-2 ms-auto mb-3 rounded-circle">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-1">Address</h5>
                            <p class="card-text">{{ $app->applicant->address }}
                            </p>
                        </div>
                    </div>
                </div>
                @if ($app->applicant->file)
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="card-title border-bottom pb-1">Resume</h5>
                                <div class="border border-dark mb-3 p-2">
                                    <i data-feather="file"></i> <a class="text-decoration-none text-dark" target="_blank"
                                        href="{{ asset('storage/' . $app->applicant->file) }}">Download File</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <h5 class="border-bottom pb-1">About Me</h5>
            {!! $app->applicant->desc !!}
        </x-box>
    </div>
@endsection
