@extends('layouts.app')

@section('content')
@include("widgets.carousel")
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
