@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{asset('images/CodeGramLogo_1.png')}}" class="rounded-circle" alt="">
            </div>
            <div class="col-9 pt-5">
                <div>
                    <h1>CodeGramCamp</h1>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>153</strong> posts</div>
                    <div class="pe-5"><strong>23k</strong> followers</div>
                    <div class="pe-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 fw-bold">
                    <h5>CodeGramCamp.com</h5>
                </div>
                <div>We are a global community of millions of people learning to code together. We are an open source,
                    donor-supported, 501(c)(3) nonprofit.
                </div>
                <div>
                    <a href="#">www.codegramcamp.org</a>
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
