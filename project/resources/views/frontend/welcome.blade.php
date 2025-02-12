@extends('layout.frontend');

@section('content')

<div class="page-hero bg-image overlay-dark" style="background-image: url('{{asset('frontend/one-health-master/assets/img/bg_image_1.jpg')}}');">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Welcome To</span>
        <h1 class="display-4">Starries Collectives</h1>
        {{-- <a href="#" class="btn btn-info">Let's Consult</a> --}}
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white" >
                {{-- <span class="mai-chatbubbles-outline"></span> --}}
                <i class="fa fa-scissors"  style="width: 40px;height:30px; margin-top:13px;" aria-hidden="true"></i>

              </div>
              <p>Modern Ankara</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-info text-white">
                {{-- <span class="mai-shield-checkmark"></span> --}}
                <i class="fa fa-tape"  style="width: 40px;height:30px; margin-top:13px;" aria-hidden="true"></i>

              </div>
              <p>Tailored Suits</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                {{-- <span class="mai-basket"></span> --}}
                <i class="fa fa-tshirt"  style="width: 40px;height:30px; margin-top:13px;" aria-hidden="true"></i>

              </div>
              <p>Aso Ebi</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Starries<br> Collectives</h1>
            <p class="text-grey mb-4">Starries Collectives is a dynamic fashion and lifestyle brand dedicated to redefining style and self-care. Specializing in premium female and male wear, as well as high-quality hair care products, we blend fashion with functionality to inspire confidence and individuality. At Starries Collectives, we believe in elevating everyday essentials, ensuring our customers not only look good but feel their best.</p>
            <a href="{{route('frontend.about')}}" class="btn btn-info">See More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="{{asset('frontend/one-health-master/assets/img/bg-doctor.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp bg-info text-white">Our Latest Trends</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_1.jpg')}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">Style 1</p>
              <span class="text-sm text-grey"> General Health</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_2.jpg')}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">Style 2</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_2.jpg')}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">Style 3</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_2.jpg')}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">Style 4</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_2.jpg')}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">Style 5</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('frontend/one-health-master/assets/img/doctors/doctor_3.jpg')}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">Style 6</p>
              <span class="text-sm text-grey">Cardiology</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Starries Collective Buzz</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Trends</a>
              </div>
              <a href="{{route('frontend.news')}}" class="post-thumb">
                <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_1.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{route('frontend.news')}}">Insights into seasonal styles and upcoming </a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{asset('frontend/one-health-master/assets/img/person/person_1.jpg')}}" alt="">
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">New Arrivals</a>
              </div>
              <a href="{{route('frontend.news')}}" class="post-thumb">
                <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_2.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{route('frontend.news')}}">Announcements of fresh designs and limited</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{asset('frontend/one-health-master/assets/img/person/person_1.jpg')}}" alt="">
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Behind-the-Scenes</a>
              </div>
              <a href="{{route('frontend.news')}}"class="post-thumb">
                <img src="{{asset('frontend/one-health-master/assets/img/blog/blog_3.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{route('frontend.news')}}">Exclusive peeks into the brand’s creative process.</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{asset('frontend/one-health-master/assets/img/person/person_2.jpg')}}" alt="">
                  </div>
                  <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{route('frontend.news')}}"class="btn btn-info">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section --> --}}

  <div class="page-section">
    <div class="container">

      @if(session('status'))

       <div class="alert alert-success">
        {{session('status')}}
        </div>
      @endif
        <h1 class="text-center wow fadeInUp">Send Us Your Measurements, We Deliver!!!</h1>

        <form class="main-form" id="bookingForm" action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mt-5">
              <!-- Customer Information -->
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <label for="completionDate">Full Name</label>
                  <input type="text" name="fullname" class="form-control" id="fullName" placeholder="Full Name" required>
                  <small class="text-danger" id="nameError"></small>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <label for="completionDate">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                  <small class="text-danger" id="emailError"></small>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <label for="completionDate">Phone Number</label>
                  <input type="text" name="phonenumber" class="form-control" id="phone" placeholder="Phone Number" required>
                  <small class="text-danger" id="phoneError"></small>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <label for="completionDate">Delivery Address</label>
                  <input type="text" name="shippingaddress" class="form-control" id="address" placeholder="Shipping Address" required>
                  <small class="text-danger" id="addressError"></small>
              </div>
      
              <!-- Garment Details -->
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <label for="completionDate">Garment Type</label>
                  <select name="garment" class="form-control" id="garmentType" required>
                      <option value="" disabled selected>Select Type of Garment</option>
                      <option value="dress">Dress</option>
                      <option value="shirt">Shirt</option>
                      <option value="pants">Pants</option>
                      <option value="suit">Suit</option>
                  </select>
                  <small class="text-danger" id="garmentTypeError"></small>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <label for="completionDate">Garment Size</label>
                  <select name="style" class="form-control" id="style">
                      <option value="" disabled selected>Select Style or Design Preferences</option>
                      <option value="fitted">Fitted</option>
                      <option value="loose">Loose</option>
                      <option value="specific neckline">Specific Neckline</option>
                      <option value="sleeve length">Sleeve Length</option>
                  </select>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                  <input type="text" name="fabric" class="form-control" id="fabric" placeholder="Fabric Type">
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                  <select name="color" class="form-control" id="color">
                      <option value="" disabled selected>Select Color Preferences</option>
                      <option value="red">Red</option>
                      <option value="blue">Blue</option>
                      <option value="green">Green</option>
                      <option value="black">Black</option>
                      <option value="white">White</option>
                      <option value="yellow">Yellow</option>
                      <option value="pink">Pink</option>
                      <option value="purple">Purple</option>
                      <option value="brown">Brown</option>
                      <option value="gray">Gray</option>
                  </select>
              </div>
      
              <!-- Measurement Details -->
              <div class="col-12 py-2 wow fadeInUp">
                  <textarea class="form-control" name="measurement" id="measurements" rows="4" placeholder="Enter Measurements (Chest, Waist, Hips, Shoulder Width, etc.)" required></textarea>
                  <small class="text-danger" id="measurementsError"></small>
              </div>
      
              <!-- Additional Information -->
              <div class="col-12 py-2 wow fadeInUp">
                  <textarea class="form-control" name="specialrequest" id="specialRequests" rows="4" placeholder="Any Special Requests or Instructions"></textarea>
              </div>
      
              <!-- Timeline and Budget -->
              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                  <label for="completionDate">Select Pickup Date</label>
                  <input type="date" name="date" class="form-control" id="completionDate" required>
                  <small class="text-danger" id="dateError"></small>
              </div>
              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                  <label for="budget">What's Your Budget</label>
                  <input type="text" name="budget" class="form-control" id="budget" placeholder="Budget (if any)">
              </div>
      
              <!-- Upload Reference Photos -->
              <div class="col-12 py-2 wow fadeInUp">
                  <label for="referencePhotos">Upload Reference Photos (Optional, Max 3)</label>
                  <input type="file" name="image" class="form-control" id="referencePhotos" multiple accept="image/*">
                  <small class="text-danger" id="photoError"></small>
              </div>
          </div>
      
          <button style="text-align:center;" type="submit" class="btn btn-info mt-3 wow zoomIn">Submit Request</button>
      </form>
      

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
      </div>
    </div>
  </div> <!-- .banner-home --> --}}
</div>


<script>
  function validateForm() {
      let isValid = true;

      // Reset all error messages
      document.querySelectorAll('.text-danger').forEach(el => el.innerText = '');

      // Full Name validation
      let name = document.getElementById('fullName').value.trim();
      if (name === "") {
          document.getElementById('nameError').innerText = "Full Name is required.";
          isValid = false;
      }

      // Email validation
      let email = document.getElementById('email').value.trim();
      let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailPattern.test(email)) {
          document.getElementById('emailError').innerText = "Enter a valid email address.";
          isValid = false;
      }

      // Phone Number validation (basic)
      let phone = document.getElementById('phone').value.trim();
      if (phone.length < 7) {
          document.getElementById('phoneError').innerText = "Enter a valid phone number.";
          isValid = false;
      }

      // Address validation
      let address = document.getElementById('address').value.trim();
      if (address === "") {
          document.getElementById('addressError').innerText = "Shipping address is required.";
          isValid = false;
      }

      // Garment Type validation
      let garmentType = document.getElementById('garmentType').value.trim();
      if (garmentType === "") {
          document.getElementById('garmentTypeError').innerText = "Garment type is required.";
          isValid = false;
      }

      // Measurements validation
      let measurements = document.getElementById('measurements').value.trim();
      if (measurements === "") {
          document.getElementById('measurementsError').innerText = "Please provide measurements.";
          isValid = false;
      }

      // Date validation
      let completionDate = document.getElementById('completionDate').value;
      if (!completionDate) {
          document.getElementById('dateError').innerText = "Please select a pickup date.";
          isValid = false;
      }

      // Reference Photos validation
      let photos = document.getElementById('referencePhotos').files;
      if (photos.length > 3) {
          document.getElementById('photoError').innerText = "You can only upload up to 3 photos.";
          isValid = false;
      }

      return isValid;
  }
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      // Select the success alert
      let alertBox = document.querySelector(".alert-success");
      
      if (alertBox) {
          // Set a timeout to hide the alert after 5 seconds
          setTimeout(function() {
              alertBox.style.transition = "opacity 0.5s ease-out";
              alertBox.style.opacity = "0";
              
              // Remove the alert from the DOM after the fade-out effect
              setTimeout(() => alertBox.remove(), 500);
          }, 5000);
      }
  });
</script>

@endsection