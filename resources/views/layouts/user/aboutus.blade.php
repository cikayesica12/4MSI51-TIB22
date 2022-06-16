@extends('layouts.template.main')

@section('title', 'About Us')

@section('container')
<div>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="media/ads 1.jpg" alt="img" width="100px" border-radius="50%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777">        

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="color: #072D44;">DRIVE IT, RENT IT</h1>
            <p>Drive your way through vacations with us.</p>
            <p><a class="btn btn-lg btn-primary" href="{{route("listrental.index")}}">Fill your form here</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="media/ads 2.jpg" alt="img" width="100px" border-radius="50%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777">        

        <div class="container">
          <div class="carousel-caption">
            <h1>Will you drive with us?</h1>
            <p>We also have suggestions for your vacation's plan. Whereever you go, we always provide.</p>
            <p><a class="btn btn-lg btn-primary" href="/info">Read Here</a></p>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
      <div class="row pb-5">
          <h3 style="text-align: center; color: #072D44; font-family: Helvetica;">ABOUT US</h3>

      </div>
  </div>

  <div class="container marketing">

      <!-- List of founder -->
      <div class="row">
        <div class="col-lg-4">
          <img src="media/hera.png" class="rounded-circle" alt="img" width="180px" border-radius="50%">        
          <h5 class="nama pt-3" style="color: #072D44;">Erawati Efendi</h5>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="media/silvia.png" class="rounded-circle" alt="img" width="180px" border-radius="50%">        
          <h5 class="nama pt-3" style="color: #072D44;">Silvia</h5>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="media/chika.jpg" class="rounded-circle" alt="img" width="180px" border-radius="50%">        
          <h5 class="nama pt-3" style="color: #072D44;">Yesica Christina</h5>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- Description 1 -->
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">History of the Company<span class="text-muted"> (Easy) </span></h2>
          <p class="lead">Easy was first founded in 2009. Easy was a company that owned several taxis. Until a few years passed, Easy changed the way it served into a car rental company. At first, they only had 2 or three cars to rent. but over time, until now easy has had dozens of rental cars and boats available.</p>
        </div>
        <div class="col-md-5">
          <img src="media/desc 1.png" class="rounded-circle" alt="img" width="90%" height="100%" border-radius="50%">        
  
        </div>
      </div>
  
      <!-- Description 2 -->
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">With a new Motto...<span class="text-muted">Drive it, Rent it</span></h2>
          <p class="lead">This motto provides a way for people who need transportation for their needs. We even provide wedding cars to complete the very special moments. Also, we also provide vehicles such as buses for those who want to a vacation with family. Drive it, rent it is the motto that we have promised so that people can enjoy with our vehicles.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="media/desc 2.png" alt="img" width="90%" height="90%" border-radius="50%">        
  
        </div>
      </div>
  
      <!-- Description 3 -->
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Our Service</span></h2>
          <p class="lead">We will make sure your vehicle ready for your own needs. We'll prepare and give our best service to help you enjoy your vacations also dedicate our own services first for the costumers.
            Passenger satisfaction is our priority and we promise it. Before the vehicle is rented, we make sure the vehicle will get a full service first so that there are no unwanted things. Our service team will not approve if the vehicle has not been fully checked. In fact, if it is still within our area, if the vehicle that has been rented breaks down or something else, we will bring in our service team.
          </p>
        </div>
        <div class="col-md-5">
          <img src="media/desc 3.png" alt="img" width="90%" height="90%" border-radius="50%">        
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
</div>
@endsection