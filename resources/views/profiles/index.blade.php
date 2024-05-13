@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{asset('images/CodeGramLogo_1.png')}}" class="rounded-circle" alt="">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
{{--                    //TODO: Make button instead of this href--}}
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>153</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div class="pe-5"><strong>212</strong> following</div>
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
            <div class="col-4 pb-4">
                <img src="{{asset('images/image_1.jpeg')}}" class="w-100" alt="">
            </div>
            <div class="col-4 pb-4">
                <img src="{{asset('images/image_2.jpeg')}}" class="w-100" alt="">
            </div>
            <div class="col-4 pb-4">
                <img src="{{asset('images/image_3.jpeg')}}" class="w-100" alt="">
            </div>
            <div class="col-4 pb-4">
                <img src="{{asset('images/image_4.jpeg')}}" class="w-100" alt="">
            </div>
            <div class="col-4 pb-4">
                <img src="{{asset('images/image_5.jpeg')}}" class="w-100" alt="">
            </div>
            <div class="col-4 pb-4">
                <img src="{{asset('images/image_6.jpeg')}}" class="w-100" alt="">
            </div>
        </div>
    </div>
@endsection