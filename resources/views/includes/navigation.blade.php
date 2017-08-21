<nav class="navbar navbar-inverse navbar-static-top" style="margin-top: 0">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Hotel Reservation</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-right">

                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/features') }}">Features</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/customer/login') }}">Login</a></li>
                <li><a href="{{ url('/customer/signup') }}">Sign Up</a></li>
              </ul>
            </div>
          </div>
        </nav>