@extends('layouts.app')
@section('content')
    <div style="height: 75px; background-color: rgba(70, 82, 98, 0.8);"></div>
    <section id="solution"
             style="background: url(http://commonpixel.com/themes/edgar/images/examples/bg_parallax_05.jpg) no-repeat 50% 50% / cover fixed;">
        <div class="container-fluid projects-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-4 leftAlign xsAlignReset">
                    <a href="{{ route('posts.create')}}" class="button primary large">New post</a>
                </div>
                @foreach($posts as $post)
                    <div class="col-md-12">
                        <div class="container">
                            @include('includes.post_card')
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection
