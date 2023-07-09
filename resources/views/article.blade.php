@extends('layouts.app')

@section('content')
    <section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">Блог</h4>
            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="http://placehold.it/1920x800" alt="" class="img-responsive" />
        </div>
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Блог</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="pagenation_links">
                            <a href="{{ url('/') }}">Главная</a><i> / </i>
                            <a href="#">Блог</a> <i> / </i>
                        </div>
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
                <div class="col-md-8 col-sm-12 col-xs-12 bmargin">
                    <div class="col-md-12 bmargin">
                        <div class="blog-holder-12">
                            <div class="image-holder">
                                <div class="overlay bg-opacity-1">
                                    {!! $article->getDate() !!}
                                </div>
                                <img class="img-responsive" alt="{{ $article->title }}" src="{{ $article->getImage() }}">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                        <a href="#">
                            <h4 class="less-mar1">{{ $article->title }}</h4>
                        </a>
                        <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i
                                    class="fa fa-comments-o"></i> 15 Comments</span> </div>
                        <br />
                        <p>
                            {{ $article->description }}
                        </p>
                        <br />
                        <h4 class="less-mar3"><a href="#">Share this Article</a></h4>
                        <br />
                        <ul class="social-icons-2">
                            <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <br />
                        <div class="blog1-post-info-box">
                            <div class="text-box border padding-3">
                                <div class="iconbox-medium left round overflow-hidden"><img
                                        src="http://placehold.it/110x110" alt="" class="img-responsive" /></div>
                                <div class="text-box-right more-padding-2">
                                    <h4>Charlotte</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.
                                        Praesent mattis commodo augue. </p>
                                    <br />
                                    <a class="btn btn-border orange-2 btn-small-2" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!--end item-->
                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <h4 class="less-mar3"><a href="#">Related Posts</a></h4>
                        <br />
                        <div class="col-md-4 bmargin">
                            <div class="image-holder"><a href="#"><img src="http://placehold.it/1000x800"
                                        alt="" class="img-responsive" /></a></div>
                            <div class="clearfix"></div>
                            <h5 class="dosis uppercase less-mar1"><a href="#">Aliquam ornare</a></h5>
                            <div class="blog1-post-info"> <span>By John Doe</span><span>May 19</span> </div>
                        </div>
                        <!--end item-->

                        <div class="col-md-4 bmargin">
                            <div class="image-holder"><a href="#"><img src="http://placehold.it/1000x800"
                                        alt="" class="img-responsive" /></a></div>
                            <div class="clearfix"></div>
                            <h5 class="dosis uppercase less-mar1"><a href="#">Aliquam ornare</a></h5>
                            <div class="blog1-post-info"> <span>By John Doe</span><span>May 19</span> </div>
                        </div>
                        <!--end item-->

                        <div class="col-md-4 bmargin">
                            <div class="image-holder"><a href="#"><img src="http://placehold.it/1000x800"
                                        alt="" class="img-responsive" /></a></div>
                            <div class="clearfix"></div>
                            <h5 class="dosis uppercase less-mar1"><a href="#">Aliquam ornare</a></h5>
                            <div class="blog1-post-info"> <span>By John Doe</span><span>May 19</span> </div>
                        </div>
                        <!--end item-->

                        <div class="clearfix"></div>
                        <br />
                        <br />
                        <h4 class="less-mar3"><a href="#">3 Comments</a></h4>
                        <br />
                        <div class="blog1-post-info-box">
                            <div class="text-box border padding-3">
                                <div class="iconbox-medium left round overflow-hidden"><img
                                        src="http://placehold.it/110x110" alt="" class="img-responsive" /></div>
                                <div class="text-box-right more-padding-2">
                                    <h5 class="less-mar2">Charlotte</h5>
                                    <div class="blog1-post-info"> <span>July 15 2015 at 10:30 AM</span></div>
                                    <p class="paddtop1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo. Praesent mattis commodo augue. </p>
                                    <br />
                                    <a class="btn btn-border orange-2 btn-small-2 " href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="clearfix"></div>
                        <br />
                        <div class="blog1-post-info-box">
                            <div class="text-box border padding-3">
                                <div class="iconbox-medium left round overflow-hidden"><img
                                        src="http://placehold.it/110x110" alt="" class="img-responsive" /></div>
                                <div class="text-box-right more-padding-2">
                                    <h5 class="less-mar2">John William</h5>
                                    <div class="blog1-post-info"> <span>July 15 2015 at 10:30 AM</span></div>
                                    <p class="paddtop1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Suspendisse et justo. Praesent mattis commodo augue. </p>
                                    <br />
                                    <a class="btn btn-border orange-2 btn-small-2 " href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="clearfix"></div>
                        <br />
                        <div class="blog1-post-info-box less-width pull-right">
                            <div class="text-box border padding-3">
                                <div class="iconbox-medium left round overflow-hidden"><img
                                        src="http://placehold.it/110x110" alt="" class="img-responsive" /></div>
                                <div class="text-box-right more-padding-2">
                                    <h5 class="less-mar2">John William</h5>
                                    <div class="blog1-post-info"> <span>July 15 2015 at 10:30 AM</span></div>
                                    <p class="paddtop1">Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                    <br />
                                    <a class="btn btn-border orange-2 btn-small-2" href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        <!--end item-->
                        <div class="clearfix"></div>
                        <a class="loadmore-but orange-2" href="#">Load more Comments</a>
                        <div class="smart-forms bmargin">
                            <h4>Post a Comment</h4>
                            <form method="post" action="php/smartprocess.php" id="smart-form">
                                <div>
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="sendername" id="sendername" class="gui-input"
                                                placeholder="Enter name">
                                            <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="emailaddress" id="emailaddress"
                                                class="gui-input" placeholder="Email address">
                                            <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="sendersubject" id="sendersubject"
                                                class="gui-input" placeholder="Enter subjec">
                                            <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                            <span class="field-icon"><i class="fa fa-comments"></i></span> <span
                                                class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300
                                                characters.</span>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="result"></div>
                                    <!-- end .result  section -->

                                </div>
                                <!-- end .form-body section -->
                                <div class="form-footer">
                                    <button type="submit" data-btntext-sending="Sending..."
                                        class="button btn-primary orange-2">Submit</button>
                                    <button type="reset" class="button"> Cancel </button>
                                </div>
                                <!-- end .form-footer section -->
                            </form>
                        </div>
                        <!-- end .smart-forms section -->

                    </div>
                    <!--end item-->

                </div>
                <!--end left column-->

                <div class="col-md-4 col-sm-12 col-xs-12 bmargin">
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                        <h5>Categories</h5>
                        <ul class="category-links orange-2">
                            <li><a href="#">Business</a></li>
                            <li><a class="active" href="#">Education</a></li>
                            <li><a href="#">Medical</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Photogreaphy</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                        <h5>Search</h5>
                        <div class="clearfix"></div>
                        <input class="blog1-sidebar-serch_input" type="search" placeholder="Email Address">
                        <input name="" value="Submit" class="blog1-sidebar-serch-submit" type="submit">
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                        <h5>Latest Posts</h5>
                        <div class="clearfix"></div>
                        <div class="sidebar-posts">
                            <div class="image-left"><img src="http://placehold.it/80x80" alt="" /></div>
                            <div class="text-box-right">
                                <h6 class="less-mar3 nopadding"><a href="#">Clean And Modern</a></h6>
                                <p>Lorem ipsum dolor sit</p>
                                <div class="post-info"> <span>By John Doe</span><span>May 19</span> </div>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="sidebar-posts active bmargin">
                            <div class="image-left"><img src="http://placehold.it/80x80" alt="" /></div>
                            <div class="text-box-right">
                                <h6 class="less-mar3 nopadding"><a href="#">Layered PSD Files</a></h6>
                                <p>Lorem ipsum dolor sit</p>
                                <div class="post-info"> <span>By John Doe</span><span>May 19</span> </div>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="sidebar-posts bmargin">
                            <div class="image-left"><img src="http://placehold.it/80x80" alt="" /></div>
                            <div class="text-box-right">
                                <h6 class="less-mar3 nopadding"><a href="#">Beautiful Elements</a></h6>
                                <p>Lorem ipsum dolor sit</p>
                                <div class="post-info"> <span>By John Doe</span><span>May 19</span> </div>
                            </div>
                        </div>
                        <!--end item-->
                    </div>
                    <!--end sidebar box-->

                    <div class="clearfix"></div>
                    <br />
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                        <h5>Tags</h5>
                        <div class="clearfix"></div>
                        <ul class="tags-2">
                            <li><a href="#">Animation</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">UI Design</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a class="active" href="#">Design</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Responsive</a></li>
                            <li><a href="#">Develop</a></li>
                        </ul>
                    </div>
                    <!--end sidebar box-->

                    <div class="clearfix"></div>
                    <br />
                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                        <h5>Featured Works</h5>
                        <div class="clearfix"></div>
                        <ul class="sidebar-works">
                            <li><a href="#"><img src="http://placehold.it/90x90" alt="" /></a></li>
                            <li><a href="#"><img src="http://placehold.it/90x90" alt="" /></a></li>
                            <li class="last"><a><img src="http://placehold.it/90x90" alt="" /></a></li>
                            <li><a href="#"><img src="http://placehold.it/90x90" alt="" /></a></li>
                            <li><a href="#"><img src="http://placehold.it/90x90" alt="" /></a></li>
                            <li class="last"><a href="#"><img src="http://placehold.it/90x90"
                                        alt="" /></a></li>
                        </ul>
                    </div>
                    <!--end sidebar box-->

                </div>
                <!--end right column-->
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
