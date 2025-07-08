@extends('main')

@section('main-container')

<!-- Products -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="section-title" data-aos="fade-up">Get in Touch with Yesh Industries</h2>
    
    <div class="row d-flex justify-content-center">
    
      <div class="col-9" data-aos="zoom-in" data-aos-delay="100">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Contact</h5>
            <p class="card-text">
              If you’ve got questions or ideas you would like to share, send a message.<br/>
               For anything more specific, please use one of the addresses listed below.
    
        <h5 class="card-title">Address</h5>
        <h5 class="card-title">Unit:1</h5>  Rani Industries Estate, Division-1, Plot No-52, B/H Parin Furniture, Gondal Road, Vavdi, Rajkot, Gujarat, 360004 <br/>
        <h5 class="card-title">Unit:2</h5>  Plot No-3, Shed No-1, Ribda Railway Station, Global Industrial Estate, Opp Accurate Casting, Ribda, Rajkot, Gujarat, 360311<br/>
        <h6 class="mt-0 font-weight-bold">Email: <br/>info@sensovalve.com   <br/> yeshindustries96@gmail.com </h6>
        <h6 class="mt-0 font-weight-bold">Phone: <br/> +91 9375768870  <br/>+91 7016841060  </h6>

            </p>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- form-->
<section class="about-section text-white">
  <div class="container py-5">
   
    <div class="container contact-form">
  <div class="card shadow">
    <div class="card-header bg-primary text-white text-center">
      <h4>Contact Us</h4>
    </div>
    <div class="card-body">
      <form action="#" method="">
        <p class="card-title text-dark">After we get some information from you, we'll set up a time to discuss further detail.</p>
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
          <label for="email">Your Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="message">Your Message</label>
          <textarea name="message" class="form-control" rows="5" placeholder="Write your message..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block font-weight-bold">Send Message</button>
      </form>
    </div>
  </div>
</div>
  </div>
</section>
<!--map-->
<style>
  #map {
    height: 400px;
    width: 100%;
    border-radius: 10px;
  }
</style>
<section class="py-5">
  <div class="container text-center">
    
    
    <div class="row d-flex justify-content-center">
    
      <div class="col-9" data-aos="zoom-in" data-aos-delay="100">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Map</h5>
            <div class="container my-5">
    <h2 class="text-center mb-4">Location Map</h2>
    <div id="map"></div>
</div>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- Google Maps API 22.226388612797532, 70.80112123788679 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw9xZ_pAOU3AP0W3XzOZDlbtiitPfyni0-KEY&callback=initMap"
 async defer></script>

<script>
    function initMap() {
        // Change latitude and longitude to your location
        const location = { lat: 22.226388612797532, lng: 70.80112123788679 }; // Example: Rajkot, Gujarat

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: location,
        });

        const marker = new google.maps.Marker({
            position: location,
            map: map,
            title: "Your Location",
        });
    }
</script>
@endsection