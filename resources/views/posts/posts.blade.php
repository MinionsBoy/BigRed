@extends('layouts.app')
@section('content')
    <div style="height: 75px; background-color: rgba(70, 82, 98, 0.8);"></div>
    <section id="solution"
             style="background: url(http://commonpixel.com/themes/edgar/images/examples/bg_parallax_05.jpg) no-repeat 50% 50% / cover fixed;">
        <div class="container-fluid projects-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-4 leftAlign xsAlignReset">
                    <a href="{{ route('posts.create')}}" class="button primary large">New post</a>


                    <button onclick="myFunction()" class="dropbtn button primary large">Search</button>
                    <div id="myDropdown" class="dropdown-content">
                        <input class="effect-4" type="text" placeholder="Search" id="myInput"
                               onkeyup="filterFunction()">
                        {{--<input type="text" placeholder="Search.." >--}}

                        @foreach($posts as $post)
                            <a href="{{ route('posts.show',['id'=>$post->id])}}">
                                <div class="col-xl-12 ">
                                    <div class="col-md-10 col-sm-10 elem aos-init aos-animate wow fadeInUpBig"
                                         data-aos="zoom-in" style="visibility: visible;">
                                        <div class="service_item" style="text-align: left">
                                            <p style="color: white">{{$post->title}}</p>
                                            <p>{{$post->description}}</p>
                                            <p style="text-align: end">{{date( 'M j, Y H:i', strtotime($post->created_at)) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

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

        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            function filterFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                div = document.getElementById("myDropdown");
                a = div.getElementsByTagName("a");
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                    } else {
                        a[i].style.display = "none";
                    }
                }
            }
        </script>

    </section>
@endsection

