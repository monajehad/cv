<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
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

  <!-- =======================================================
  * Template Name: Personal - v2.5.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="portfolio-title">This is an example of portfolio detail</h2>
            <div class="owl-carousel portfolio-details-carousel">
           @foreach($portfoliosimage as $portfolio_medi)
          
            @if($portfolio_medi->type=='video')
														<video class="img-fluid" controls>
															<source src="{{$portfolio_medi->name ?? ''}}"  >
														</video>
                            @elseif($portfolio_medi->type=='doc')
                            
														<br>
														<br>
														<a  href="{{$portfolio_medi->name ?? ''}}" target="_blank">
															View Document
														</a > 
														<br>
														<br>
														<br>
                            @elseif($portfolio_medi->type=='sound')
														<audio  class="image-input-wrapper" controls>
															<source src="{{$portfolio_medi->name ?? ''}}"  >
														</audio >
													@else
                          <img src="{{$portfolio_medi->name?? ''}}" class="img-fluid"  alt="">
													@endif
            
           @endforeach
           </div>
          </div>

          <div class="col-lg-4 portfolio-info" style="overflow-wrap: anywhere;">
            <h3>Project information</h3>
            <ul> 
              <li><strong>Name</strong>:{{$portfolio->portfolio_name}}</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: {{$portfolio->start_date}} | {{$portfolio->end_date}}</li>
              <li><strong>Project URL</strong>: <a href="#">{{$portfolio->link}}</a></li>
            </ul>

            <p>
            {{$portfolio->details}}
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

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
 
  <script src="{{asset('design2/js/main.js')}}"></script>

</body>

</html>