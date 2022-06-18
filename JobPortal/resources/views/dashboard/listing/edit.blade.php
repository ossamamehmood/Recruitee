@extends('dashboard.layouts.main')

@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h1">Edit list</h3>
    </div>
    <div class="row">
        <div class="col-md-8 mb-5">
            <form method="post" action="/dashboard/lists/{{ $listing->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" placeholder="Job's title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title', $listing->title) }}" aria-describedby="title">
                    <div class="invalid-feedback">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Tags (comma seperated)</label>
                    <input type="text" name="tags" value="{{ old('tags', $listing->tags) }}"
                        placeholder="example: developer, progammer, etc"
                        class="form-control @error('tags') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('tags')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" value="{{ old('location', $listing->location) }}"
                        placeholder="Address place" class="form-control @error('location') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('location')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" name="website" value="{{ old('website', $listing->website) }}"
                        placeholder="Example.com" class="form-control @error('website') is-invalid @enderror">
                    <div class="invalid-feedback">
                        @error('website')
                            is-invalid
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Job description</label>
                    @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <input id="x" name="description" type="hidden" value="{{ old('description', $listing->description) }}"
                        name="content">
                    <trix-editor input="x"></trix-editor>
                </div>

                <button type="submit" class="btn btn-dark">Save change</button>
            </form>
        </div>
    </div>
@endsection
