@extends('layouts.template.main')

@section('title', 'Home')

@section('container')
<div class="c1">
      <div class="container">
        <div style="height: 300px" class="row">
          <div class="col-5">
            <video src="media/videohome.mp4" type="video/mp4" style="margin: 0px; width: 100%; height: 100%" playsinline autoplay muted loop controls></video>
          </div>
          <div class="col ps-5">
            <img src="media/home.png" alt="mobil" width="100%" height="100%" />
          </div>
        </div>
      </div>
    </div>

    <!-- Content Kedua -->
    <div class="c2">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5 class="card-title"><b>City Car</b></h5>
            <p class="card-text" style="font-size: 12px">
              A compact, efficient vehicle that is smaller than any other class of car<br />
              <a href="{{route("listrental.index")}}">Rent Now!</a>
            </p>
            <img src="media/mobil sedan.png" alt="1" width="100%" />
          </div>
          <div class="col">
            <h5 class="card-title"><b>Bus</b></h5>
            <p class="card-text" style="font-size: 12px">
              Transportation for employee shuttle services, or for long distance trips<br />
              <a href="{{route("listrental.index")}}">Rent Now!</a>
            </p>
            <img src="media/bus.png" alt="1" width="100%" />
          </div>
          <div class="col">
            <h5 class="card-title"><b>Mini Bus</b></h5>
            <p class="card-text" style="font-size: 12px">
              A small bus, especially those used as transportation for small groups<br />
              <a href="{{route("listrental.index")}}">Rent Now!</a>
            </p>
            <img src="media/mini bus.png" alt="1" width="100%" />
          </div>
          <div class="col">
            <h5 class="card-title"><b>Wedding Car</b></h5>
            <p class="card-text" style="font-size: 12px">
              Find your dream car to make your wedding an unforgettable experience<br />
              <a href="{{route("listrental.index")}}">Rent Now!</a>
            </p>
            <img src="media/wedding car.png" alt="1" width="100%" />
          </div>
          <div class="col">
            <h5 class="card-title"><b>Boat</b></h5>
            <p class="card-text" style="font-size: 12px">
              Enjoy sailing with your own pace with a boat that is perfect for you.<br />
              <a href="{{route("listrental.index")}}">Rent Now!</a>
            </p>
            <img src="media/boat.png" alt="1" width="100%" />
          </div>
        </div>
      </div>
    </div>

    <!-- Content Ketiga -->
    <div class="c3">
      <div class="container">
        <div class="row pb-2">
          <div class="col"><h1>Vacation Your Way</h1></div>
        </div>
        <div class="row">
          <div class="col">
            <a href="/info"><img src="media/petfriendly.png" alt="pet friendly" width="12%" /></a>
            <a href="/info"><img src="media/beach.png" alt="beach" width="12%" /></a>
            <a href="/info"><img src="media/lastminute.png" alt="last minute" width="12%" /></a>
            <a href="/info"><img src="media/luxury.png" alt="luxury" width="12%" /></a>
            <a href="/info"><img src="media/romance.png" alt="romance" width="12%" /></a>
            <a href="/info"><img src="media/allinclusive.png" alt="all inclusive" width="12%" /></a>
            <a href="/info"><img src="media/food.png" alt="food" width="12%" /></a>
            <a href="/info"><img src="media/staycation.png" alt="staycations" width="12%" /></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Keempat -->
    <div class="c4">
      <div class="container">
        <div class="row pb-3">
          <div class="col">
            <h1>What's New?</h1>
            <small>Find all the latest and interesting news here!</small>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card">
              <img src="media/news 1.JPG" class="card-img-top" alt="1" height="150px" />
              <div class="card-body" style="height: 200px">
                <p class="card-title" style="font-size: 14px"><b>Ford Fiesta production could be paused until April 25</b></p>
                <p class="card-text" style="font-size: 12px; text-align: justify">
                  Production of the Ford Fiesta at the automaker's factory in Cologne, Germany, could be halted until April 25. Workers... <br />
                  <a href="/info">Read More</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="media/news 2.jpg" class="card-img-top" alt="1" height="150px" />
              <div class="card-body" style="height: 200px">
                <p class="card-title" style="font-size: 14px"><b>2023 Honda HR-V Shows Off Its New Look</b></p>
                <p class="card-text" style="font-size: 12px; text-align: justify">
                  Honda's smallest SUV is entering its second generation, and there are some notable changes in store for the new 2023 HR-V. These are the first...<br />
                  <a href="/info">Read More</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="media/news 3.JPG" class="card-img-top" alt="1" height="150px" />
              <div class="card-body" style="height: 200px">
                <p class="card-title" style="font-size: 14px"><b>Five Things to Know if You’re Road-Tripping This Summer</b></p>
                <p class="card-text" style="font-size: 12px; text-align: justify">
                  Rising vaccination rates and pent-up demand are expected to speed up travel’s rebound this summer. In addition to...<br />
                  <a href="/info">Read More</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="media/news 4.jpeg" class="card-img-top" alt="1" height="150px" />
              <div class="card-body" style="height: 200px">
                <p class="card-title" style="font-size: 14px"><b>5 Reasons Why You Need to Get A Wedding Car for Your Big Day</b></p>
                <p class="card-text" style="font-size: 12px; text-align: justify">
                  After you’ve finally given your big “Yes!” to a proposal, it’s now time to give your big “I do.” As exciting as this may be, you...<br />
                  <a href="/info">Read More</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="media/news 5.JPG" class="card-img-top" alt="1" height="150px" />
              <div class="card-body" style="height: 200px">
                <p class="card-title" style="font-size: 14px"><b>The Best RV Campgrounds in the U.S. for Your Next Trip</b></p>
                <p class="card-text" style="font-size: 12px; text-align: justify">
                  In this golden age of RV travel, with ownership at an all-time high and myriad new ways to book a getaway, exploring RV...<br />
                  <a href="/info">Read More</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
