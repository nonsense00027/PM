@extends('layouts.layouts')
    @section('sidebar')
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

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
        <a class="nav-link" href="/charts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Accountability</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/tables">
          <i class="fas fa-fw fa-table "></i>
          <span class="text-gray-100">Inventory</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="/register">
          <i class="fas fa-fw fa-table text-gray-100"></i>
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
    @endsection
              @section('tabcontent')
                <label for="name">Department Name</label>
                <input class="form-control bg-light small" placeholder="Enter the department name here..." p id="name" type="text"><br>

                <label for="name">Department Code</label>
                <input class="form-control bg-light small" placeholder="Enter the department code here..." p id="name" type="text"><br>

                <label for="name">Password</label>
                <input class="form-control bg-light small" placeholder="Enter the department password here..." p id="name" type="password"><br>

                <label for="name">Re-type password</label>
                <input class="form-control bg-light small" placeholder="Re-type the department password here..." p id="name" type="password"><br>

                <button type="button" class="btn btn-outline-success btn-lg btn-block">Register</button>
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
