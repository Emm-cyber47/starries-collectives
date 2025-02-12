@extends('layout.frontend');

@section('content')

<div class="page-banner overlay-dark bg-image"  style="background-image:url('{{asset('frontend/one-health-master/assets/img/bg_image_1.jpg')}}');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
            {{-- <li class="breadcrumb-item active" aria-current="page">About</li> --}}
          </ol>
        </nav>
        <h1 class="font-weight-normal">Starries Collectives</h1>
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
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">About Us</h1>
          <hr><hr>
          <div class="text-lg">
            <p>At Starries Collectives, we redefine fashion with a unique blend of creativity, craftsmanship, and timeless elegance. Our designs reflect a deep understanding of modern trends, yet they are deeply rooted in cultural influences. Each piece is carefully crafted to empower the individual, offering a perfect balance of style, comfort, and sophistication. Whether for casual outings or formal occasions, Starries Collectives stands out with its innovative approach to fashion, ensuring you look and feel your best at all times.</p>

<p>Our collections are for those who appreciate the art of tailored fashion. We take pride in offering not only garments but experiences, celebrating the fusion of contemporary styles and traditional craftsmanship. Every stitch, fabric choice, and design is made with you in mind, delivering high-quality pieces that are as unique as the individuals who wear them. Discover the essence of style with Starries Collectives – where every outfit tells a story of elegance, innovation, and timeless beauty.</p>

          </div>
        </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Stylist</h1>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_1.jpg')}}" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Esther Ajide</p>
                  <span class="text-sm text-grey">Cardiology</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_2.jpg')}}" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Emmanuel Ajide</p>
                  <span class="text-sm text-grey">Dental</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_3.jpg')}}" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">James Ajide</p>
                  <span class="text-sm text-grey">General Health</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="{{asset('frontend/one-health-master/assets/img/mobile_app.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Coming Soon!!!</h1>
          <a href="#"><img src="{{asset('frontend/one-health-master/assets/img/google_play.svg')}}" alt=""></a>
          <a href="#" class="ml-2"><img src="{{asset('frontend/one-health-master/assets/img/app_store.svg')}}" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

@endsection
