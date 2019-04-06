@section('style')
    @include('layouts.headerStyle')
@endsection

@section('header')
    <!-- start header section -->
    <div class="hader">
        <nav class="navbar navbar-default navbar-fixed-top style_nav" data-spy="affix" data-offset-top="10" data-offset-bottom="200">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand style_brand" href="#"><img class="img-responsive" src="/images/logo.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="/">HOME</a></li>
                        @auth
                        @endauth
                        @can('admin_section')
                            <li><a href="/admin">ADMIN PANEL</a></li>
                        @endcan
                        @guest
                        <li><a href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('SIGN UP') }}</a></li>
                        @endguest
                        @auth
                        <li class="dropdown"><a href="#">MY CABINET<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="dropdown-content wow fadeInUp" data-wow-duration="0.2s">
                                <a href="{{route('posts.index')}}">Posts</a>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('LOGOUT') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- end header section -->

    <!--  =================================  START CAROUSEL SECTION================================================-->
@endsection


{{--<!--  -->--}}
{{--<section id="company">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
        {{--</div>--}}
        {{--<div class='row'>--}}
            {{--<div class='col-md-12'>--}}
                {{--<div class="carousel slide media-carousel" id="media">--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="item  active">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_05.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_01.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_02.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_03.png"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item  ">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_04.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_05.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_03.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_03.png"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item  ">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_04.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_05.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_03.png"></a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<a class="img-responsive" href="#"><img alt="" class="company_image" src="http://commonpixel.com/themes/edgar/images/examples/client_03.png"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}



{{--<div id="tf-portfolio" class="content-area layout-two">--}}
{{--<div class="container-fluid">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<div class="sectionTitle center">--}}
{{--<p>our projects</p>--}}
{{--<h2 class="title">Featured works</h2>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row nomargin">--}}

{{--<div class="col-md-3 col-sm-6 col-xs-12 nopadding">--}}
{{--<a href="#inline-1" data-gal="prettyPhoto[pp_gal]">--}}
{{--<div class="portfolio-item">--}}
{{--<div class="hover-bg">--}}
{{--<div class="border">--}}
{{--<div class="hover-txt">--}}
{{--<i class="ion-ios-plus-empty"></i>--}}
{{--<h4>Luka Mockup Design</h4>--}}
{{--<span>Photoshop</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<img src="http://commonpixel.com/themes/edgar/images/examples/work_tall_01.jpg" class="img-responsive" alt="...">--}}
{{--</div>--}}
{{--</a>--}}


{{--</div>--}}

{{--<div class="col-md-3 col-sm-6 col-xs-12 nopadding">--}}
{{--<a href="#inline-11" data-gal="prettyPhoto[pp_gal]">--}}
{{--<div class="portfolio-item">--}}
{{--<div class="hover-bg">--}}
{{--<div class="border">--}}
{{--<div class="hover-txt">--}}
{{--<i class="ion-ios-plus-empty"></i>--}}
{{--<h4>Photography</h4>--}}
{{--<span>Photos</span> /--}}
{{--<span>Digital</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<img src="http://commonpixel.com/themes/edgar/images/examples/work_tall_02.jpg" class="img-responsive" alt="...">--}}
{{--</div>--}}
{{--</a>--}}

{{--</div>--}}

{{--<div class="col-md-3 col-sm-6 col-xs-12 nopadding">--}}
{{--<a href="#inline-3" data-gal="prettyPhoto[pp_gal]">--}}
{{--<div class="portfolio-item">--}}
{{--<div class="hover-bg">--}}
{{--<div class="border">--}}
{{--<div class="hover-txt">--}}
{{--<i class="ion-ios-plus-empty"></i>--}}
{{--<h4>WordPress Themes</h4>--}}
{{--<span>Web Design</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<img src="http://commonpixel.com/themes/edgar/images/examples/work_01.jpg" class="img-responsive" alt="...">--}}
{{--</div>--}}
{{--</a>--}}

{{--<a href="#inline-6" data-gal="prettyPhoto[pp_gal]">--}}
{{--<div class="portfolio-item">--}}
{{--<div class="hover-bg">--}}
{{--<div class="border">--}}
{{--<div class="hover-txt">--}}
{{--<i class="ion-ios-plus-empty"></i>--}}
{{--<h4>Photography</h4>--}}
{{--<span>Photos</span> /--}}
{{--<span>Digital</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<img src="http://commonpixel.com/themes/edgar/images/examples/work_03.jpg" class="img-responsive" alt="...">--}}
{{--</div>--}}
{{--</a>--}}

{{--</div>--}}

{{--<div class="col-md-3 col-sm-6 col-xs-12  nopadding">--}}
{{--<a href="#inline-3" data-gal="prettyPhoto[pp_gal]">--}}
{{--<div class="portfolio-item">--}}
{{--<div class="hover-bg">--}}
{{--<div class="border">--}}
{{--<div class="hover-txt">--}}
{{--<i class="ion-ios-plus-empty"></i>--}}
{{--<h4>WordPress Themes</h4>--}}
{{--<span>Web Design</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<img src="http://commonpixel.com/themes/edgar/images/examples/work_02.jpg" class="img-responsive" alt="...">--}}
{{--</div>--}}
{{--</a>--}}

{{--<a href="#inline-6" data-gal="prettyPhoto[pp_gal]">--}}
{{--<div class="portfolio-item set">--}}
{{--<div class="hover-bg">--}}
{{--<div class="border">--}}
{{--<div class="hover-txt">--}}
{{--<i class="ion-ios-plus-empty"></i>--}}
{{--<h4>Photography</h4>--}}
{{--<span>Photos</span> /--}}
{{--<span>Digital</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<img src="http://commonpixel.com/themes/edgar/images/examples/work_04.jpg" class="img-responsive" alt="...">--}}
{{--</div>--}}
{{--</a>--}}

{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
