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
            <span class="text-center text-gray-100 text-lg small"><b>{{ Auth::user()->name}} Deptartment</b></span>
          <br><br><br><br>
          </div>
          <!-- </a> -->
      </li>

      <!-- Divider -->


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="/accountabilities">
          <i class="fas fa-fw fa-tachometer-alt text-gray-100"></i>
          <span class="text-gray-100">Dashboard</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="/inventories">
          <i class="fas fa-fw fa-table"></i>
          <span>Inventory</span></a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link" href="/register">
          <i class="fas fa-fw fa-user"></i>
          <span>Account Management</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
@endsection
@section('heading', 'Dashboard')
@section('tableheading', 'Employees Accountability')
@section('taboption')
        <li class="nav-item">
            <a href="#list" class="nav-link active" role="tab" data-toggle="tab">List</a>
        </li>
        @if(Auth::user()->name == 'Human Resource')
        <li class="nav-item">
            <a href="#add" class="nav-link" role="tab" data-toggle="tab">Add</a>
        </li>
        @endif
@endsection
@section('tabcontent')

        <!-- Tab content list -->
        <div class="tab-content">

          <!-- Tab 1 is the list of the employees -->
          <div role="tabpanel" class="tab-pane active" id="list">
            <div class="table-responsive">
              <table class="table table-bordered table-hover nowrap" id="myDataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                  <tr>
                    <th class="col-0">ID</th>
                    <th class="col-12">Name</th>
                    <th>Company</th>
                    <th  class="col-3">Location</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($accountabilities as $accountability)
                  @if($accountability->status == 'false')
                  <tr>
                  @elseif($accountability->status == 'true')
                  <tr>
                  @endif
                    <td>{{$accountability->id}}</td>
                    <td>{{$accountability->name}}</td>
                    <td>{{$accountability->company}}</td>
                    <td>{{$accountability->location}}</td>
                    <td>
                      <!-- EDIT FUNCTION  -->
                      <a href="#" data-target="#exampleModal-{{$accountability->id}}" class="edit mx-3" data-toggle="modal" title="Edit user information" data-placement="left" >
                        <i class="fas fa-pen" title="Edit user information"></i>
                      </a>
                      <!-- EDIT MODAL -->
                      @if(Auth::user()->name == 'HR')
                        @include('layouts.edit.hr')
                      @elseif(Auth::user()->name == 'Information Technology')
                        @include('layouts.edit.it')
                      @endif
                      <!-- INVENTORY FUNCTION -->

                      <!-- <a href="#" data-target="#inventoryModal-{{$accountability->id}}" class="edit mx-3" data-toggle="modal" title="User Accountability" data-placement="left" >
                        <i class="fas fa-th-list" title="User Accountability"></i>
                      </a> -->

                      <a data-inventory_id="{{$accountability->id}}" href="#" class="edit mx-3 editInventory" title="User Accountability" data-placement="left" >
                        <i class="fas fa-th-list" title="User Accountability"></i>
                      </a>
                      <!-- INVENTORY MODAL -->
                      @if(Auth::user()->name == 'Information Technology')
                        @include('layouts.inventory.it')
                      @else
                        @include('layouts.inventory.other')
                      @endif
                      <!-- END OF INVENTORY MODAL -->

                      <!-- LOGS FUNCTION -->
                      <!-- <a href="#" data-target="#sampleModal" class="log mx-3"  data-toggle="modal" title="View logs" >
                        <i class="fas fa-info" title="View logs"></i>
                      </a> -->
                      <a href="#"  data-target="#sampleModal-{{$accountability->id}}" class="log mx-3"  data-toggle="modal" title="View logs" >
                        <i class="fas fa-info" title="View logs"></i>
                      </a>
                      <!-- LOGS MODAL -->
                      <div class="modal fade" id="sampleModal-{{$accountability->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <h5 class="modal-title text-gray-100" id="exampleModalLabel">{{$accountability->name}}'s logs</h5>
                              <button type="button" class="close text-gray-100" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <table class="table table-bordered table-hover nowrap" id="myDataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                  <tr>
                                    <th>Id</th>
                                    <th>Remarks</th>
                                    <th>Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($logs as $log)
                                    @if($log->id == $accountability->id)
                                    <tr>
                                      <td>{{$log->id}}</td>
                                      <td>{{$log->remark}}</td>
                                      <td>{{$log->created_at}}</td>
                                    </tr>
                                    @endif
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- WORKING -->
                      <!-- <a href="#" onclick="onClickModalRemark('{{$accountability->id}}')" data-target="#sampleModal" class="log mx-3"  data-toggle="modal" title="View logs" >
                        <i class="fas fa-info" title="View logs"></i>
                      </a> -->

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
              <form action="/accountabilities" method="POST">
                @csrf
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Full Name here..." required>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label>Company</label>
                    <input type="text" class="form-control" name="company" value="{{old('company')}}" placeholder="Company here..." required>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation" value="{{old('designation')}}" placeholder="Designation here..." required>
                  </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label>Location</label>
                    <input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="Location here..." required>
                  </div>

                    <div class="col-md-6 mb-3">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email here..." value="{{old('email')}}"  required>
                    </div>
                </div>

                <div class="form-row">
                    <input type="hidden" class="form-control" name="status" value="false">
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

<!-- WORKING Sample Modal -->
<!-- <div class="modal fade" id="sampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover nowrap" id="myDataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <td>Id</td>
              <td>Remarks</td>
              <td>Date</td>
            </tr>
          </thead>
          <tbody id="remarktable">

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- INVENTORY MODAL -->
<div class="modal fade" id="editInventoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-gray-100" id="exampleModalLabel">Employees' Inventory</h5>
        <button type="button" class="close text-gray-100" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editInventoryForm" action="/inventories/{{$accountability->id}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="modal-body">
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label>Motherboard</label>
                <input type="text" name="motherboard" id="editmotherboard" class="form-control" required>
              </div>
              <div class="col-md-3 mb-3">
                <label>CPU</label>
                <input type="text" name="cpu" id="editcpu" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>HDD</label>
                <input type="text" name="hdd" id="edithdd" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>Memory</label>
                <input type="text" name="memory" id="editmemory" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label>Monitor</label>
                <input type="text" name="monitor" id="editmonitor" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>Case</label>
                <input type="text" name="case" id="editcase" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>Keyboard</label>
                <input type="text" name="keyboard" id="editkeyboard" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>Mouse</label>
                <input type="text" name="mouse" id="editmouse" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label>Video Card</label>
                <input type="text" name="video_card" id="editvideo_card" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>Power Supply</label>
                <input type="text" name="power_supply" id="editpower_supply" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>Printer</label>
                <input type="text" name="printer" id="editprinter" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
                <label>Telephone</label>
                <input type="text" name="telephone" id="edittelephone" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
                <label>Remarks</label>
                <input type="text" name="remark" id="remark" class="form-control" required>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            @if(Auth::user()->role == 'Admin')
            <button type="submit" class="btn btn-primary">Save changes</button>
            @endif
        </div>
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
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#myDataTable').DataTable();
    } );
  </script>
  
<script>
$('.editInventory').click(function(e)
{
  e.preventDefault();
  var x = $(this).data('inventory_id');
  console.log(x);
  function()
  {
    $.ajax({
      type: 'POST',
      url: '/getInventory',
      data: 
      {
        '_token': $('input[name=_token]').val(),
        'inventory_id': x
      },
      success:function(data)
      {
        console.log('success');
      }
    });
  };
});
</script>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<!-- Crabbly print -->
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>


   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection