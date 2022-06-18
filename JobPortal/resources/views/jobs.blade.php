@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <form class="mt-3 col-10" action="/jobs" method="GET">
            <div class="input-group mb-3">
                <input name="search" type="text" class="form-control" placeholder="Search jobs" aria-label="Search jobs"
                    aria-describedby="basic-addon2" value="{{ request('search') }}">
                <button type="submit" class=" input-group-text btn btn-dark">Search</button>
            </div>
        </form>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <x-flash-message type="success" />
        </div>
    </div>
    <div class="row justify-content-center mb-2">
        @foreach ($listings as $listing)
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class=" row align-items-center g-0">
                        <div class="col-3 justify-content-center">
                            <a href="/jobs/{{ $listing->id }}" class="text-decoration-none">
                                <img src="{{ asset('storage/' . $listing->user->image) }}" style="max-height: 300px;"
                                    class="img-fluid rounded-start overflow-hidden border-right" alt="logo">
                            </a>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h4 class="card-title border-bottom pb-2"><a class="text-decoration-none text-dark"
                                        href="/jobs/{{ $listing->id }}">{{ $listing->title }}</a></h4>
                                <x-tags :tagsCsv="$listing->tags" />
                                <small class="lead">{{ $listing->company }}</small>
                                <small class="d-block"><i class="icon-16" data-feather="link"></i>
                                    {{ $listing->website }} </small>
                                <small class="d-block border-bottom pb-2"><i class="icon-16"
                                        data-feather="map-pin"></i>
                                    {{ $listing->location }}</small>
                                <button class="showModal mt-3 btn btn-dark btn" data-id="{{ $listing->id }}"
                                    data-title="{{ $listing->title }}" data-receiver="{{ $listing->user->id }}"
                                    data-bs-toggle="modal" data-bs-target="#modal">Apply
                                    job</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $listings->links() }}
    <!-- Modal -->
    <x-modal>
        @auth
            <x-slot name="header">
                <div id="modalHeader">P</div>
            </x-slot>
            <x-slot name="body">
                Your profile details will be forwarded to the company for review. Make sure already update your profile.
            </x-slot>
            <x-slot name="footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                <form action="/jobs/apply/" id="formModal" method="post">
                    @csrf
                    <input type="hidden" id="receiver" name="receiver_id" value="">
                    <input type="hidden" id="title" name="title" value="">
                    <button type="submit" class="btn btn-dark">Apply</button>
                </form>
            </x-slot>
        @else
            <x-slot name="header">
                <div id="modalHeader">Please login</div>
            </x-slot>
            <x-slot name="body">
                You need an account to apply a job Please login or register to make an account.
            </x-slot>
            <x-slot name="footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </x-slot>
        @endauth
    </x-modal>

    <script>
        const allShow = document.querySelectorAll('.showModal');
        const title = document.querySelector('#modalHeader');
        const form = document.querySelector('#formModal');
        const inputReceiver = document.querySelector('#receiver');
        const inputTitle = document.querySelector('#title');

        allShow.forEach(show => {
            show.addEventListener('click', () => {
                console.log(title.innerHTML);
                title.innerHTML = 'Apply to ' + show.dataset.title;
                form.action = '/jobs/apply/' + show.dataset.id;
                inputReceiver.value = show.dataset.receiver;
                inputTitle.value = show.dataset.title;
            })
        });
    </script>
@endsection
