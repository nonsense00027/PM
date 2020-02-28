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

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="/accountabilities">
          <i class="fas fa-fw fa-chart-area text-gray-100"></i>
          <span class="text-gray-100">Accountability</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/inventories">
          <i class="fas fa-fw fa-table"></i>
          <span>Inventory</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="/register">
          <i class="fas fa-fw fa-user"></i>
          <span>Register</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
@endsection
@section('heading', 'Accountability')
@section('tableheading', 'Employees Accountability')
@section('taboption')
        <li class="nav-item">
            <a href="#list" class="nav-link active" role="tab" data-toggle="tab">List</a>
        </li>

        <li class="nav-item">
            <a href="#add" class="nav-link" role="tab" data-toggle="tab">Add</a>
        </li>
@endsection
@section('tabcontent')

        <!-- Tab content list -->
        <div class="tab-content">

          <!-- Tab 1 is the list of the employees -->
          <div role="tabpanel" class="tab-pane active" id="list">
            <div class="table-responsive">
              <table class="table table-bordered table-hover nowrap" id="myDataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Computer Name</th>
                    <th>Location</th>
                    <th>Local User</th>
                    <th>Local Password</th>
                    <th>Domain Account</th>
                    <th>Domain Password</th>
                    <th>IP Address</th>
                    <th>MAC Address</th>
                    <th>Email</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Computer Name</th>
                    <th>Location</th>
                    <th>Local User</th>
                    <th>Local Password</th>
                    <th>Domain Account</th>
                    <th>Domain Password</th>
                    <th>IP Address</th>
                    <th>MAC Address</th>
                    <th>Email</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                @foreach ($accountabilities as $accountability)
                  <tr>
                    <td>{{$accountability->id}}</td>
                    <td>{{$accountability->name}}</td>
                    <td>{{$accountability->designation}}</td>
                    <td>{{$accountability->computer_name}}</td>
                    <td>{{$accountability->location}}</td>
                    <td>{{$accountability->local_user}}</td>
                    <td>{{$accountability->local_password}}</td>
                    <td>{{$accountability->domain_acc}}</td>
                    <td>{{$accountability->domain_pass}}</td>
                    <td>{{$accountability->ip_address}}</td>
                    <td>{{$accountability->mac_address}}</td>
                    <td>{{$accountability->email}}</td>
                    <!-- <td><a href="/accountabilities/{{$accountability->id}}">Hi</a></td> -->
                    <!-- <td><a href="#edit" class="nav-link" role="tab" data-toggle="tab">Edit</a></td> -->
                    <td>
                      <center>
                      <!-- OVER  -->
                      <a href="#" class="edit"  data-toggle="tooltip" title="Edit user information" data-placement="left" >
                        <i class="fas fa-pen"title="Edit user information"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- end of tab 1 -->

          <!-- tab 2 is the form to add a new employee -->
          <div role="tabpanel" class="tab-pane" id="add">
          <!-- Form starts here -->
          <form action="/accountabilities" method="post">
              @csrf
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Full Name here..." required>
                </div>

                <div class="col-md-4 mb-3">
                  <label>Designation</label>
                  <input type="text" class="form-control" name="designation" value="{{old('designation')}}" placeholder="Designation here..." required>
                </div>

                <div class="col-md-4 mb-3">
                  <label>Computer Name</label>
                  <input type="text" class="form-control" name="computer_name" value="{{old('computer_name')}}" placeholder="Computer Name here..." required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-5 mb-3">
                  <label>Location</label>
                  <input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="Location here..." required>
                </div>

                <div class="col-md-3 mb-3">
                  <label>Local User</label>
                  <input type="text" class="form-control" name="local_user" value="{{old('local_user')}}" placeholder="Local User here..." required>
                </div>

                <div class="col-md-4 mb-3">
                  <label>Local Password</label>
                  <input type="text" class="form-control" name="local_password" value="{{old('local_password')}}" placeholder="Local Password here..." required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label>Domain Account</label>
                  <input type="text" class="form-control" name="domain_acc" value="{{old('domain_acc')}}" placeholder="Domain Account here..." required>
                </div>

                <div class="col-md-3 mb-3">
                  <label>Domain Password</label>
                  <input type="text" class="form-control" name="domain_pass" value="{{old('domain_pass')}}" placeholder="Domain Password here..." required>
                </div>

                <div class="col-md-3 mb-3">
                  <label>IP Address</label>
                  <input type="text" class="form-control" name="ip_address" value="{{old('ip_address')}}" placeholder="IP Address here..." required>
                </div>

                <div class="col-md-3 mb-3">
                  <label>MAC Address</label>
                  <input type="text" class="form-control" name="mac_address" value="{{old('mac_address')}}" placeholder="MAC Address here..." required>
                </div>
              </div>

              <div class="form-row">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email here..." value="{{old('email')}}"  required>
              </div>
              <br>
              <button class="btn btn-block btn-outline-primary" type="submit">Submit form</button>
            </form>
          <!-- Form ends here -->
          </div>
          <!-- End of Tab 2 -->         
        </div>
@endsection

@section('modal')




<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-gray-100" id="exampleModalLabel">Modify user information</h5>
        <button type="button" class="close text-gray-100" data-dismiss="modal" aria-label="Close">
          <span  aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editForm" action="/accountabilities" method="POST">
      @csrf
      @method('PATCH')
      <div class="modal-body">
            <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label>Full Name</label>
                        <input type="text" name="name" id="editname" class="form-control bg-outline-success" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Designation</label>
                        <input type="text" name="designation" id="editdesignation" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Computer Name</label>
                        <input type="text" name="computer_name" id="editcomputer_name" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-5 mb-3">
                        <label>Location</label>
                        <input type="text" name="location" id="editlocation" class="form-control" required>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label>Local User</label>
                        <input type="text" name="local_user" id="editlocal_user" class="form-control" required>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label>Local Password</label>
                        <input type="text" name="local_password" id="editlocal_password" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label>Domain Account</label>
                        <input type="text" name="domain_acc" id="editdomain_acc" class="form-control" required>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label>Domain Password</label>
                        <input type="text" name="domain_pass" id="editdomain_pass" class="form-control" required>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label>IP Address</label>
                        <input type="text" name="ip_address" id="editip_address" class="form-control" required>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label>MAC Address</label>
                        <input type="text" name="mac_address" id="editmac_address" class="form-control" required>
                      </div>
                    </div>

                    <div class="form-row">
                        <label>Email</label>
                        <input type="text" name="email" id="editemail" class="form-control" required>
                    </div>

                    <!-- <div class="form-row">
                        <label>Remarks</label>
                        <input type="textarea" name="remarks" id="remark" class="form-control" required>
                    </div> -->
        </div>
      
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
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

  <!-- Data Table scripts-->
  <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#myDataTable').DataTable();
    } );
  </script>

<script type="text/javascript">
    $(document).ready(function(){
        var table = $('#myDataTable').DataTable();
        table.on('click', '.edit', function(){
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);
            $('#editname').val(data[1]);
            $('#editdesignation').val(data[2]);
            $('#editcomputer_name').val(data[3]);
            $('#editlocation').val(data[4]);
            $('#editlocal_user').val(data[5]);
            $('#editlocal_password').val(data[6]);
            $('#editdomain_acc').val(data[7]);
            $('#editdomain_pass').val(data[8]);
            $('#editip_address').val(data[9]);
            $('#editmac_address').val(data[10]);
            $('#editemail').val(data[11]);

            $('#editForm').attr('action', '/accountabilities/'+data[0]);
            $('#exampleModal').modal('show');
        });
    });

</script>
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection