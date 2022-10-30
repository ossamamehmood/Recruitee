@extends('dashboard.layouts.main')

@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }} </h1>
    </div>
    <h2>Preview</h2>
    <a class="btn btn-dark me-2" href="/dashboard/lists/"> <span data-feather="arrow-left"></span> Back to all job lists</a>
    <a class="btn btn-outline-dark me-2" href="/dashboard/lists/{{ $listing->id }}/edit"> <span data-feather="edit"></span>
        Edit</a>
    <form action="/dashboard/lists/{{ $listing->id }}" method="POST" class="d-inline">
        @csrf
        @method('delete')

        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure want to delete?');">
            <span data-feather="x-circle"></span> Delete
        </button>
    </form>
    <article class="border shadow col-md-8 mt-3 mb-5 p-3">
        <h3>{{ $listing->title }}</h3>
        <x-tags :tagsCsv="$listing->tags"></x-tags>
        <h5 class="">{{ $listing->company }}</h5>
        <h6> {{ $listing->website }} </h6>
        <h6 class="border-bottom pb-3"><i style="width:16px; height:16px" data-feather="map-pin"></i>
            {{ $listing->location }}</h6>
        <p class="mt-4 text-start"> {!! $listing->description !!} </p>
        <div class="border-top my-3"></div>
        <button class="mb-3 btn btn-dark">Apply Job</button>
    </article>
@endsection
