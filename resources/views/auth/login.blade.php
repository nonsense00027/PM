<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FTC — Login</title>

  <link rel="icon" type="image/png" href="media/logo-favicon.png">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-primary">
  <br><br><br><br><br><br>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block" src="resources/images/login.jpg">
                <img src="media/login-emp-img.jpg" width="500px">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                  </div><br>
                  <form method="POST" action="{{ route('login') }}">
                  @csrf
                    <div class="form-group">

<!-- DROPDOWN STARTS HERE -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Departments</label>
                      </div>

                      <!-- <select class="custom-select" id="inputGroupSelect01"> -->
                      <select name="email" id="email" class="custom-select form-control @error('email') is-invalid @enderror" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        @foreach($users as $user)
                        <option value="{{$user->email}}">{{$user->name}}</option>
                        @endforeach
                      </select>
                      @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
<!-- DROPDOWN ENDS HERE -->

                      <!-- <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                        <!-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror -->
                    <!-- </div> -->

                    <div class="form-group">
                      <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    
                    <!--p
                    standard way to connect your route to your page
                    <a href="{{url('dashboard')}}" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->

                    <!-- Easy way to connect to route -->
                    <!-- <a href="/dashboard" class="btn btn-user btn-block bg-primary text-gray-100">
                      Login
                    </a> -->
                                <button type="submit" class="btn btn-user btn-block bg-primary text-gray-100">
                                    {{ __('Login') }}
                                </button>
                  </form>
                  <!-- <hr> -->
                  <div class="text-center">
                    <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                  </div>
                  <div class="text-center">
                    <!-- <a class="small" href="register.html">Create an Account!</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
