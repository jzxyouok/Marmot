@extends('layouts.app')

@section('content')
<div class="cover">
    <ul class="curtain">
        <li style='background-image: url("http://img1.gtimg.com/v/pics/hv1/170/251/2105/136941800.jpg?max_age=604800")'></li>
    </ul>
</div>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="main-header">
                    <div class="row">
                        <h1 class="main-title">今日热播</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="hot-show">
                            <div class="row">
                                <img src="{{ asset('/images/tmp/896ac426e6294a8b91026acb3ef88bc3.jpg') }}" alt="">
                            </div>
                            <h1></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                ...
            </div>
        </div>
    </div>
</div>
@endsection
