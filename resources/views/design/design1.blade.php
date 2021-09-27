

<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <title> CV </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('design/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/jpreloader.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('design/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{asset('design/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/coloring.css')}}" rel="stylesheet" type="text/css" />
    
    <style>

@import url('https://fonts.googleapis.com/css2?family=Inconsolata&family=Lato:ital,wght@1,300&family=Source+Sans+Pro:wght@300&family=Yanone+Kaffeesatz&display=swap');
</style>
<style>
     

</style>
</head>

<body id="body">
    <div id="wrapper">
        <div id="btn-exit">
            <div class="line-1"></div>
            <div class="line-2"></div>
        </div>
        <div class="transition"></div>
        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center header-col-left">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{route('user.design.index')}}">
                                        {{$person->name}}
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="align-self-center ml-auto header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu" class="scrollnav">
                                    <li><a href="#section-resume">Resume</a></li>
                                    <li></li>
                                    <li><a href="#section-about">About Me</a></li>
                                    <li></li>
                                   
                                    <li><a href="#section-portfolio">Portfolio</a></li>
                                    <li></li>
                                    <li><a href="#section-contact">Contact</a></li>
                                    <li></li>
                                </ul>
                                <!-- mainmenu close -->
                            </div>
                            <div class="align-self-center ml-auto header-col-right">
                            <?php

use App\Models\Portfolio_media;
use Illuminate\Support\Facades\Auth;

                                $socials = \App\Models\Social::where('user_id',Auth::user()->id)->get(); ?>
                                <div class="social-icons s-border sm-hide">
                                @foreach($socials as $social)
                                 @if( $social->is_active==1)
                                    <a href="{{$social->link}}"><i class="fa fa-{{$social->social_website->name}}  fa-lg"></i></a>
                                    @endif
                               @endforeach
                                </div>
                                <span id="menu-btn"></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        
        <!-- content begin -->
        <div class="no-bottom no-top dark">
            <div id="top"></div>
            <!-- section begin -->
            <section id="section-main" class="vertical-center text-light" data-bgimage="url({{asset('design/images/background/2.jpg')}}) top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">                           
                            <h1 class="wow fadeInRight" data-wow-delay=".4s">I'm <span class="id-color">{{$person->name}}</span> </h1>
                            <p class="lead wow fadeInRight" data-wow-delay=".5s">{{$person->details}}.</p>                            
                            <div class="spacer-single"></div>
                            <a href="#section-about" class="btn-custom light wow fadeInRight scoll-to" data-wow-delay=".6s">Download CV</a>
                            <?php $fonts = \App\Models\Format::all();
							  $fonts = array('Source Sans Pro', 'Yanone Kaffeesatz', 'Inconsolata');
									 ?>
						
                                <select class="btn-custom light wow fadeInRight scoll-to" id="input-font" class="input"
                                  onchange="changeFontStyle (this);">
                                @foreach($fonts as $font)
														<option style="background-color: #000 !important;" value="{{$font }}">{{$font }}</option>
                                                        @endforeach	
										</select>
                                        <br>
                                        <br>
                                        <form >
                                <div class="row">
                                        <div class="col-2 ">
															<input class="form-control" type="color" value="#563d7c" id="example-color-input" />
                                                        </div>  
                                                        <div class="col-4 ">
                                                            <button type="submit" class="btn btn-danger mr-2">Color</button>
                                                        </div>      
                                    </div>    
</form>  
                        </div>
                        
                        <div class="col-md-6 sm-hide"><blockquote class="text-light pull-right wow fadeInRight" data-wow-delay=".6s">Be creative and have fun!</blockquote></div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-resume" class="dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 wow fadeInRight">
                            <h4 class="title">I'm available for hire</h4>
                            <h2 class="title">My Resume</h2>
                            <div class="title-underline"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 wow fadeInRight" data-wow-delay=".25s" style="font-family: 'Inconsolata', monospace;"  
>
                            <h3 class="s_border">Education</h3>
                            <ul class="d_timeline">
                            <?php
                                $educations = \App\Models\Education::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($educations as $education)
                                @if( $education->is_active==1)

                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">{{$education->start_date}} | {{$education->end_date}} / {{$education->degree}}</h3>
                                    <p class="d_timeline-text"><span class="d_title">{{$education->specialization}}<span>{{$education->place_name}}</span></span>{{$education->details}}</p>
                                </li>
                                @endif
                                @endforeach
                               
                            </ul>
                        </div>
                        <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                            <h3 class="s_border">Work Experiences</h3>
                            <ul class="d_timeline">
                            <?php
                                $works = \App\Models\Work::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($works as $work)
                                <li class="d_timeline-item">
                                    <h3 class="d_timeline-title">{{$work->start_date}} | {{$work->end_date}}</h3>
                                    <p class="d_timeline-text"><span class="d_title">{{$work->job_title}}<span>{{$work->company_name}}</span></span>{{$work->details}}</p>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="spacer-50"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="s_border">Skills</h3>
                            <?php
                                $skills = \App\Models\Skill::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($skills as $skill)
                                @if( $skill->is_active==1)

                            <div class="skill-bar row">
             
                                <h5>{{$skill->name}} </h5>
                                <div class="de-progress">
                                    <div class="value"></div>
                                    <div class="progress-bar" data-value="{{$skill->level}}%"></div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <div class="col-md-6">
                            <h3 class="s_border"> Interests</h3>
                            <?php
                                $interests = \App\Models\Interest::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($interests as $interest)
                                @if( $interest->is_active==1)

                            <div class="skill-bar row ml-4">
                            <i class="fa fa-hdd-o id-color mr-3"></i>
                                <h5>{{$interest->name}}</h5>
                                <!-- <div class="de-progress">
                                    <div class="value"></div>
                                    <div class="progress-bar" data-value="75%"></div>
                                </div> -->
                              
                            </div>
                            @endif
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-about" class="dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInRight">
                            <h4 class="title">Who I Am</h4>
                            <h2 class="title">About Me</h2>
                            <div class="title-underline"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-sm-30 text-center">
                            <div class="de-images">                                
                                <div class="d-hover-zoom wow fadeInRight">
                                    <a class="image-popup" href="{{asset('design/images/background/3.jpg')}}">
                                        <img class="img-fluid" src="{{asset('design/images/background/3.jpg')}}" alt="" />
                                    </a>
                                </div>
                                <div class="d-hover-zoom di-small-2 wow fadeInLeft">
                                    <a class="image-popup" href="{{$person->img ??asset('design/images/misc/avatar.png')}}">
                                        <img src="{{$person->img ??asset('design/images/misc/avatar.png')}}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-md-1 wow fadeInRight" data-wow-delay=".5s">
                            <h2>Hello, I'm <span class="id-color">Amalia Jördis</span></h2>
                            <p>
                            {{$person->details}}.
                            </p>
                            <ul class="info-list text-white">
                            <li><span class="d_title">Email:</span><span class="d_value">{{$person->email}}</span></li>
                                <li><span class="d_title">birthday:</span><span class="d_value">{{$person->birthday}}</span></li>
                                <li><span class="d_title">gender:</span><span class="d_value">{{$person->gender}}</span></li>
                                <li><span class="d_title">nationality:</span><span class="d_value">{{$person->nationality}}  </span></li>
                                <li><span class="d_title">marital:</span><span class="d_value">{{$person->marital}}  </span></li>
                                <li><span class="d_title">Address:</span><span class="d_value">{{$person->peopleaddress->street}}.St, {{$person->peopleaddress->city}}, {{$person->peopleAddress->country->name}}</span></li>
                                <li><span class="d_title">Phone:</span><span class="d_value">{{$person->mobile}}   </span></li>
                                <li><span class="d_title">language:</span><span class="d_value">
                                @foreach($person->languages as $language)   
                                    {{$language->name}},
                                    @endforeach 
                                </span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="spacer-80"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="s_border">My Courses</h3>
                        </div>
                        <?php


                            $courses = \App\Models\Course::where('user_id',Auth::user()->id)->get(); ?>
							@foreach($courses as $course)
                            @if( $course->is_active==1)

                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="f-box f-icon-left f-icon-box">
                                <i class="fa fa-laptop id-color"></i>
                                <div class="fb-text">
                                    <h4>{{$course->name}}</h4>
                                    <span class="id-color">{{$course->start_date}} <span>|</span>  {{$course->end_date}}  </span><br>
                                    <span class="id-color">{{$course->hours}}Hr <span>|</span>  {{$course->source}}  </span>
                            
                                    <p>{{$course->details}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
            
                    </div>
                    <div class="spacer-80"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="s_border">Testimonials</h3>
                        </div>
                        <div class="col-md-12">
                            <div id="testimonial-carousel" class="owl-carousel owl-theme wow fadeInUp">
                                <?php

                            $testimonials = \App\Models\Testimonial::where('user_id',Auth::user()->id)->get(); ?>
                            @foreach($testimonials as $testimonial)
                            @if( $testimonial->is_active==1)

                                <blockquote class="testimonial-big text-light card-stretch">
                                    <br>
                                    {{$testimonial->about}}
                                    <img src="{{asset('design/images/misc/avatar.png')}}" alt="" />
                                    <span class="name">{{$testimonial->person_name}}, Customer</span>
                                    <span class="name mt-0">{{$testimonial->person_email}}</span>
                                    <span class="name mt-0">{{$testimonial->person_mobile}}</span>

                                </blockquote>
                                @endif
                                @endforeach
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

           

            <!-- section begin -->
            <section id="section-portfolio" class="dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInRight">
                            <h4 class="title">This is my story</h4>
                            <h2 class="title">My Portfolios</h2>
                            <div class="title-underline"></div>
                        </div>
                    </div>
                    <div class="row wow fadeInRight" data-wow-delay=".25s">
                    <?php
         $portfolios = \App\Models\Portfolio::where('user_id',Auth::user()->id)->get(); 
         
        ?>
        @foreach($portfolios as $portfolio)
        <?php
        $portfoliosimage=Portfolio_media::where('portfolio_id',$portfolio->id)->first();
        $portfolioimage=Portfolio_media::where('portfolio_id',$portfolio->id)->get();

?> 
        @if($portfolio->is_active == 1)

                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="bloglist item">
                                <div class="post-content">
                                <div class="post-image d-hover-zoom">
                                    @if($portfoliosimage->type=='image')
                                    <a class="image-popup" href="{{$portfoliosimage->name}}">
                                                        <img alt="" src="{{$portfoliosimage->name ?? ''}}">
                                                    </a>   
                                  
														
                                     @elseif($portfoliosimage->type=='doc')
                                 <div class="post-image d-hover-zoom" style="background-color: #fff ;" >
                                     <a class="image-popup "   href="{{$portfoliosimage->name}}">
                                                        <br>
														<br>

														<a  href="{{$portfoliosimage->name ?? ''}}" target="_blank">
															View Document
														</a > 
														<br>
														<br>
														<br>
                                                    </a>  
                                         </div>	
                                        @elseif($portfoliosimage->type=='sound')
                                        <a class="image-popup" href="{{$portfoliosimage->name}}">
                                                      <audio  class="img-fluid" controls>
															<source src="{{$portfoliosimage->name ?? ''}}"  >
                                                        </audio >
                                                    </a>  
														
													@elseif(($portfoliosimage->type=='video'))
                                                    <a class="image-popup" href="{{$portfoliosimage->name}}">
                                                        <video class="img-fluid" controls>
															<source src="{{$portfoliosimage->name ?? ''}}"  >
														</video>
                                                    </a>                                              
                                               @endif
                            
                                        <div class="post-info">
                                            <div class="inner">
                                                <span class="post-date">{{$portfolio->start_date}} | {{$portfolio->end_date}}</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="post-text">
                                        <h4><a href="blog-single.html">{{$portfolio->portfolio_name}}</a></h4>
                                        <p style="overflow-wrap: anywhere;">{{$portfolio->details}}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        @endif
                        @endforeach
                      
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-contact" class="dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInRight">
                            <h4 class="title">I'm available for hire</h4>
                            <h2 class="title">Contact Me</h2>
                            <div class="title-underline"></div>
                        </div>
                    </div>
                    <form name="contactForm" id="contact_form" class="row form-default wow fadeInRight" data-wow-delay=".25s" method="post" action="email.php">
                        <div class="col-md-6">
                            <div class="field-set">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                                <div class="line-fx"></div>
                            </div>
                            <div class="field-set">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" />
                                <div class="line-fx"></div>
                            </div>
                            <div class="field-set">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" />
                                <div class="line-fx"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field-set">
                                <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                <div class="line-fx"></div>
                            </div>
                        </div>
                        <div class="spacer-single"></div>
                        <div class="col-md-12 text-center">
                            <div id="submit">
                                <input type="submit" id="send_message" value="Send" class="btn btn-custom color-2" />
                            </div>
                            <div id="mail_success" class="success">Your message has been sent successfully.</div>
                            <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <!-- content close -->
    </div>
    
   	    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('design/js/jquery.min.js')}}"></script>
    <script src="{{asset('design/js/jpreLoader.min.js')}}"></script>
    <script src="{{asset('design/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('design/js/wow.min.js')}}"></script>
    <script src="{{asset('design/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('design/js/easing.js')}}"></script>
    <script src="{{asset('design/js/owl.carousel.js')}}"></script>
    <script src="{{asset('design/js/validation.js')}}"></script>
    <script src="{{asset('design/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('design/js/enquire.min.js')}}"></script>
    <script src="{{asset('design/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('design/js/jquery.plugin.js')}}"></script>
    <script src="{{asset('design/js/typed.js')}}"></script>
    <script src="{{asset('design/js/typed-custom.js')}}"></script>
    <script src="{{asset('design/js/designesia.js')}}"></script>
  
   
        
    <script>
        var changeFontStyle = function (font) {
            document.getElementById(
                "body").style.fontFamily
                        = font.value;
        }
    </script>
  
</body>

</html>