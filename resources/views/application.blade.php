@extends('main')

@section('main-container')

<section class="py-5">
  <div class="container text-center">
    <h2 class="section-title" data-aos="fade-up">Valves for Every Industry</h2>
    
    <div class="row d-flex justify-content-center">
    
      <div class="col-9" data-aos="zoom-in" data-aos-delay="100">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Our valves are used in a wide range of industries, including</h5>
            <!--<p class="card-text">
              Pharmaceuticals<br/>
              Refineries<br/>
              Water Treatment Facilities<br/>
              Paper and Pulp<br/>
              Food and Beverage<br/>

            </p> -->


<!-- Products -->
<section class="py-5">
  <div class="container text-center">
    
    <div class="row">
      <div class="col-md-4" data-aos="zoom-in">
        <div class="card mb-4">
          <img src="{{url('img/ph3.jpg')}}" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Pharmaceuticals</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="card mb-4">
          <img src="{{url('img/rf2.png')}}" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Refineries</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card mb-4">
          <img src="{{url('img/wtr1.png')}}" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Water Treatment Facilities</h5>
            
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card mb-4">
          <img src="{{url('img/ppr.png')}}" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Paper and Pulp</h5>
            
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card mb-4">
          <img src="{{url('img/fd1.png')}}" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title"> Food and Beverage</h5>
            
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card mb-4">
          <img src="{{url('img/v2.png')}}" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title"> Other</h5>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
@endsection