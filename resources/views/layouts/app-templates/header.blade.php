<div class="site_wrapper">
    <!--stsrt menu-->
    <!--header №1-->
  <div class="topbar orange2 topbar-padding">
    <div class="container">
      <div class="topbar-left-items">
        <ul class="toplist toppadding pull-left paddtop1">
            <li>
                <a href="{{route('app.change-locale', 'en')}}"@if(app()->getLocale()=='en') class="active"@endif>En</a>
              </li>
              <li>
                <a href="{{route('app.change-locale', 'ru')}}" @if(app()->getLocale()=='ru') class="active"@endif>Ru</a>
              </li>
        </ul>
      </div>
    <!--end left-->

      <div class="topbar-right-items pull-right">
        <ul class="toplist toppadding">
          <li class="lineright"><a href="{{route('login')}}">{{__("Login")}}</a></li>
          <li class="lineright"><a href="{{route('register')}}">{{__("Register")}}</a></li>
          <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--header №1 end-->
  <div class="clearfix"></div>
  <!--header home-->
  <div id="header">
    <div class="container">
      <div class="navbar navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="index.html" class="navbar-brand"><img src="assets/images/logo.png" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="{{url('/')}}" class="dropdown-toggle active">{{__("Home")}}</a>
            </li>
            <li class="dropdown yamm-fw"><a href="index5.html" class="dropdown-toggle">{{__("Layouts")}}</a>
              <!--<ul class="dropdown-menu">
                <li class="grid-demo">
                  <div class="row">
                    <ul class="col-sm-6 col-md-4 list-unstyled ">
                      <li>
                        <p> Categories 1 </p>
                      </li>
                      <li><a href="https://codelayers.net/templates/hasta/gym/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Gym</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/hosting/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Hosting</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/hairsaloon/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Hairsaloon</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/restaurant/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Restaurant</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/agency/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Agency</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/grayscale/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Grayscale</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/mechanic/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Mechanic</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/shop/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Shop</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/blog1/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Blog</a> </li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp;Mobile App <span class="release-note">Release soon</span></a> </li>
                    </ul>
                    <ul class="col-sm-6 col-md-4 list-unstyled ">
                      <li>
                        <p> Categories 2 </p>
                      </li>
                      <li><a href="https://codelayers.net/templates/hasta/cafe/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Cafe</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/school/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; School</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/portfolio/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Portfolio</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/construction/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Construction</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/medical/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Medical</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/transport/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Transport</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/realestate/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Realestate</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/university/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; University</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/winery/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Winery</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/beauty/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Beauty</a> </li>
                    </ul>
                    <ul class="col-sm-6 col-md-4 list-unstyled ">
                      <li><a href="https://codelayers.net/templates/hasta/charity/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Charity</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/blog2/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Blog Style 2</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/fashion/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Fashion</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/law/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Law</a> </li>
                      <li>
                        <div class="margin-top2"></div>
                      </li>
                      <li>
                        <p> One Page Layouts </p>
                      </li>
                      <li><a href="https://codelayers.net/templates/hasta/creative/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Creative</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/cafe2/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Cafe</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/personal/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Personal</a> </li>
                      <li><a href="https://codelayers.net/templates/hasta/wedding/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Wedding</a> </li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Left menu <span class="release-note">Release soon</span></a> </li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Right Menu <span class="release-note">Release soon</span></a> </li>
                    </ul>
                  </div>
                </li>
              </ul>-->
            </li>
            <li class="dropdown yamm-fw"> <a href="about2.html" class="dropdown-toggle">{{__("Pages")}}</a>
              <!--<ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 1 </p>
                        </li>
                        <li><a href="about.html"><i class="fa fa-angle-right"></i> &nbsp; About Style 1</a></li>
                        <li><a href="about2.html"><i class="fa fa-angle-right"></i> &nbsp; About Style 2</a></li>
                        <li><a href="about3.html"><i class="fa fa-angle-right"></i> &nbsp; About Style 3</a></li>
                        <li><a href="about4.html"><i class="fa fa-angle-right"></i> &nbsp; About Me</a></li>
                        <li><a href="team.html"><i class="fa fa-angle-right"></i> &nbsp; Team Member</a></li>
                        <li><a href="left-nav.html"><i class="fa fa-angle-right"></i> &nbsp; Left Navigation</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 2 </p>
                        </li>
                        <li><a href="services.html"><i class="fa fa-angle-right"></i> &nbsp; Services Style 1</a></li>
                        <li><a href="services2.html"><i class="fa fa-angle-right"></i> &nbsp; Services Style 2</a></li>
                        <li><a href="services3.html"><i class="fa fa-angle-right"></i> &nbsp; Services Style 3</a></li>
                        <li><a href="services4.html"><i class="fa fa-angle-right"></i> &nbsp; Services Style 4</a></li>
                        <li><a href="faq.html"><i class="fa fa-angle-right"></i> &nbsp; FAQ Style 1</a></li>
                        <li><a href="faq2.html"><i class="fa fa-angle-right"></i> &nbsp; FAQ Style 2</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 3 </p>
                        </li>
                        <li><a href="full-width.html"><i class="fa fa-angle-right"></i> &nbsp; Full Width Page</a></li>
                        <li><a href="left-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Left Sidebar Page</a></li>
                        <li><a href="right-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Right Sidebar Page</a></li>
                        <li><a href="packages.html"><i class="fa fa-angle-right"></i> &nbsp; Package Plans</a></li>
                        <li><a href="careers.html"><i class="fa fa-angle-right"></i> &nbsp; Careers</a></li>
                        <li><a href="coming-soon.html"><i class="fa fa-angle-right"></i> &nbsp; Coming Soon</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 4 </p>
                        </li>
                        <li><a href="login.html"><i class="fa fa-angle-right"></i> &nbsp; Login Form</a></li>
                        <li><a href="register.html"><i class="fa fa-angle-right"></i> &nbsp; Registration Form</a></li>
                        <li><a href="sitemap.html"><i class="fa fa-angle-right"></i> &nbsp; Sitemap</a></li>
                        <li><a href="maintenance.html"><i class="fa fa-angle-right"></i> &nbsp; Maintenance</a></li>
                        <li><a href="404.html"><i class="fa fa-angle-right"></i> &nbsp; 404 Error Page</a></li>
                        <li><a href="404-2.html"><i class="fa fa-angle-right"></i> &nbsp; 404 Error Page2</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>-->
            </li>
            <li class="dropdown yamm-fw"> <a href="message-boxes.html" class="dropdown-toggle">{{__("Features")}}</a>
              <!--<ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-6 col-md-4 list-unstyled ">
                        <li>
                          <p> Header Styles </p>
                        </li>
                        <li><a href="index1.html"><i class="fa fa-angle-right"></i> &nbsp; Header Style 1</a></li>
                        <li><a href="index2.html"><i class="fa fa-angle-right"></i> &nbsp; Header Style 2</a></li>
                        <li><a href="index3.html"><i class="fa fa-angle-right"></i> &nbsp; Header Style 3</a></li>
                        <li><a href="index4.html"><i class="fa fa-angle-right"></i> &nbsp; Header Style 4</a></li>
                        <li><a href="index5.html"><i class="fa fa-angle-right"></i> &nbsp; Header Style 5</a></li>
                        <li class="marginbottom"><a href="index6.html"><i class="fa fa-angle-right"></i> &nbsp; Header Style 6</a></li>
                        <li>
                          <p> Menu Styles </p>
                        </li>
                        <li><a href="index1.html"><i class="fa fa-angle-right"></i> &nbsp; Menu Style 1</a></li>
                        <li><a href="index2.html"><i class="fa fa-angle-right"></i> &nbsp; Menu Style 2</a></li>
                        <li><a href="index3.html"><i class="fa fa-angle-right"></i> &nbsp; Menu Style 3</a></li>
                        <li><a href="index4.html"><i class="fa fa-angle-right"></i> &nbsp; Menu Style 4</a></li>
                        <li><a href="index5.html"><i class="fa fa-angle-right"></i> &nbsp; Menu Style 5</a></li>
                        <li><a href="index6.html"><i class="fa fa-angle-right"></i> &nbsp; Menu Style 6</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-4 list-unstyled ">
                        <li>
                          <p> Home Page Styles </p>
                        </li>
                        <li><a href="index1.html"><i class="fa fa-angle-right"></i> &nbsp; Light Versions</a></li>
                        <li><a href="https://codelayers.net/templates/hasta/transport/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Dark Versions</a></li>
                        <li><a href="https://codelayers.net/templates/hasta/cafe/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Classic Versions</a></li>
                        <li><a href="https://codelayers.net/templates/hasta/grayscale/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; grayscale Version</a></li>
                        <li><a href="https://codelayers.net/templates/hasta/portfolio/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Portfolio Versions</a></li>
                        <li class="marginbottom"><a href="https://codelayers.net/templates/hasta/gym/fullwidth/index.html" target="_blank"><i class="fa fa-angle-right"></i> &nbsp; Categories</a></li>
                        <li>
                          <p> Footer Styles </p>
                        </li>
                        <li><a href="index1.html"><i class="fa fa-angle-right"></i> &nbsp; Light Versions</a></li>
                        <li><a href="index2.html"><i class="fa fa-angle-right"></i> &nbsp; Dark Versions</a></li>
                        <li><a href="index3.html"><i class="fa fa-angle-right"></i> &nbsp; Classic Versions</a></li>
                        <li><a href="index4.html"><i class="fa fa-angle-right"></i> &nbsp; grayscale Version</a></li>
                        <li><a href="index5.html"><i class="fa fa-angle-right"></i> &nbsp; Portfolio Versions</a></li>
                        <li><a href="index6.html"><i class="fa fa-angle-right"></i> &nbsp; Categories</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-4 list-unstyled ">
                        <li>
                          <p> Other Features </p>
                        </li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Premium Sliders</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Video Backgrounds</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Video Sliders</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Color Options</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Boxed Versions</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Onepage Layouts</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Carousel</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Coming Soon Pages</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Many more Sections</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Contact Pages</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; HTML5 Videos</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Layered PSD Files</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Beautiful Animations</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Excellent Support</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>-->
            </li>
            <li class="dropdown"> <a href="portfolio-three.html" class="dropdown-toggle">{{__("Portfolio")}}</a>
              <!--<ul class="dropdown-menu" role="menu">
                <li> <a href="portfolio-one.html">Single Item</a> </li>
                <li> <a href="portfolio-two.html">Portfolio Columns 2</a> </li>
                <li> <a href="portfolio-three.html">Portfolio Columns 3</a> </li>
                <li> <a href="portfolio-four.html">Portfolio Columns 4</a> </li>
                <li> <a href="portfolio-five.html">Portfolio + Sidebar</a> </li>
                <li> <a href="portfolio-six.html">Portfolio Full Width</a> </li>
                <li> <a href="portfolio-seven.html">Portfolio Masonry</a> </li>
                <li> <a href="portfolio-eight.html">Masonry Projects</a> </li>
                <li> <a href="portfolio-nine.html">Slider Projects</a> </li>
                <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Sub Menu + </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Menu Item 1</a></li>
                    <li><a href="#">Menu Item 2</a></li>
                    <li><a href="#">Menu Item 3</a></li>
                  </ul>
                </li>
              </ul>-->
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle">Каталог</a>
                <ul class="dropdown-menu three" role="menu">
                  <li>
                      <a href="{{route('app.catalog')}}">Каталог</a>
                  </li>
                </ul>
              </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle">{{__("News")}}</a>
              <ul class="dropdown-menu three" role="menu">
                @foreach ($categories as $cat)
                <li>
                    <a href="{{route('app.blog.category', $cat->slug)}}">{{$cat->name}}</a>
                </li>
                @endforeach
              </ul>
            </li>
            <li class="dropdown"> <a href="contact.html" class="dropdown-toggle align-1">{{__("Contact")}}</a>
              <!--<ul class="dropdown-menu align-1 two" role="menu">
                <li> <a href="contact.html">Contact Variation 1</a> </li>
                <li> <a href="contact2.html">Contact Variation 2</a> </li>
                <li> <a href="contact3.html">Contact Variation 3</a> </li>
              </ul>-->
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>
    <!--header home-->
  <!--end menu-->
