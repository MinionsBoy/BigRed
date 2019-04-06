@section('style')
    @parent
    @include('layouts.headerStyle')
@endsection

@section('footer')
    <section id="solution" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="sectionTitle">
                        <p>welcome</p>
                        <h2 class="title">Explore our best solutions</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="iconBox3">
                                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                <h5>Stunning design</h5>
                                <p>To create this site our developer team do their best</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="iconBox3">
                                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                <h5>PROFESSIONAL SOLUTIONS</h5>
                                <p>To succeed developers should do only correct and fast solution, like we do</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="iconBox3">
                                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                <h5>RESPONSIVE COMPANY</h5>
                                <p>We work only with honest companies</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="iconBox3">
                                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                                <h5>CREATIVE IDEAS</h5>
                                <p>In our company we select only smart and creative employees</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="parallax">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 sectionTitle white">
                        <p>what we do</p>
                        <h2 class="title">Professional services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInLeft" data-aos="zoom-in">
                        <div class="service_item">
                            <i class="fa fa-umbrella"></i>
                            <h4>Conferences</h4>
                            <p>Always improve knowledge and shared information on our conferences</p>
                        </div>
                    </div>
                    <!-- end item 1 -->
                    <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInUp" data-aos="zoom-in">
                        <div class="service_item">
                            <i class="fa fa-magic"></i>
                            <h4>Financial Plans</h4>
                            <p>In near future we will be in top 10 forbes</p>
                        </div>
                    </div>
                    <!-- end item 2 -->
                    <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInRight" data-aos="zoom-in">
                        <div class="service_item">
                            <i class="fa fa-crosshairs"></i>
                            <h4>Marketing tools</h4>
                            <p>An integrated marketing approach applies several tactics to engage customers and build business.</p>
                        </div>
                    </div>
                    <!-- end item 3 -->
                    <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInDown" data-aos="fade-up">
                        <div class="service_item">
                            <i class="fa fa-globe"></i>
                            <h4>Development</h4>
                            <p>You need to be an expert in coding to have high quality of develop</p>
                        </div>
                    </div>
                    <!-- end item 4 -->
                    <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInRight" data-aos="fade-up">
                        <div class="service_item">
                            <i class="fa fa-paperclip"></i>
                            <h4>Strategy Analysis</h4>
                            <p>Take the advantage of the path of least resistance to achieve your goals</p>
                        </div>
                    </div>
                    <!-- end item 5 -->
                    <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInLeft" data-aos="fade-up">
                        <div class="service_item">
                            <i class="fa fa-umbrella"></i>
                            <h4>Management</h4>
                            <p>Manage the function, not the paperwork.</p>
                        </div>
                    </div>
                    <!-- end item 6 -->
                </div>
            </div>
        </div>
    </section>

    <section id="carousel">
        <div class="testimonial_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="5000">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                                <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_02.jpg" alt="" /></div>
                                    <blockquote>
                                        <div class="author">
                                            <h5>Elaine MaryAnne</h5>
                                            <p>The WayWire Corp</p>
                                        </div>
                                        <p class="test_para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_01.jpg" alt="" /></div>
                                    <blockquote>
                                        <div class="author">
                                            <h5>Roger Smith</h5>
                                            <p>Acme Corporation</p>
                                        </div>
                                        <p class="test_para">We've hired the Nook team for our last project and we've been extremely satisfied with the services they provided! We'll definitely be going to use their awesome services in the near future and will recommended them to our partners and
                                            colleagues for sure!</p>
                                    </blockquote>
                                </div>
                                <div class="active item">
                                    <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_03.jpg" alt="" /></div>
                                    <blockquote>
                                        <div class="author">
                                            <h5>Edgar Monk</h5>
                                            <p>Weiland Corp</p>
                                        </div>
                                        <p class="test_para">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia
                                            deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_02.jpg" alt="" /></div>
                                    <blockquote>
                                        <div class="author">
                                            <h5>Elaine MaryAnne</h5>
                                            <p>The WayWire Corp</p>
                                        </div>
                                        <p class="test_para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_01.jpg" alt="" /></div>
                                    <blockquote>
                                        <div class="author">
                                            <h5>Roger Smith</h5>
                                            <p>Acme Corporation</p>
                                        </div>
                                        <p class="test_para">We've hired the Nook team for our last project and we've been extremely satisfied with the services they provided! We'll definitely be going to use their awesome services in the near future and will recommended them to our partners and
                                            colleagues for sure!</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mastFooter">
        <div class="inner">
            <!-- START banner -->
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3>Take control of your ideas</h3>
                            <p>Join us</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END banner -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo">
                            <a class="navbar-brand style_brand" href="#"><img class="img-responsive" src="/images/logo2.png"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h6>Find us here</h6>
                        <ul class="contact">
                            <li>
                                <i class="fa fa-envelope"></i> info@intita.com
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> +38 067 431 74 24
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i> 23 Park Lane Terrace, SW03N, London, UK
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h6>Social</h6>
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/intita.it.academy/"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/INTITA_EDU"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/intita?trk=biz-companies-cym"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/116490432477798418410"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection