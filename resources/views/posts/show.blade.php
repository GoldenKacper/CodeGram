@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="{{ asset('storage/' . $post->image) }}" class="w-100" alt="">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pe-3">
                            <img src="{{ asset($post->user->profile->profileImage()) }}"
                                 class="rounded-circle w-100" style="max-width: 40px">
                        </div>
                        <div>
                            <div class="fw-bold d-flex">
                                <a href="{{ asset('/profile/'. $post->user->id) }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                <div><img src="{{ asset('svg/dot.svg') }}" class="ps-1" alt=""></div>
                                <a href="#" class="ps-1">Follow</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p>
                        <span class="fw-bold">
                            <a href="{{ asset('/profile/'. $post->user->id) }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span>
                        {{$post->caption}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
