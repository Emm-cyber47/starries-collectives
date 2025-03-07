@extends('layout.frontend');

@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image:url('{{asset('frontend/one-health-master/assets/img/bg_image_1.jpg')}}');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
            {{-- <li class="breadcrumb-item active" aria-current="page">Gallery</li> --}}
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Gallery</h1>
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

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_1.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 1</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_2.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 2</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_4.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 3</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_3.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 4</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_5.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 4</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_5.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 5</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_5.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 6</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_5.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 7</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_5.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 8</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_5.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 9</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_5.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 10</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_6.jpg')}}" alt="">
                  <div class="meta">
                    {{-- <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a> --}}
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Style 11</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  {{-- <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div> <!-- .container -->
  </div> <!-- .page-section --> --}}
  

  {{-- <div class="page-section banner-home bg-image" style="background-image:  url({{asset('frontend/one-health-master/assets/img/banner-pattern.svg')}});">
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
      </div>
    </div>
  </div> <!-- .banner-home --> --}}
  
@endsection