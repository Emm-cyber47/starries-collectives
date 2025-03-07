@extends('layout.frontend');

@section('content')

<div class="page-banner overlay-dark bg-image"  style="background-image:url('{{asset('frontend/one-health-master/assets/img/bg_image_1.jpg')}}');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
            {{-- <li class="breadcrumb-item active" aria-current="page">Contact</li> --}}
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
      <div class="container">
        <div class="row">
          <div class="col-md-4 py-3 wow zoomIn">
            <div class="card-service">
              {{-- <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div> --}}
              <p style="text-align: center; color: black;">Innovative</p>
            </div>
          </div>
          <div class="col-md-4 py-3 wow zoomIn">
            <div class="card-service">
              {{-- <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div> --}}
              <p style="text-align: center; color: black;">Sophisticated</p>
            </div>
          </div>
          <div class="col-md-4 py-3 wow zoomIn">
            <div class="card-service">
              {{-- <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div> --}}
              <p style="text-align: center; color: black;">Timeless</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form class="contact-form mt-5">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
      </form>
    </div>
  </div>

  <!-- <div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
  </div> -->

  {{-- <div class="page-section banner-home bg-image" style="background-image: url({{asset('frontend/one-health-master/assets/img/banner-pattern.svg')}});">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="{{asset('frontend/one-health-master/assets/img/mobile_app.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
         <a href="#"><img src="{{asset('frontend/one-health-master/assets/img/google_play.svg')}}" alt=""></a>
          <a href="#" class="ml-2"><img src="{{asset('frontend/one-health-master/assets/img/app_store.svg')}}" alt=""></a>
        </div>
      </div> <!-- .row --> --}}
    </div> <!-- .container -->
  </div> <!-- .banner-home -->
  @endsection