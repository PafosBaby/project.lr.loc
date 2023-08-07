@extends('layouts.app')

@section('blog-style')
    <link href="{{ asset('assets/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/js/ytplayer/ytplayer.css') }}" />
    <link href="{{ asset('assets/js/animations/css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/js/masterslider/style/masterslider.css') }}" />
@endsection

@section('content')
    <div class="clearfix"></div>

    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider">

        <!-- slide 1 -->
        <div class="ms-slide slide-1" data-delay="9">
            <img src="js/masterslider/blank.gif" data-src="http://placehold.it/1920x650" alt="" />

            <h3 class="ms-layer text76" style="left: 400px;top: 180px;" data-type="text" data-delay="500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"> {{ __('Digital') }}</h3>

            <h3 class="ms-layer text77" style="left: 200px;top: 260px;" data-type="text" data-delay="1000"
                data-ease="easeOutExpo" data-duration="1230" data-effect="right(250)"> {{ __('Agency') }}</h3>

            <h3 class="ms-layer small-line" style="left: 370px;top: 380px;" data-type="text" data-delay="1500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"></h3>

            <h3 class="ms-layer text78" style="left: 250px;top: 385px;" data-type="text" data-delay="2000"
                data-ease="easeOutExpo" data-duration="1230" data-effect="right(250)"> {{ __('We are creative') }}</h3>

            <h3 class="ms-layer small-line" style="left: 370px;top:430px;" data-type="text" data-delay="2500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"></h3>
        </div>
        <!-- end slide 1 -->

        <!-- slide 2 -->
        <div class="ms-slide slide-2" data-delay="9">

            <img src="js/masterslider/blank.gif" data-src="http://placehold.it/1920x650" alt="" />


            <img src="masterslider/blank.gif" data-src="http://placehold.it/455x295" alt=""
                style="right: 260px; top: 160px;" class="ms-layer" data-type="image" data-delay="500" data-duration="2500"
                data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)" />

            <img src="masterslider/blank.gif" data-src="http://placehold.it/455x295" alt=""
                style="left: 810px; top: 200px;" class="ms-layer" data-type="image" data-delay="1000" data-duration="2500"
                data-ease="easeOutExpo" data-effect="scalefrom(1.1,1.1,190,0)" />

            <h3 class="ms-layer text58" style="left: 230px;top: 200px;" data-type="text" data-delay="1500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> {{ __('One Page Layouts') }} &
            </h3>

            <h3 class="ms-layer text59" style="left: 230px;top: 245px;" data-type="text" data-delay="2000"
                data-ease="easeOutExpo" data-duration="1230" data-effect="scale(1.5,1.6)"> {{ __('Many More Features') }}
            </h3>

            <h3 class="ms-layer text3" style="left: 230px; top: 330px;" data-type="text" data-effect="top(45)"
                data-duration="2000" data-delay="2500" data-ease="easeOutExpo"> Lorem ipsum dolor sit amet consectetuer
                adipiscing elit Suspendisse et justo <br />
                Praesent mattis commodo augue Aliquam ornare. </h3>

            <a class="ms-layer sbut1" style="left: 230px; top: 420px;" data-type="text" data-delay="3000"
                data-ease="easeOutExpo" data-duration="1200" data-effect="scale(1.5,1.6)"> {{ __('Read More') }} </a>

            <a class="ms-layer sbut2" style="left: 390px; top: 420px;" data-type="text" data-delay="3000"
                data-ease="easeOutExpo" data-duration="1200" data-effect="scale(1.5,1.6)"> {{ __('Purchase now') }} !
            </a>

        </div>
        <!-- end slide 2 -->

        <div class="ms-slide" data-delay="10">
            <video data-autopause="false" data-mute="true" data-loop="true" data-fill-mode="fill">
                <source type="video/webm" src="https://codelayers.net/videos/video-2.webm">
                <source type="video/mp4" src="https://codelayers.net/videos/video-2.mp4">
                <source type="video/ogg" src="https://codelayers.net/videos/video-2.ogv">
            </video>
            <img src="../masterslider/style/blank.gif" data-src="http://placehold.it/1920x650"
                alt="lorem ipsum dolor sit">

            <h3 class="ms-layer text79" style="top: 210px;" data-type="text" data-delay="500" data-ease="easeOutExpo"
                data-duration="1230" data-effect="left(250)"> {{ __('Video') }}</h3>

            <h3 class="ms-layer text80" style="top: 260px;" data-type="text" data-delay="1000" data-ease="easeOutExpo"
                data-duration="1230" data-effect="right(250)"> {{ __('Backgrounds') }}</h3>

            <h3 class="ms-layer small-line" style="left: 720px; top: 330px;" data-type="text" data-delay="1500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"></h3>

            <h3 class="ms-layer text81" style="top: 335px;" data-type="text" data-delay="2000" data-ease="easeOutExpo"
                data-duration="1230" data-effect="right(250)"> {{ __('We are creative') }}</h3>

            <h3 class="ms-layer small-line" style="left: 720px;top:380px;" data-type="text" data-delay="2500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"></h3>
        </div>
        <!-- end slide -->

        <!-- slide 3 -->
        <div class="ms-slide slide-3" data-delay="9">
            <img src="js/masterslider/blank.gif" data-src="http://placehold.it/1920x650" alt="" />

            <h3 class="ms-layer box-white" style="right: 500px;top:100px;" data-type="text" data-delay="500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"></h3>

            <h3 class="ms-layer text82" style="left: 430px;top: 180px;" data-type="text" data-delay="1500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"> {{ __('Modern') }} &
            </h3>

            <h3 class="ms-layer text83" style="left: 230px;top: 260px;" data-type="text" data-delay="2000"
                data-ease="easeOutExpo" data-duration="1230" data-effect="right(250)"> {{ __('Creative') }}</h3>

            <h3 class="ms-layer small-line" style="left: 370px;top: 380px;" data-type="text" data-delay="2500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"></h3>
            <h3 class="ms-layer text78" style="left: 250px;top: 385px;" data-type="text" data-delay="3000"
                data-ease="easeOutExpo" data-duration="1230" data-effect="right(250)">
                {{ __('We are creative') }}</h3>

            <h3 class="ms-layer small-line" style="left: 370px;top:430px;" data-type="text" data-delay="3500"
                data-ease="easeOutExpo" data-duration="1230" data-effect="left(250)"></h3>
        </div>
        <!-- end slide 3 -->
    </div>
    <!-- end of masterslider -->
    <div class="clearfix"></div>

    <section class="sec-padd-default-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h6 class="nopadding lspace-1">{{ __('Who We Are') }}</h6>
                    <h1 class="paddtop1 dosis font-weight-5 lspace-sm">{{ __('About') }} <span
                            class="text-orange-2">{{ __('Us') }}</span></h1>
                    <div class="title-line-4 align-center"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 bmargin animate-in" data-anim-type="fade-in-right"
                    data-anim-delay="100">
                    <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                        <div class="feature-box-101 bmargin">
                            <div class="circle">
                                <h4 class="title text-white">{{ __('Our History') }}</h4>
                            </div>
                            <div class="img"><img src="http://placehold.it/200x200" alt="" /></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-left-4">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer elit. </p>
                        <br />
                        <a href="#" class="read-more orange-2"> <i class="fa fa-long-arrow-right"></i>
                            {{ __('Read more') }}</a>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-12 col-xs-12 bmargin animate-in" data-anim-type="fade-in-left"
                    data-anim-delay="200">
                    <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                        <div class="feature-box-101 bmargin">
                            <div class="circle">
                                <h4 class="title text-white">{{ __('Our Passion') }}</h4>
                            </div>
                            <div class="img"><img src="http://placehold.it/200x200" alt="" /></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-left-4">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer elit. </p>
                        <br />
                        <a href="#" class="read-more orange-2"> <i
                                class="fa fa-long-arrow-right"></i>{{ __('Read more') }}</a>
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!-- end section -->
    <div class="clearfix"></div>

    <section class="section-light section-side-image clearfix">
        <div class="img-holder col-md-6 col-sm-3 pull-left">
            <div class="background-imgholder" style="background:url(http://placehold.it/1500x960);"> <img
                    class="nodisplay-image" src="http://placehold.it/1500x960" alt="" /> </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 text-inner clearfix align-left">
                    <div class="text-box white padding-7">
                        <div class="col-xs-12 text-left">
                            <h6 class="nopadding lspace-1">{{ __('What We Offer') }}</h6>
                            <h1 class="paddtop1 dosis font-weight-5 lspace-sm">{{ __('Awesome Features') }}<span
                                    class="text-orange-2">es</span></h1>
                            <div class="title-line-4"></div>
                        </div>
                        <div class="clearfix"></div>
                        <ul class="iconlist orange">
                            <li><i class="fa fa-check"></i> Sed massa tellus aliquam rhoncus venenatis quis enim Sed massa
                                tellus aliquam. </li>
                            <li><i class="fa fa-check"></i> Development dolor sit amet consectetur adipiscing elit
                                Phasellus hendrerit condimentum dapibus. </li>
                            <li><i class="fa fa-check"></i> Etiam dictum Nunc enim Sed massa tellus aliquam rhoncus
                                venenatis</li>
                            <li><i class="fa fa-check"></i> Magna eget scelerisque metus dictum Nunc enim Sed massa massa
                                in neque sit consectetur </li>
                            <li><i class="fa fa-check"></i> Vitae hendrerit condimentum dapibus ac nulla dictum Nunc enim
                                Sed massa. </li>
                            <li><i class="fa fa-check"></i> Magna, eget scelerisque metus massa in neque dapibus </li>
                        </ul>
                        <br />
                        <br />
                        <a href="#" class="btn btn-orange-2 dark btn-xround">{{ __('Read more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class=" clearfix"></div>

    <section class="sec-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-5 screens-top-padding bmargin">
                    <h1 class="font-weight-6 less-mar1 nopadding">{{ __('Creative') }} <span
                            class="text-orange-2">Hasta</span></h1>
                    <h5>{{ __('Multi purpose Responsive Template') }}</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                    <br />
                    <div class="iconbox-xtiny left round grayoutline2"><i class="fa fa-apple"></i></div>
                    <div class="iconbox-xtiny left round grayoutline2"><i class="fa fa-android"></i></div>
                    <div class="iconbox-xtiny left round grayoutline2"><i class="fa fa-behance"></i></div>
                    <div class="iconbox-xtiny left round grayoutline2"><i class="fa fa-google-plus"></i></div>

                    <div class="clearfix"></div>
                    <br /><br />
                    <a class="btn btn-orange-2 dark btn-xround" href="#">{{ __('View Projects') }}<i
                            class="fa fa-angle-right"></i></a>

                </div>
                <!--end item-->

                <div class="col-md-7 bmargin">
                    <img src="http://placehold.it/795x675" alt="" class="img-responsive" />
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!-- end section -->
    <div class="clearfix"></div>

    <section>
        <div class="videobgholder">
            <div id="wrapper">
                <div id="customElement">
                    <div class="container-fluid nopadding">
                        <div class="video-overlay bg-opacity-5">
                            <div class="container video-toppadd video-bopadd">
                                <div class="col-md-8 col-centered text-center">
                                    <h2 class="text-white section-title ubuntu less-mar2 uppercase">
                                        {{ __('Add Your Own') }}</h2>
                                    <h2 class="text-white section-title ubuntu uppercase">
                                        {{ _('Youtube Video Backgrounds') }}</h2>
                                    <button id="togglePlay" class="command vbutton pause"
                                        onclick="jQuery('#video').YTPTogglePlay(changeLabel)">{{ __('Pause') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a id="video" class="player"
                data-property="{videoURL:'CWqndeS1Iu0',containment:'#customElement', showControls:false, autoPlay:true, loop:true, vol:50, mute:true, startAt:90,  stopAt:109, opacity:1, addRaster:true, quality:'hd720', optimizeDisplay:true}">{{ __('My video') }}</a>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="sec-padd-default-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h6 class="nopadding lspace-1">{{ __('Who We Are') }}</h6>
                    <h1 class="paddtop1 dosis font-weight-5 lspace-sm">{{ __('Meet Our Te') }}<span
                            class="text-orange-2">{{ __('am') }}</span>
                    </h1>
                    <div class="title-line-4 align-center"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-holder15 two bmargin">
                        <div class="team-member"><img src="http://placehold.it/500x450" alt=""
                                class="img-responsive" /></div>
                        <div class="info-box text-center">
                            <h5 class="uppercase less-mar2">John William</h5>
                            <span class="text-orange-2">{{ __('Founder and CEO') }}</span> <br />
                            <br />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo et Praesent
                                Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-4 col-sm-6">
                    <div class="team-holder15 two bmargin">
                        <div class="team-member"><img src="http://placehold.it/500x450" alt=""
                                class="img-responsive" /></div>
                        <div class="info-box text-center">
                            <h5 class="uppercase less-mar2">Charlotte</h5>
                            <span class="text-orange-2">{{ __('Manager') }}</span> <br />
                            <br />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo et Praesent
                                Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-4 col-sm-6">
                    <div class="team-holder15 two bmargin">
                        <div class="team-member"><img src="http://placehold.it/500x450" alt=""
                                class="img-responsive" /></div>
                        <div class="info-box text-center">
                            <h5 class="uppercase less-mar2">Benjamin</h5>
                            <span class="text-orange-2">{{ __('Creative Designer') }}</span> <br />
                            <br />
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo et Praesent
                                Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->

    <section class="section-light section-side-image clearfix">
        <div class="img-holder col-md-6 col-sm-3 pull-left">
            <div class="background-imgholder" style="background:url(http://placehold.it/1500x960);"> <img
                    class="nodisplay-image" src="http://placehold.it/1500x960" alt="" /> </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-4 text-inner clearfix align-left">
                    <div class="text-box white padding-7">
                        <div class="col-xs-12 text-left">
                            <h6 class="nopadding lspace-1">{{ __('What We Do') }}</h6>
                            <h1 class="paddtop1 dosis font-weight-5 lspace-sm">Our Servic<span
                                    class="text-orange-2">es</span></h1>
                            <div class="title-line-4"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <div class="feature-box-103 text-center bmargin">
                                <div class="iconbox-medium round grayoutline2"><span class="icon-lightbulb"></span></div>
                                <br />
                                <h4>{{ __('User Analysis') }}</h4>
                                <p>Lorem ipsum dolor sit amet, sit et
                                    justoconsectetuer adipiscing elit. Suspendisse justo.</p>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="col-md-4">
                            <div class="feature-box-103 text-center bmargin active">
                                <div class="iconbox-medium round grayoutline2"><span class="icon-basket"></span></div>
                                <br />
                                <h4>{{ __('Branding') }}</h4>
                                <p>Lorem ipsum dolor sit amet, sit et
                                    justoconsectetuer adipiscing elit. Suspendisse justo.</p>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="col-md-4">
                            <div class="feature-box-103 text-center bmargin">
                                <div class="iconbox-medium round grayoutline2"><span class="icon-layers"></span></div>
                                <br />
                                <h4>{{ __('Responsive') }}</h4>
                                <p>Lorem ipsum dolor sit amet, sit et
                                    justoconsectetuer adipiscing elit. Suspendisse justo.</p>
                            </div>
                        </div>
                        <!--end item-->
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <a href="#" class="btn btn-orange-2 dark btn-xround">{{ __('Read more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class=" clearfix"></div>

    <section class="sec-padd-default-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h6 class="nopadding lspace-1 ">{{ __('What We Do') }}</h6>
                    <h1 class="paddtop1 dosis font-weight-5 lspace-sm">{{ __('Our') }} Wor<span
                            class="text-orange-2">ks</span></h1>
                    <div class="title-line-4 align-center"></div>
                </div>
                <div class="clearfix"></div>
                <div class="demo-full-width">
                    <div id="grid-container" class="cbp">
                        <div class="cbp-item identity logos"> <a href="http://placehold.it/800x800"
                                class="cbp-caption cbp-lightbox" data-title="Suspendisse Imperdiet<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x800"
                                        alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Suspendisse Imperdiet </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item web-design"> <a href="http://placehold.it/800x800"
                                class="cbp-caption cbp-lightbox" data-title="Magna Tempus Urna<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x800"
                                        alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Magna Tempus Urna</div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item motion identity"> <a href="http://placehold.it/800x800"
                                class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x800"
                                        alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Maecenas Sed </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <div class="clearfix"></div>

    <section class="sec-padding section-orange-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="dosis text-white lspace-sm">{{ __('Newsletter') }}</h1>
                    <p class="sub-title text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et.
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="input_holder">
                        <input class="email_input" type="search" placeholder="Enter your Email Address">
                        <input name="submit" value="Subscribe" class="email_submit" type="submit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h6 class="nopadding lspace-1">{{ __('How We Do') }}</h6>
                    <h1 class="paddtop1 dosis font-weight-5 lspace-sm">{{ _('Our Work') }} Proce<span
                            class="text-orange-2">ss</span>
                    </h1>
                    <div class="title-line-4 align-center"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center animate-in" data-anim-type="fade-in-right"
                    data-anim-delay="100">
                    <div class="feature-box-102 bmargin">
                        <div class="number-1"></div>
                        <br />
                        <h4>{{ __('User Analysis') }}</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sit justo. Suspendisse et justo.</p>
                    </div>
                </div>
                <!--end item -->

                <div class="col-md-3 col-sm-6 col-xs-12 text-center animate-in" data-anim-type="fade-in-right"
                    data-anim-delay="200">
                    <div class="feature-box-102 bmargin">
                        <div class="number-2"></div>
                        <br />
                        <h4>{{ __('Designing') }}</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sit justo. Suspendisse et justo.</p>
                    </div>
                </div>
                <!--end item -->

                <div class="col-md-3 col-sm-6 col-xs-12 text-center animate-in" data-anim-type="fade-in-right"
                    data-anim-delay="300">
                    <div class="feature-box-102 bmargin">
                        <div class="number-3"></div>
                        <br />
                        <h4>{{ __('Implementing') }}</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sit justo. Suspendisse et justo.</p>
                    </div>
                </div>
                <!--end item -->

                <div class="col-md-3 col-sm-6 col-xs-12 text-center animate-in" data-anim-type="fade-in-right"
                    data-anim-delay="400">
                    <div class="feature-box-102 bmargin">
                        <div class="number-4"></div>
                        <br />
                        <h4>{{ __('Testing') }}</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sit justo. Suspendisse et justo.</p>
                    </div>
                </div>
                <!--end item -->

            </div>
        </div>
    </section>
    <!-- end section -->
    <div class="clearfix"></div>

    <section>
        <div class="container">
            <div class="divider-line solid light opacity-5"></div>
            <div class="row sec-padd-default-page">
                <div class="col-xs-12 text-center">
                    <h6 class="nopadding lspace-1">{{ __('Latest News') }}</h6>
                    <h1 class="paddtop1 dosis font-weight-5 lspace-sm">From the Bl<span class="text-orange-2">og</span>
                    </h1>
                    <div class="title-line-4 align-center"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="blog-holder-13 bmargin">
                        <div class="image-holder">
                            <div class="shapes"></div>
                            <div class="post-date-box"> 15 <span>August, 2015</span> <span class="icon"><i
                                        class="fa fa-picture-o"></i></span> </div>
                            <img src="http://placehold.it/1000x700" alt="" class="img-responsive" />
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <a href="#">
                            <h3>Aliquam ornare hendrerit augue</h3>
                        </a>
                        <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i
                                    class="fa fa-comments-o"></i> 15 Comments</span> <span><i
                                    class="fa fa-folder-open"></i> category / Business</span> </div>
                        <br />
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                            commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Lorem
                            ipsum dolor sit amet .</p>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="blog-holder-13 bmargin">
                        <div class="image-holder">
                            <div class="shapes"></div>
                            <div class="post-date-box"> 25 <span>July, 2015</span> <span class="icon"><i
                                        class="fa fa-film"></i></span> </div>
                            <img src="http://placehold.it/1000x700" alt="" class="img-responsive" />
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <h3><a href="#">Aliquam ornare hendrerit augue</a></h3>
                        <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i
                                    class="fa fa-comments-o"></i> 15 Comments</span> <span><i
                                    class="fa fa-folder-open"></i> category / Business</span> </div>
                        <br />
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                            commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Lorem
                            ipsum dolor sit amet .</p>
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!-- end section -->
    <div class="clearfix"></div>

    <section class="parallax-section68">
        <div class="section-overlay bg-opacity-4">
            <div class="container sec-tpadding-3 sec-bpadding-3">
                <div class="row">
                    <div class="col-md-8 col-centered">
                        <h6 class="text-white lspace-3">Parallax</h6>
                        <h1 class="text-uppercase text-white text-bold4 big-text">Background</h1>
                        <br />
                        <br />
                        <a class="btn btn-orange-2 btn-xround" href="#">{{ __('Read more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="sec-padd-default-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h6 class="nopadding lspace-1">{{ __('Package Details') }}</h6>
                    <h1 class="paddtop1 dosis font-weight-5 lspace-sm">Our Prici<span class="text-orange-2">ng</span></h1>
                    <div class="title-line-4 align-center"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row no-gutter">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricetable-top-bg-strip"></div>
                    <div class="pricetable-holder7">
                        <div class="title-box">
                            <h3 class="title font-weight-5 less-mar2">Basic</h3>
                            <div class="price"><sup>$</sup>9.99<i>/ mo</i></div>
                        </div>
                        <ul class="features-list">
                            <li>1 GB Bandwidth</li>
                            <li>256 MB Memory</li>
                            <li>Unlimited</li>
                            <li>Full Support</li>
                            <li>Free Domain</li>
                        </ul>
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <a class="btn btn-orange-2 dark btn-xround" href="#">{{ __('Order Now') }} !</a>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricetable-top-bg-strip"></div>
                    <div class="pricetable-holder7">
                        <div class="title-box">
                            <h3 class="title font-weight-5 less-mar2">Standard</h3>
                            <div class="price"><sup>$</sup>29.9<i>/ mo</i></div>
                        </div>
                        <ul class="features-list">
                            <li>1 GB Bandwidth</li>
                            <li>256 MB Memory</li>
                            <li>Unlimited</li>
                            <li>Full Support</li>
                            <li>Free Domain</li>
                        </ul>
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <a class="btn btn-orange-2 dark btn-xround" href="#">{{ __('Order Now') }} !</a>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricetable-active-bg-strip"></div>
                    <div class="pricetable-holder7 active bmargin">
                        <div class="ribbon"><img src="images/777.png" alt="" /></div>
                        <div class="title-box">
                            <h3 class="title font-weight-5 less-mar2">Premium</h3>
                            <div class="price"><sup>$</sup>39.9<i>/ mo</i></div>
                        </div>
                        <ul class="features-list">
                            <li>1 GB Bandwidth</li>
                            <li>256 MB Memory</li>
                            <li>Unlimited</li>
                            <li>Full Support</li>
                            <li>Free Domain</li>
                        </ul>
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <a class="btn btn-white btn-xround" href="#">{{ __('Order Now') }} !</a>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="pricetable-top-bg-strip"></div>
                    <div class="pricetable-holder7">
                        <div class="title-box">
                            <h3 class="title font-weight-5 less-mar2">Unlimited</h3>
                            <div class="price"><sup>$</sup>49.9<i>/ mo</i></div>
                        </div>
                        <ul class="features-list">
                            <li>1 GB Bandwidth</li>
                            <li>256 MB Memory</li>
                            <li>Unlimited</li>
                            <li>Full Support</li>
                            <li>Free Domain</li>
                        </ul>
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <a class="btn btn-orange-2 dark btn-xround" href="#">{{ __('Order Now') }} !</a>
                    </div>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!-- end section -->
    <div class="clearfix"></div>

    <section class="parallax-section69">
        <div class="section-overlay bg-opacity-7">
            <div class="container sec-tpadding-3 sec-bpadding-3">
                <div class="row slide-controls-color-13">
                    <div class="col-md-8 col-centered">
                        <div class="col-xs-12 text-center">
                            <h6 class="nopadding lspace-1 text-white">{{ __('Our Clients') }}</h6>
                            <h1 class="paddtop1 dosis font-weight-5 text-white lspace-sm">People Sa<span
                                    class="text-orange-2">ys</span></h1>
                            <div class="title-line-4 white align-center"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="owl-demo3" class="owl-carousel">
                            <div class="item">
                                <blockquote class="style1"><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                        Cras tellus. In pulvinar lectus a est.</span> </blockquote>
                                <br />
                                <h5 class="text-white less-mar1">Emily</h5>
                                <span class="text-orange-2">Nullam turpis</span>
                            </div>
                            <!--end slide item-->

                            <div class="item">
                                <blockquote class="style1"><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.
                                        Cras tellus. In pulvinar lectus a est.</span> </blockquote>
                                <br />
                                <h6 class="text-white less-mar1">Emily</h6>
                                <span class="text-pink">Nullam turpis</span>
                            </div>
                            <!--end slide item-->

                        </div>
                        <!--end carousel -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="section-less-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="clientlogo-list">
                        <li><img src="http://placehold.it/170x80" alt="" /></li>
                        <li><img src="http://placehold.it/170x80" alt="" /></li>
                        <li><img src="http://placehold.it/170x80" alt="" /></li>
                        <li><img src="http://placehold.it/170x80" alt="" /></li>
                        <li><img src="http://placehold.it/170x80" alt="" /></li>
                        <li><img src="http://placehold.it/170x80" alt="" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--end section -->
    <div class="clearfix"></div>

    <section class="section-orange-2 section-less-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="text-white">Beautiful Masonry Portfolio Styles</h3>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo
                        Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est
                        Curabitur eget orci.</p>
                </div>
                <div class="col-md-3">
                    <div class="margin-top2"></div>
                    <a class="btn btn-border white-2 btn-large pull-right" href="#">{{ __('Read more') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
@endsection

@section('home-script')
    <script src="{{ asset('assets/js/masterslider/masterslider.min.js') }}"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1600, // slider standard width
                height: 650, // slider standard height
                space: 0,
                speed: 45,
                layout: 'boxed',
                loop: true,
                preload: 0,
                autoplay: true,
                view: "parallaxMask"
            });
        })(jQuery);
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/ytplayer/jquery.mb.YTPlayer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ytplayer/elementvideo-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ytplayer/play-pause-btn.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cubeportfolio/main.js') }}"></script>
    <script src="{{ asset('assets/js/animations/js/animations.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/animations/js/appear.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel/custom.js') }}"></script>
@endsection
