@extends('dashboard.layouts.main')

@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }} </h1>
    </div>
    <h2>Job Lists</h2>
    <a href="/dashboard/lists/create" class="btn btn-dark my-3">Create new list</a>
    <div class="row mb-5">
        <div class="col-md-8">
            <x-flash-message type="success" />
        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Listed at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lists as $list)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $list->title }}</td>
                            <td>
                                <x-tags :tagsCsv="$list->tags" readOnly="true" />
                            </td>
                            <td> {{ $list->created_at->diffForhumans() }} </td>
                            <td><a href="/dashboard/lists/{{ $list->id }}" class="badge bg-dark">
                                    <i data-feather="eye"></i>
                                </a>
                                <a href="/dashboard/lists/{{ $list->id }}/edit" class="badge bg-secondary">
                                    <i data-feather="edit"></i>
                                </a>
                                <button class="showModal badge bg-danger border-0" data-id="{{ $list->id }}"
                                    data-title="{{ $list->title }}" data-bs-toggle="modal" data-bs-target="#modal"><i
                                        data-feather="x-circle"></i></button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <x-modal>
        <x-slot name="header">
            Delete list
        </x-slot>
        <x-slot name="body">
            <p>Are you sure want to delete?</p>
            <div id="modalBody"></div>
        </x-slot>
        <x-slot name="footer">
            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">cancel</button>
            <form class="d-inline" id="formModal" method="POST" action="/dashboard/lists/">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-dark">
                    Delete
                </button>
            </form>
        </x-slot>
    </x-modal>

    <script>
        const allShow = document.querySelectorAll('.showModal');
        const title = document.querySelector('#modalBody');
        const form = document.querySelector('#formModal')

        allShow.forEach(show => {
            show.addEventListener('click', () => {
                title.innerHTML = 'job\'s title: ' + show.dataset.title;
                form.action = '/dashboard/lists/' + show.dataset.id;
            })
        });
    </script>
@endsection
