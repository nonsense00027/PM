@extends('layouts.layouts')
    @section('sidebar')
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
        <div class="sidebar-brand-text mx-3">FTC Group of Companies</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <!-- <a class="nav-link" href="index.html"> -->
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <div class="text-center">
          <br><br><br><br>
            <span class="text-center text-gray-100 text-lg small"><b>IT Deptartment</b></span>
          <br><br><br><br>
          </div>
          <!-- </a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/accountabilities">
          <i class="fas fa-fw fa-tachometer-alt text-area-100"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="/inventories">
          <i class="fas fa-fw fa-table "></i>
          <span class="text-gray-100">Inventory</span></a>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block"> -->

      <li class="nav-item">
        <a class="nav-link" href="/register">
          <i class="fas fa-fw fa-user text-gray-100"></i>
          <span>Register</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    @endsection
    @section('heading', 'Register')
    @section('tableheading', 'Register new Department')
    @section('taboption')
        <li class="nav-item">
            <a href="#add" class="nav-link active" role="tab" data-toggle="tab">Add</a>
        </li>

        <li class="nav-item">
            <a href="#pass" class="nav-link" role="tab" data-toggle="tab">Password Management</a>
        </li>
    @endsection
    
    @section('tabcontent')
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="add">
                <form method="POST" action="/register">
                    <div class="form-row">
                      <div class="col-md-9 mb-3">
                          @csrf
                          <label for="name">Department Name</label>
                          <input class="form-control bg-light small @error('name') is-invalid @enderror" placeholder="Sample" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus p id="name" type="text">
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        
                      <div class="col-md-3 mb-3">
                        <label for="name">Department Abbreviation</label>
                        <input class="form-control bg-light small @error('name') is-invalid @enderror" placeholder="SMPL" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus p id="name" type="text">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                      
                      <label for="email">Department Email</label>
                      <input class="form-control bg-light small @error('email') is-invalid @enderror" name="email" placeholder="admin@dept.com" value="{{ old('email') }}" required autocomplete="email" p id="email" type="email"><br>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <label for="password">Password</label>
                      <input class="form-control bg-light small @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" p id="password" type="password"><br>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <label for="password-confirm">Re-type password</label>
                      <input id="password-confirm" type="password" class="form-control bg-light" name="password_confirmation" required autocomplete="new-password"><br>

                      <label for="password-confirm">Select User Role</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select name="role" class="custom-select" id="inputGroupSelect01">
                          <option selected>Role list...</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Register</button>
                  </form>
      </div>

      <div role="tabpanel" class="tab-pane active" id="pass">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Departments</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <label for="name">Old Password</label>
          <input class="form-control bg-light" name="name" value="" required autocomplete="name" autofocus p id="" type="password">
          <span class="invalid-feedback" role="alert">
            <strong></strong>
        </span><br>

        <label for="name">New Password</label>
          <input class="form-control bg-light" name="name" value="" required autocomplete="name" autofocus p id="" type="password">
          <span class="invalid-feedback" role="alert">
            <strong></strong>
        </span><br>

        <label for="name">Re-type New Password</label>
          <input class="form-control bg-light" name="name" value="" required autocomplete="name" autofocus p id="" type="password">
          <span class="invalid-feedback" role="alert">
            <strong></strong>
        </span><br>

        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
      </div>
    </div>
    
    @endsection


@section('script')
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
@endsection
