<!-- ORIGINAL NAVBAR FOR GAMES TEMPLATE -->
<!-- <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"> We Like Game </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/games"> List Games </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/reviews">List Reviews</a>
      </li>
      
      @if( auth()->check() )
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="#"> Hi {{ auth()->user()->name }} </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/games/create">Submit Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Log Out</a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
      @endif

    </ul>
  </div>
</nav> -->

<nav class="navbar transparent navbar-inverse navbar-dark bg-dark navbar-expand-md bg-faded">
  <div class="container">
    <!-- Left Item (Brand Logo) -->
    <a href="#" class="navbar-brand d-flex w-20 ms-auto">
      <!-- <img src="{{ asset('image/logo.png') }}" height="28" alt="CoolBrand"> -->
      Solar System
    </a>

    <!-- Browse button -->
    <ul class="nav navbar-nav ms-auto">
      <!-- Dropdown item menu in navbar -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle browse-right" href="dropdown-menu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          @if( auth()->check() )
            <a class="dropdown-item font-weight-bold" href="#"> Hi {{ auth()->user()->name }} </a>
            <a class="dropdown-item " href="/games/create"> Create a Course </a>
            <a class="dropdown-item " href="/quizzes/create"> Create a Quiz </a>
            <a class="dropdown-item" href="/reviews"> Review List </a>
            <a class="dropdown-item" href="#"> Registered Student </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout"> Log Out </a>
          @else
            <a class="dropdown-item" href="/register"> Register </a>
          @endif  
          
        </div>
      </li>

    </ul>


    <!-- Button untuk span ketika layar kecil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse w-100 ms-auto" id="collapsingNavbar3">
      
      <!-- Centered Search Bar -->
      <ul class="navbar-nav w-100 justify-content-start">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-2 justify-content-end search-box">
            <input class="form-control mr-sm-5 search-box-specified" id="searchbox" type="search" placeholder="Search" aria-label="Search">
          </form>
        </li>
      </ul>
      
      
      <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
        <!-- Notificaion Icon -->
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="fa-solid fa-bell"></i>
          </a>
        </li>

        <!-- Navbar Item -->
        <li class="nav-item active">
          <a class="nav-link" href="/login"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/games"> Course </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/quizzes"> Quiz </a>
        </li>
      </ul>
    </div>
  </div>
</nav>