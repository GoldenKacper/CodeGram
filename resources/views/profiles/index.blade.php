@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-8 offset-md-0 offset-sm-2 p-5">
                <img src="{{asset("{$user->profile->profileImage() }")}}" class="rounded-circle w-100" alt="">
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 pt-5">
                <div class="d-flex justify-content-between align-items-baseline pb-3">
                    <div class="d-flex">
                        <h1>{{ $user->username }}</h1>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}" username="{{ $user->username }}">
                    </div>

                    @can('create', App\Models\Post::class)
                        @can('update', $user->profile)
                            <a href="{{ route('post.create') }}">Add New Post</a>
                        @endcan
                    @endcan

                    {{--                    //TODO: Make button instead of this href--}}
                </div>
                @can('update', $user->profile)
                    <a href="{{route('profile.edit', ['user' => $user->id])}}">Edit Profile</a>
                @endcan
                {{--                    TODO skończyłem na 3:46:51 --}}
                {{--                <status-bar></status-bar>--}}
                <div class="d-flex">
                    <div class="pe-5"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pe-5"><strong class="followers-count">{{ $followersCount }}</strong> followers</div>
                    <div class="pe-5"><strong class="following-count">{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-4 fw-bold">
                    <h5>{{ $user->profile->title }}</h5>
                </div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <div>
                    <a href="#">{{ $user->profile->url ?? 'N/A'}}</a>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($posts as $post)
                <div class="col-4 pb-4">
                    <a href="{{route('post.show', ['post' => $post->id])}}" class="btn btn-">
                        <img src="{{asset("/storage/{$post->image}")}}" class="w-100" alt="">
                    </a>
                </div>
            @endforeach
            <div class="mt-3">
                {{$posts->links('vendor.pagination.bootstrap-5')}}
            </div>
        </div>

    </div>
@endsection
