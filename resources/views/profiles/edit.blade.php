@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('profile.show', ['user' => $user->id])}}" enctype="multipart/form-data" method="post">
            @csrf

            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h2>Edit Profile</h2>
                    </div>

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label">Title</label>


                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                               name="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label">Description</label>

                        <textarea id="description" class="form-control @error('description') is-invalid @enderror"
                               name="description" autocomplete="description" autofocus rows="10" cols="30">
                            {{ old('description') ?? $user->profile->description}}
                        </textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="row mb-3">
                        <label for="url" class="col-md-4 col-form-label">Url</label>

                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"
                               name="url" value="{{ old('url') ?? $user->profile->url}}" autocomplete="url" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row mb-3 pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
