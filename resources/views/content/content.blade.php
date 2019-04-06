@section('style')
    @parent
    @include('layouts.headerStyle')
@endsection

@section('content')
    <section id="slider">
        <div class="overlay_background">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_item1 slider_bg_1">
                            <div class="overlay_background">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="description wow fadeInUp" data-slide="2" style="top: 206.389px;">
                                                <div class="title">
                                                    <p>Search</p>
                                                    <h1>We give you chance <span class="break">improve yourself</span></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider_item1 slider_bg_2">
                            <div class="overlay_background">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="description wow fadeInUp" data-slide="2" style="top: 206.389px;">
                                                <div class="title">
                                                    <p>Employees</p>
                                                    <h1>Build you`r future.<span class="break">Do it now</span></h1>
                                                </div>
                                                <div>
                                                    <a class="button primary large" href="{{route('posts.create')}}">Create new post</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider_item1 slider_bg_3">
                            <div class="overlay_background">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="description wow fadeInUp" data-slide="2" style="top: 206.389px;">
                                                <div class="title">
                                                    <p>Friends</p>
                                                    <h1>Looking for friend? <span class="break">Find new friend for own party</span></h1>
                                                </div>
                                                <div>
                                                    <a class="button primary large" href="#">Register company</a>
                                                    <a class="button transparent large" href="#">Create vacancy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Controls -->

            </div>
        </div>
    </section>

    <section id="tabbed_slider">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ul class="    iconTabs nav row  aos-init aos-animate">
                    <li data-target="#myCarousel" data-slide-to="0" class="col-md-3 active nav1">
                        <a href="#skills" class="active">
                            <i class="fa fa-tasks icon"></i>
                            <h6>Our top skills</h6>
                            <p>What we're good at</p>
                        </a>
                    </li>
                    <li data-target="#myCarousel" data-slide-to="1" class="col-md-3 nav1">
                        <a href="#mission" class="">
                            <i class="fa fa-lightbulb-o icon"></i>
                            <h6>Our mission</h6>
                            <p>Professional team</p>
                        </a>
                    </li>
                    <li data-target="#myCarousel" data-slide-to="2" class="col-md-3 nav1">
                        <a href="#values" class="">
                            <i class="fa fa-sliders icon"></i>
                            <h6>Core values</h6>
                            <p>Working for you</p>
                        </a>
                    </li>
                    <li data-target="#myCarousel" data-slide-to="3" class="col-md-3 nav1">
                        <a href="#about" class="">
                            <i class="fa fa-trophy icon"></i>
                            <h6>About us</h6>
                            <p>Who we are</p>
                        </a>
                    </li>
                </ul>


                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active set_slider_padding">
                        <div id="skills" class="row">
                            <div class="col-sm-6 mBase25 aos-init aos-animate" data-aos="fade-in">
                                <img src="http://commonpixel.com/themes/edgar/images/examples/photo_01.jpg" class="responsive" alt="Image title">
                            </div>
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-in">
                                <div class="sectionTitle">
                                    <p>PROGRESS</p>
                                    <h2 class="title">Professional expertise</h2>
                                </div>
                                <div class="progressBarWrap">
                                    <div class="progressBar">
                                        <div class="wrap animated" data-width="75" style="width: 75%;">
                                            <div class="inner"></div>
                                            <div class="no">75%</div>
                                        </div>
                                        <h5 class="info">
                                            Project evaluation
                                        </h5>
                                    </div>
                                    <div class="progressBar">
                                        <div class="wrap animated" data-width="82" style="width: 82%;">
                                            <div class="inner"></div>
                                            <div class="no">82%</div>
                                        </div>
                                        <h5 class="info">
                                            Data analysis
                                        </h5>
                                    </div>
                                    <div class="progressBar">
                                        <div class="wrap animated" data-width="90" style="width: 90%;">
                                            <div class="inner"></div>
                                            <div class="no">90%</div>
                                        </div>
                                        <h5 class="info">
                                            Finance support
                                        </h5>
                                    </div>
                                    <div class="progressBar">
                                        <div class="wrap animated" data-width="95" style="width: 95%;">
                                            <div class="inner"></div>
                                            <div class="no">95%</div>
                                        </div>
                                        <h5 class="info">
                                            Custom development
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->

                    <div class="item set_slider_padding">
                        <div id="mission" class="row jshide" style="display: block;">
                            <div class="col-sm-6 mBase25">
                                <img src="http://commonpixel.com/themes/edgar/images/examples/photo_04.jpg" class="responsive" alt="Image title">
                            </div>
                            <div class="col-sm-6">
                                <div class="sectionTitle">
                                    <p>looking ahead</p>
                                    <h2 class="title">Our mission</h2>
                                </div>
                                <p class="check_desc">We help students without work experience who agree to work as volunteers, interns, trainees, assistants for the sake of acquiring skills and knowledge of work in a particular field. Companies open such offers on the site.</p>
                                <ul class="itemList mBase40">
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Big choice</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Innovative selection technologies</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Delivering professional results</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Special customer service</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Durable solutions</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->

                    <div class="item set_slider_padding">
                        <div id="values" class="row jshide" style="display: block;">
                            <div class="col-sm-6 mBase25">
                                <img src="http://commonpixel.com/themes/edgar/images/examples/photo_02.jpg" class="responsive" alt="Image title">
                            </div>
                            <div class="col-sm-6">
                                <h3 class="core_values">The Meaning of (Our) Life</h3>
                                <p class="core_para">
                                    At College Recruiter, we believe that every student and recent grad deserves a great career. We believe in creating a great candidate and recruiter experience. Our interactive media solutions connect students and grads to great careers.</p>
                                <a href="#" class="button primary">View more</a>
                            </div>
                        </div>

                    </div>
                    <!-- End Item -->

                    <div class="item set_slider_padding">
                        <div id="mission" class="row jshide" style="display: block;">
                            <div class="col-sm-6 mBase25">
                                <img src="https://techassassin.co/wp-content/uploads/2016/05/boring-shit-done.jpg" class="responsive" alt="Image title">
                            </div>
                            <div class="col-sm-6">
                                <div class="sectionTitle">
                                    <p>looking ahead</p>
                                    <h2 class="title">The Boring Stuff</h2>
                                </div>
                                <p class="check_desc">College Recruiter is the leading job search site used by students and recent graduates of all 7,400+ one-, two-, and four-year colleges and universities who are searching for internships, part-time jobs, seasonal work, and entry-level career opportunities. Our customers are primarily Fortune 1,000 companies, federal government agencies, and other employers who want to hire dozens, hundreds, or thousands of students and recent graduates per year.</p>
                                <ul class="itemList mBase40">
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Honesty and integrity</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Enthusiastic, passionate and tenacious</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Passionate about the customer experience</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Critical thinking and problem solving</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Embrace teamwork and collaboration</span></li>
                                    <li><i class="fa fa-check-square-o"></i><span class="check_desc">Strive for continuous improvement</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->

                </div>
                <!-- End Carousel Inner -->


            </div>
        </div>
    </section>
@endsection
