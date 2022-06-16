 <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="media/logo1.png" alt="logo1" width="100px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/aboutus">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rental </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{route("listrental.index")}}">Car</a></li>
                <li><a class="dropdown-item" href="{{route("listrental.index")}}">Mini Bus</a></li>
                <li><a class="dropdown-item" href="{{route("listrental.index")}}">Bus</a></li>
                <li><a class="dropdown-item" href="{{route("listrental.index")}}">Wedding Car</a></li>
                <li><a class="dropdown-item" href="{{route("listrental.index")}}">Boat</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Info</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/info">Destination</a></li>
                <li><a class="dropdown-item" href="/info">Restaurant</a></li>
                <li><a class="dropdown-item" href="/info">Hotel</a></li>
                <li><a class="dropdown-item" href="/info">Article</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>