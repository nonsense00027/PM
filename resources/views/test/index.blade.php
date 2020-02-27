@extends('layouts.layouts')
@section('sidebar')
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
          <div class="text-center">
          <br><br><br><br>
            <span class="text-center text-gray-100 text-lg small"><b>IT Deptartment</b></span>
          <br><br><br><br>
          </div>
          <!-- </a> -->
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="/charts">
          <i class="fas fa-fw fa-chart-area text-gray-100"></i>
          <span class="text-gray-100">Accountability</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/tables">
          <i class="fas fa-fw fa-table"></i>
          <span>Inventory</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="/register">
          <i class="fas fa-fw fa-table"></i>
          <span>Register</span></a>
      </li>

    
    
@endsection