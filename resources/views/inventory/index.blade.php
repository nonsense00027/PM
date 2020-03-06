@extends('layouts.layouts')
@section('sidebar')
    <!-- Sidebar -->
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
            <span class="text-center text-gray-100 text-lg small"><b>{{ Auth::user()->name}} Deptartment</b></span>
          <br><br><br><br>
          </div>
          <!-- </a> -->
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- <div class="sidebar-brand-text mx-3">IT Dept.</div> -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="/accountabilities">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Accountability</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/inventories">
          <i class="fas fa-fw fa-table text-gray-100"></i>
          <span class="text-gray-100">Inventory</span></a>
      </li>

      @if(Auth::user()->role == 'Admin')
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="/register">
        <i class="fa fa-user" aria-hidden="true"></i>
          <span>Register</span></a>
      </li>
      @endif

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- End of Sidebar -->
@endsection
@section('heading', 'Inventory')
@section('tableheading', 'Employees Inventory')
@section('taboption')
        <li class="nav-item">
            <a href="#list" class="nav-link active" role="tab" data-toggle="tab">List</a>
        </li>

        <li class="nav-item">
            <a href="#add" class="nav-link" role="tab" data-toggle="tab">Add</a>
        </li>
@endsection
            @section('tabcontent')
            <div class="tab-content">
                <!-- Tab 1 content list -->
                <div  role="tabpanel" class="tab-pane active" id="list">
                  <div class="table-responsive">
                      <table class="table table-bordered table-hover nowrap" id="myDataTable" width="100%" cellspacing="0">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th>Motherboard</th>
                            <th>CPU</th>
                            <th>HDD</th>
                            <th>Memory</th>
                            <th>Monitor</th>
                            <th>Case</th>
                            <th>Keyboard</th>
                            <th>Mouse</th>
                            <th>Video Card</th>
                            <th>Power Supply</th>
                            <th>Printer</th>
                            <th>Telephone</th>
                          </tr>
                        </thead>
                        <tfoot class="bg-primary text-white">
                          <tr>
                            <th>Motherboard</th>
                            <th>CPU</th>
                            <th>HDD</th>
                            <th>Memory</th>
                            <th>Monitor</th>
                            <th>Case</th>
                            <th>Keyboard</th>
                            <th>Mouse</th>
                            <th>Video Card</th>
                            <th>Power Supply</th>
                            <th>Printer</th>
                            <th>Telephone</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>Heroku</td>
                            <td>123admin</td>
                            <td>192.168.1.0</td>
                            <td>NONE</td>
                            <td>NONE</td>
                            <td>6985524</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              <!-- End of Tab 1 -->
              <!-- Start of Tab 2 -->
                <div role="tabpanel" class="tab-pane" id="add">
                  <form>
                      <div class="col-md-4 mb-3">
                        <label>Motherboard</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>CPU</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Hard Disk Drive</label>
                        <input type="text" class="form-control"  required>
                      </div>
                                   
                      <div class="col-md-4 mb-3">
                        <label>Memory</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Monitor</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Case</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Keyboard</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Mouse</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Video Card</label>
                        <input type="text" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Power Supply</label>
                        <input type="text" class="form-control" required>
                      </div>

                    <div class="col-md-4 mb-3">
                        <label>Printer</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Telephone</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <br>
                    <button class="btn btn-block btn-outline-primary" id="submitForm" type="submit">Submit form</button>
                  </form>
                </div>
                <!-- end of tab 2 -->
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

  <!-- data tables script -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#myDataTable').DataTable();
    } );
  </script>
@endsection
