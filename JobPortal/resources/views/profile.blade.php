@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <x-box class="col-md-8">
            <h1 class="text-center">Profile</h1>
            <x-flash-message type="success" />
            <img src="{{ asset($user->image) }}" alt="job" style="height:250px"
                class="d-block me-auto ms-auto mb-3 rounded-circle img-fluid overflow-hidden">
            <form method="post" enctype="multipart/form-data" action="/profile">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full name</label>
                    <input type="text" name="name" placeholder="Your name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}"
                        aria-describedby="name">
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                        placeholder="example: email@example.com" class="form-control @error('email') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" value="{{ old('address', $user->address) }}"
                        placeholder="Address place" class="form-control @error('address') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    @if ($user->image)
                        <img src="{{ asset($user->image) }}" class="img-fluid img-preview col-md-5 mb-2 d-block">
                    @else
                        <img class="img-fluid img-preview col-md-5 mb-2">
                    @endif
                    <input name="image" onchange="previewImage()" class="form-control @error('image') is-invalid @enderror"
                        type="file" id="image">
                    <div class="invalid-feedback">
                        @error('image')
                            is-invalid
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Resume or CV</label>
                    @if ($user->file)
                        <div class="border border-dark mb-3 p-2">
                            <i data-feather="file"></i> <a class="text-decoration-none text-dark" target="_blank"
                                href="{{ asset('storage/' . $user->file) }}">Download File</a>
                        </div>
                    @else
                    @endif

                    <input name="file" class="form-control @error('file') is-invalid @enderror" type="file" id="formFile">
                    <div class="invalid-feedback">
                        @error('file')
                            is-invalid
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description (Tell us more about yourself)</label>
                    @error('desc')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <input id="x" name="desc" type="hidden" value="{{ old('desc', $user->desc) }}" name="content">
                    <trix-editor input="x"></trix-editor>
                </div>

                <button type="submit" class="btn btn-dark">Save change</button>
            </form>
        </x-box>
    </div>

    <script>
        // Previewing Image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const blob = URL.createObjectURL(image.files[0]);
            imgPreview.src = blob;
        }
    </script>
@endsection
