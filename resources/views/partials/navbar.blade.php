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
            <!-- <a class="dropdown-item font-weight-bold" href="#"> Hi {{ auth()->user()->name }} </a> -->
            <a class="dropdown-item " href="/games/create"> Create a Course </a>
            <a class="dropdown-item " href="/quizzes/create"> Create a Quiz </a>
            <!-- <a class="dropdown-item" href="/reviews"> Review List </a> -->
            <!-- <a class="dropdown-item" href="#"> Registered Student </a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout"> Log Out </a>
          @else
            <a class="dropdown-item" href="/register"> Sign Up </a>
          @endif  
          
        </div>
      </li>

    </ul>


    <!-- Button untuk span ketika layar kecil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse w-100 ms-auto" id="collapsingNavbar3">
      
      
      <ul class="nav navbar-nav ms-auto w-50 justify-content-end">
        <!-- Navbar Item -->
        <li class="nav-item">
          <a class="nav-link" href="/login"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/games"> Course </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/quizzes"> Quiz </a>
        </li>
      </ul>

      @if( auth()->check() )
      <div class="profile-picture w-50 d-flex justify-content-end align-items-center">
        <a href="#">
          <img src="{{ asset('image/icon/blank-profile-picture.png') }}">
          {{ auth()->user()->name }}
        </a>
      </div>
      @else
        <ul class="nav navbar-nav ms-auto w-50 justify-content-end">
          <!-- SIGN UP SECTION -->
          <li class="nav-item">
            <button type="button" class="btn btn-primary sign-up-btn" data-toggle="modal" data-target="#signupmodal">
              Sign Up
            </button>

            <!-- Modal -->
            <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Sign Up for New User </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form method="POST" action="/register">
                      {{ csrf_field() }}
                      
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" name="name">
                      </div>

                      <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" name="email">
                      </div>

                      <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">

                      </div>

                    
                      <div class="form-group">
                          <label for="password_confirmation">Password Confirmation:</label>
                          <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                      </div>

                      <!-- <div class="form-group submit-btn">
                        <button style="cursor:pointer;" type="submit" class="btn btn-primary submit-reg">Submit</button>
                      </div> -->

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-dismiss="modal"> Cancel </button>
                        <button type="submit" class="btn btn-primary sign-up-btn submit-btn" style="font-weight: normal; cursor:pointer;"> Sign Up </button>
                      </div>
                      @include('partials.formerrors')
                      
                   </form>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- LOGIN SECTION -->
          <li class="nav-item">
            <button type="button" class="btn btn-primary login-btn" data-toggle="modal" data-target="#loginModal">
              Login
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Login </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form method="POST" action="/login" class="signin-form justify-content-center">
                      {{ csrf_field() }}

                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" required>
                      </div>
                        
                      <div class="form-group">
                        <input id="password-field" type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      </div>

                      <div class="form-group">
                        <div class="w-100 forgot-password-section text-right">
                          <a href="#" style="color: #898989;"> Forgot Password </a>
                        </div>
                      </div>

                      <div class="form-group text-center login-button w-70">
                        <button type="submit" class="btn submit-login-button form-control">
                          <span class="login-button-text"> Login </span>
                        </button>
                      </div>
                      
                      @include('partials.formerrors')
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      @endif

    </div>
  </div>
</nav>

<script type="text/javascript">
  $(document).ready(function () {
    var url = window.location;
    $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
    $('ul.nav a').filter(function() {
      return this.href == url;
    }).parent().addClass('active');
  });
</script>