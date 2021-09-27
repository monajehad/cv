<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orbit - Bootstrap 5 Resume/CV Template for Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{asset('design3/plugins/bootstrap/css/bootstrap.min.css')}}">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('design3/css/orbit-1.css')}}">
</head> 

<body>
    <div class="wrapper mt-lg-5">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" style="width: 100px ; height:100px" src="{{$person->img}}" alt="" />
                <h1 class="name"> {{$person->name}}</h1>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i> email: <a href="{{$person->email}}">{{$person->email}}</a></li>
                    <li class="phone"><i class="fas fa-phone"></i>tel: <span> {{$person->mobile}}</span></li>
                    <li class="phone"><i class="fas fa-phone"></i>birthday: <span> {{$person->birthday}}</span></li>
                    <li class="phone"><i class="fas fa-phone"></i>gender: <span> {{$person->gender}}</span></li>
                    <li class="phone"><i class="fas fa-phone"></i>nationality: <span> {{$person->nationality}}</span></li>
                    
                    <hr>
                 <?php

use Illuminate\Support\Facades\Auth;

$socials = \App\Models\Social::where('user_id',Auth::user()->id)->get(); ?>
                                
                                @foreach($socials as $social)
                                 @if( $social->is_active==1)
                                      <li class="{{$social->social_website->name}}"><i class="fab fa-{{$social->social_website->name}}"></i><a href="{{$social->link}}" target="_blank">{{$social->link}}</a></li>
                                  
                                    @endif
                               @endforeach
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <?php
                                $educations = \App\Models\Education::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($educations as $education)
                                @if( $education->is_active==1)
                                <div class="item">
                                    <h4 class="degree">{{$education->degree}} | {{$education->specialization}}</h4>
                                    <h5 class="meta">{{$education->place_name}}</h5>
                                      <div class="time">{{$education->start_date}} | {{$education->end_date}} </div>
                                </div><!--//item-->
                               
                                @endif
                                @endforeach
                
                
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                @foreach($person->languages as $language)   
                   <li>{{$language->name}} </li>
                                   
                    @endforeach 
                    
                   
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                <?php
                                $interests = \App\Models\Interest::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($interests as $interest)
                                @if( $interest->is_active==1)
                                <li>{{$interest->name}}</li>
                        
                               
                             
                            @endif
                            @endforeach
                    
                   
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span> About </h2>
                <div class="summary">
                    <p>{{$person->details}}.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Experiences Work</h2>
                <?php
                                $works = \App\Models\Work::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($works as $work)
                                <div class="item">
                                    <div class="meta">
                                        <div class="upper-row">
                                            <h3 class="job-title">{{$work->job_title}}</h3>
                                            <div class="time">{{$work->start_date}} | {{$work->end_date}}</div>
                                        </div><!--//upper-row-->
                                        <div class="company">{{$work->company_name}}</div>
                                    </div><!--//meta-->
                                    <div class="details">
                                        <p>{{$work->details}}</p>  
                                    </div><!--//details-->
                                </div><!--//item-->
                                @endforeach
              
                
              
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projects</h2>
               
                <?php
                  $portfolios = \App\Models\Portfolio::where('user_id',Auth::user()->id)->get(); 
                  
                  ?>
                  @foreach($portfolios as $portfolio)
                    @if($portfolio->is_active == 1)

                      <div class="item">
                          <span class="project-title">{{$portfolio->portfolio_name}}</span> - <span class="project-tagline">A responsive website template designed to help developers launch their software projects. 
                            <br>
                            <a href="{{$portfolio->link}}" target="_blank">  {{$portfolio->link}}</a>
                          </span>
                          
                      </div><!--//item-->
@endif
                @endforeach
               
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills &amp; Proficiency</h2>
                <div class="skillset">  
                <?php
                                $skills = \App\Models\Skill::where('user_id',Auth::user()->id)->get(); ?>
                                @foreach($skills as $skill)
                                @if( $skill->is_active==1)      
                                      <div class="item">
                                          <h3 class="level-title">{{$skill->name}}</h3>
                                          <div class="progress level-bar">
                                  <div class="progress-bar theme-progress-bar" role="progressbar" style="width: {{$skill->level}}%" aria-valuenow="{{$skill->level}}%" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>                               
                                      </div><!--//item-->
                                      @endif
                    @endforeach
                  
                
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
        
</body>
</html> 

