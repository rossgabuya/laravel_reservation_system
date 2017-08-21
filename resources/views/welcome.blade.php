@extends('layouts.master')

@section('title','Home')

@section('content')
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ asset('src/img/rooms/relax.jpg') }}" alt="alone">
          <div class="container">
            <div class="carousel-caption">
              <h1>Find Solitude</h1>
              <p>Relax yourself and take some time for reflection. </p>
              <p><a class="btn btn-lg btn-ghost" href="#" role="button">Learn More &raquo;</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src=" {{ asset('src/img/rooms/couples.jpeg')}} " alt="couple">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enjoy your moments</h1>
              <p>Spend quality time with your special someone.</p>
              <p><a class="btn btn-lg btn-ghost" href="#" role="button">Reserve Now &raquo;</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ asset('src/img/rooms/familiesfun.jpg') }}" alt="family">
          <div class="container">
            <div class="carousel-caption">
              <h1>Have a vacation</h1>
              <p>Great bonding with family members.</p>
              <p><a class="btn btn-lg btn-ghost" href="#" role="button">Learn More &raquo;</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <i class="fa fa-bed" style="font-size: 7em;"></i>
          <h2>Comfortable <br>Rooms</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <i class="fa fa-star" style="font-size: 7em;"></i>
          <h2>Outstanding <br>Service</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <i class="fa fa-thumbs-o-up" style="font-size: 7em;"></i>
          <h2>Satisfaction <br>Guaranteed</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
</div>
<div class="featurette alternate-color">
    <div class="container marketing">
        <div class="col-md-7">
          <h2 class="featurette-heading">High Quality Amenities</h2>
          <p class="lead"> Our various amenities include free parking, fitness center, free wifi  and many more for you to enjoy. </p>
          <a href="#" class="btn btn-ghost btn-lg">Learn more » </a>
        </div>
        <div class="col-md-5">
          <div class="img-default">
            <i class="fa fa-coffee" style="font-size: 8em;margin: .025em;"></i>
            <i class="fa fa-film" style="font-size: 8em;margin: .025em;"></i>
            <i class="fa fa-wifi" style="font-size: 8em;margin: .025em;"></i>
            <i class="fa fa-cab" style="font-size: 8em;margin: .025em;"></i>
          </div>
        </div>
    </div>
</div>

<div class="featurette">
    <div class="container marketing">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Great Deals and Offers</h2>
          <p class="lead"> Have a dream vacation you always wanted at an affordable price.</p>
          <a href="#" class="btn btn-primary btn-lg">Learn more » </a>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <div class="img-default">
            <i class="fa fa-money" style="font-size: 8em;margin: .025em;"></i>
            <i class="fa fa-tags" style="font-size: 8em;margin: .025em;"></i>
            <i class="fa fa-shopping-cart" style="font-size: 8em;margin: .025em;"></i>
            <i class="fa fa-credit-card" style="font-size: 8em;margin: .025em;"></i>
          </div>
        </div>
    </div>
</div>
<div class="featurette alternate-color">
    <div class="container marketing">
    <h3 class="text-center" style="padding-top: 2em;"> Reserve now and get amazing freebies and discounts !</h3>
        <div class="col-md-offset-3 col-md-6" style="padding: 1em 5em 5em 5em;text-align:center;">
           <button class="btn btn-lg btn-ghost"> Get Started </button>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button class="btn btn-lg btn-default"> Learn More </button>
        </div>
    </div>
</div>
@endsection

 