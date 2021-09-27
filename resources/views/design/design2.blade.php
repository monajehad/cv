<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('design2/img/favicon.png')}}" rel="icon">
  <link href="{{asset('design2/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('design2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('design2/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('design2/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('design2/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('design2/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('design2/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('design2/css/style.css')}}" rel="stylesheet">
  <style>

@import url('https://fonts.googleapis.com/css2?family=Inconsolata&family=Lato:ital,wght@1,300&family=Source+Sans+Pro:wght@300&family=Yanone+Kaffeesatz&display=swap');
</style>
  <!-- =======================================================
  * Template Name: Personal - v2.5.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="body">

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

      <h1>  {{$person->name}}</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="{{asset('design2/img/logo.png')}}" alt="" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <?php

use Illuminate\Support\Facades\Auth;

$socials = \App\Models\Social::where('user_id',Auth::user()->id)->get(); ?>

      <div class="social-links">
      @foreach($socials as $social)
      @if( $social->is_active==1)

        <a href="{{$social->link}}" class="{{$social->social_website->name}}"><i class="icofont-{{$social->social_website->name}}"></i></a>
      @endif
        @endforeach
      </div>
      
                 
                              
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{$person->img ??asset('design/images/misc/avatar.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>I'm {{$person->name}} </h3>
          <p class="font-italic">
          {{$person->details}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$person->birthday}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$person->email}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$person->mobile}} </li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$person->peopleaddress->street}}.St, {{$person->peopleaddress->city}}, {{$person->peopleAddress->country->name}}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Gender:</strong> {{$person->gender}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Nationality:</strong> {{$person->nationality}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>marital:</strong> {{$person->marital}} </li>
                <li><i class="icofont-rounded-right"></i> <strong>Language:</strong> 
                @foreach($person->languages as $language)   
                {{$language->name}}
                @endforeach     
            </li>
              </ul>
            </div>
          </div>
         
        </div>
      </div>

    </div><!-- End About Me -->

    
    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">
        <?php
        $skills = \App\Models\Skill::where('user_id',Auth::user()->id)->get(); ?>
           @foreach($skills as $skill)
           @if($skill->is_active == 1)
          <div class="progress">
            <span class="skill">{{$skill->name}}<i class="val">{{$skill->level}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->level}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
@endif
         @endforeach

        </div>

       

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
      <?php
  $interests = \App\Models\Interest::where('user_id',Auth::user()->id)->get(); ?>
    @foreach($interests as $interest)
      @if($interest->is_active == 1)
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>{{$interest->name}}</h3>
          </div>
        </div>
        @endif
        @endforeach
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container mt-5">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="owl-carousel testimonials-carousel">
      <?php

        $testimonials = \App\Models\Testimonial::where('user_id',Auth::user()->id)->get(); ?>
       @foreach($testimonials as $testimonial)
       @if($testimonial->is_active == 1)
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {{$testimonial->about}}
             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="{{asset('design/images/misc/avatar.png')}}" class="testimonial-img" alt="">
          <h3>{{$testimonial->person_name}}</h3>
          <h4>{{$testimonial->person_email}}</h4>
          <h4>{{$testimonial->person_mobile}}</h4>

        </div>
        @endif
       @endforeach
     
      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
         

          <h3 class="resume-title">Education</h3>
          <?php
               $educations = \App\Models\Education::where('user_id',Auth::user()->id)->get(); ?>
        @foreach($educations as $education)
        @if($education->is_active == 1)

          <div class="resume-item">
            <h4>{{$education->place_name}} | {{$education->degree}}</h4>
            <h5>{{$education->start_date}} | {{$education->end_date}} </h5>
            <p><em>>{{$education->specialization}}</em></p>
            <p> {{$education->details}}</p>
          </div>
          @endif
         @endforeach
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Work Experience</h3>
          <?php
             $works = \App\Models\Work::where('user_id',Auth::user()->id)->get(); ?>
         @foreach($works as $work)
        @if($work->is_active == 1)

          <div class="resume-item">
            <h4>{{$work->job_title}}|{{$work->company_name}}</h4>
            <h5>{{$work->start_date}} | {{$work->end_date}}</h5>
            <p class="mt-5"><em>{{$work->details}} </em></p>
            
          </div>
          @endif
         @endforeach
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
  
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        <?php
         $portfolios = \App\Models\Portfolio::where('user_id',Auth::user()->id)->get(); 
         
        ?>
        @foreach($portfolios as $portfolio)
        
        <?php
        $portfoliosimage=App\Models\Portfolio_media::where('portfolio_id',$portfolio->id)->first();
        $portfolioimage=App\Models\Portfolio_media::where('portfolio_id',$portfolio->id)->get();

?> 
        @if($portfolio->is_active == 1)

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
          @if($portfoliosimage->type=='video')
														<video class="img-fluid" controls>
															<source src="{{$portfoliosimage->name ?? ''}}"  >
														</video>
                            @elseif($portfoliosimage->type=='doc')
														
														<br>
														<br>
														<a  href="{{$portfoliosimage->name ?? ''}}" target="_blank">
															View Document
														</a > 
														<br>
														<br>
														<br>
                            @elseif($portfoliosimage->type=='sound')
														<audio  class="img-fluid" controls>
															<source src="{{$portfoliosimage->name ?? ''}}"  >
														</audio >
													@else
            <img src="{{$portfoliosimage->name}}" class="img-fluid" alt="">
            @endif
             <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <!-- <a href="" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a> -->
                <a href="{{ '/user/design/showdesign/'.$portfolio->id }}"  data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endif
      @endforeach
      
      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>{{$person->peopleaddress->street}}.St, {{$person->peopleaddress->city}}, {{$person->peopleaddress->name}}</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <?php $socials = \App\Models\Social::where('user_id',Auth::user()->id)->get(); ?>
            <h3>Social Profiles</h3>
            <div class="social-links">
        @foreach($socials as $social)
        @if($social->is_active == 1)

              <a href="{{$social->link}}" class="{{$social->social_website->name}}"><i class="icofont-{{$social->social_website->name}}"></i></a>
             @endif
@endforeach
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>{{$person->email}}</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>{{$person->mobile}}</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

   <!-- Vendor JS Files -->
   <script src="{{asset('design2/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('design2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('design2/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('design2/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('design2/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('design2/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('design2/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('design2/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('design2/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
 
  <!-- Template Main JS File -->
  <script src="{{asset('design2/js/main.js')}}"></script>
  <script>
        var changeFontStyle = function (font) {
            document.getElementById(
                "body").style.fontFamily
                        = font.value;
        }
    </script>
</body>

</html>