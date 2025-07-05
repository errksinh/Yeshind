@extends('main')

@section('main-container')

<!-- Products -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="section-title" data-aos="fade-up">Our Products</h2>
    <div class="row">
      <div class="col-md-4" data-aos="zoom-in">
        <div class="card mb-4">
          <img src="{{url('PRODUCTESIMAGE/1.jpg')}}" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">1PC FLANGED END BALL VALVE</h5>
            <p class="card-text">Built for durability and smooth water flow control.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="card mb-4">
          <img src="{{url('PRODUCTESIMAGE/2.jpeg')}}" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">2PC FLANGED END BALL VALVE</h5>
            <p class="card-text">Engineered for suction lines with leak-free performance.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card mb-4">
          <img src="{{url('PRODUCTESIMAGE/3.jpeg')}}" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">3PC FLANGED END BALL VALVE</h5>
            <p class="card-text">Ideal for industrial, residential, and agricultural systems.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--section prd-->
<div class="technical-resources-section d-flex flex-wrap mb-3">
  <!-- Left Side -->
  <div class="col-md-6 p-5 bg-light">
    
    <div class="row text-center">
      <div class="col-md-4 offset-md-5">
        <div class="card card-resource bg-primary text-white">
          <a class="nav-link" href="{{url('/products')}}">
          <img src="{{url('img/list.png')}}" class="card-img-top p-3" alt="Spec Sheet">
          <div class="card-body p-2">
            <p class="card-text text-white">SPEC SHEETS</p>
          </div>
          </a>
        </div>
      </div>
      
      
      
    </div>
  </div>

  <!-- Right Side -->
  <div class="right-side col-md-6 p-5 text-white position-relative" style="background: url('your-bg-image.png') center/cover no-repeat;">
    <div class="overlay"></div>
    <div class="position-relative z-index-1">
      <h3><strong>NEED HELP</strong> Specifying Yesh Industries Products?</h3>
      <p class="mt-3">
        If you are an engineer specifying valve products or need help with a new application, our team is here for you. 
        Get technical help and download documents under SpecLink or MasterSpec.
      </p>
      <a href="{{url('/contactus')}}" class="btn btn-success mt-3">CONTACT US TODAY</a>
    </div>
  </div>
</div>
<!--part 3-->
<section class="news-events py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2><span style="color: #007bff;">Yesh Industries</span> <strong>NEWS, EVENTS & PRODUCT RELEASES</strong></h2>
      <p class="text-muted">New Product Updates, Industry News and More...</p>
    </div>

    <div class="row">
      <!-- Left Main News -->
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow border-0" >
          <img src="{{url('img/BACKGROUND1.jpg')}}" class="card-img-top" alt="Main Event">
          <div class="card-body">
            <h5 class="card-title">Elevate the Future of Premium Ball Valves with Yesh Industries</h5>
            
          </div>
        </div>
      </div>

      <!-- Right Side News Blocks -->
      <div class="col-md-6">
        <!-- News Item 1 -->
        <div class="media mb-4 p-3 bg-white shadow-sm rounded">
          <img src="{{url('img/p.png')}}" class="mr-3 rounded" alt="Person 1" width="120">
          <div class="media-body">
            <h6 class="mt-0 font-weight-bold">Yesh Industries Promotes Mehul Patel to Sales Head</h6>
            <small class="text-muted">Rajkot, India — April 1st, 2025</small>
            <p class="mb-1">Yesh Industries announces the promotion of Mehul Patel, focusing on expanding global market reach for "Senso" valves... <a href="#">READ MORE</a></p>
          </div>
        </div>

        <!-- News Item 2 -->
        <div class="media mb-4 p-3 bg-white shadow-sm rounded">
          <img src="{{url('img/p.png')}}" class="mr-3 rounded" alt="Person 2" width="120">
          <div class="media-body">
            <h6 class="mt-0 font-weight-bold">New Appointment: Rajesh Kumar as Plant Manager</h6>
            <small class="text-muted">Surat, India — March 20, 2025</small>
            <p class="mb-1">With 15+ years of experience, Rajesh joins the team to strengthen our manufacturing excellence in "Senso" products... <a href="#">READ MORE</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--part 4-->
<section class="about-section text-white">
  <div class="container py-5">
    <div class="text-center mb-4">
      <h3 class="font-weight-bold text-uppercase">Innovation, Quality, Sustainability</h3>
      <h5>Yesh Industriesic Valves, Leading Valve Manufacturer</h5>
    </div>
    <div class="row align-items-center">
      <div class="col-md-7">
        <hr class="bg-light">
        <p class="text-justify">
          Yesh Industries established in 2002 manufactures a comprehensive range of high-quality industrial valves that combine superior performance with competitive pricing. As a trusted industry leader, we produce premium-grade valves including Ball Valves, Butterfly Valves, and NRV Valves that meet the demanding requirements of:<br/>
        Pharmaceutical facilities,<br/>chemical processing plants,<br/>Oil refineries<br/>
        Yesh Industries is a leading manufacturer and supplier of high-quality industrial valves and flow control solutions. Since our inception, we have been committed to delivering innovative, reliable, and durable products to industries worldwide.

        </p>
        <p class="text-justify">
          We specialize in manufacturing Senso Make Ball Valves, NRV and Butterfly Valves designed for optimal performance and longevity. Our state-of-the-art manufacturing facility, combined with strict quality control processes, ensures that every product meets the highest industry standards.
          Our unwavering commitment to world-class quality ensures reliable performance across all applications making us the preferred valve supplier for critical industrial processes worldwide.

        </p>
        <a href="{{url('/aboutus')}}" class="btn btn-success mt-3">More About Yesh Industries</a>
      </div>
      <div class="col-md-5 text-center">
        <div class="video-thumbnail position-relative rounded overflow-hidden shadow">
          <img src="{{url('img/1.png')}}" alt="Video Thumbnail" class="img-fluid rounded">
          <span class="play-button">&#9658;</span>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection