@extends('layouts.main')

@section('container')
    <a href="/jobs" class="btn btn-dark mb-3"><i data-feather="chevron-left"></i> Back</a>
    <div class="row justify-content-center">
        <article class="border shadow col-md-8 p-3 mb-5">
            <h3>{{ $listing->title }}</h3>
            <x-tags :tagsCsv="$listing->tags"></x-tags>
            <h5 class="">{{ $listing->company }}</h5>
            <h6> <i class="icon-16" data-feather="link"></i> {{ $listing->website }} </h6>
            <h6 class="border-bottom pb-3"><i class="icon-16" data-feather="map-pin"></i>
                {{ $listing->location }}</h6>
            <p class="mt-4 text-start"> {!! $listing->description !!} </p>
            <div class="border-bottom mb-3"></div>
            <button data-bs-toggle="modal" data-bs-target="#modal" class="mb-3 btn btn-dark">Apply Job</button>

        </article>
        <div class="col-md-4">
            <article class="border shadow col-md-10 text-center py-3 px-1 mb-5">
                <h3 class="mb-2 border-bottom pb-2 mx-3">Company Profile</h3>
                <h5>{{ $listing->user->name }}</h5>
                <img src="{{ asset('storage/' . $listing->user->image) }}" alt="company picture" style="width: 200px"
                    class="img-fluid">
                <div class="p-3 text-start small"> {!! $listing->user->desc !!} </div>
            </article>
        </div>
    </div>

    <x-modal>
        @auth
            <x-slot name="header">Apply to {{ $listing->title }} </x-slot>
            <x-slot name="body">
                Your profile details will be forwarded to the company for review. Make sure already update your profile.
            </x-slot>
            <x-slot name="footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                <form action="/jobs/apply/{{ $listing->id }}" id="formModal" method="post">
                    @csrf
                    <input type="hidden" id="receiver" name="receiver_id" value="{{ $listing->user->id }}">
                    <input type="hidden" id="title" name="title" value=" {{ $listing->title }} ">
                    <button type="submit" class="btn btn-dark">Apply</button>
                </form>
            </x-slot>
        @else
            <x-slot name="header">Apply to {{ $listing->title }} </x-slot>
            <x-slot name="body">
                You need an account to apply a job Please login or register to make an account.
            </x-slot>
            <x-slot name="footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </x-slot>
        @endauth
    </x-modal>
@endsection
