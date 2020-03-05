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
                <thead class="bg-primary text-white">
                  <tr>
                    <th class="col-0">ID</th>
                    <th class="col-12">Name</th>
                    <th>Company</th>
                    <!-- <th>Designation</th>
                    <th>Computer Name</th> -->
                    <th  class="col-3">Location</th>
                    <!-- <th>Local User</th>
                    <th>Local Password</th>
                    <th>Domain Account</th>
                    <th>Domain Password</th>
                    <th>IP Address</th>
                    <th>MAC Address</th>
                    <th>Email</th> -->
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($accountabilities as $accountability)
                  <tr>
                    <td>{{$accountability->id}}</td>
                    <td>{{$accountability->name}}</td>
                    <!-- TD FOR COMPANY -->
                    <td>{{$accountability->company}}</td>
                    <td>{{$accountability->location}}</td>
                    <!-- <td>{{$accountability->designation}}</td>
                    <td>{{$accountability->computer_name}}</td> -->
                    <!-- <td>{{$accountability->location}}</td> -->
                    <!-- <td>{{$accountability->local_user}}</td>
                    <td>{{$accountability->local_password}}</td>
                    <td>{{$accountability->domain_acc}}</td>
                    <td>{{$accountability->domain_pass}}</td>
                    <td>{{$accountability->ip_address}}</td>
                    <td>{{$accountability->mac_address}}</td>
                    <td>{{$accountability->email}}</td> -->
                    <!-- <td><a href="/accountabilities/{{$accountability->id}}">Hi</a></td> -->
                    <!-- <td><a href="#edit" class="nav-link" role="tab" data-toggle="tab">Edit</a></td> -->
                    <td>
                      <!-- EDIT FUNCTION  -->
                      <a href="#" data-target="#exampleModal-{{$accountability->id}}" class="edit mx-3" data-toggle="modal" title="Edit user information" data-placement="left" >
                        <i class="fas fa-pen" title="Edit user information"></i>
                      </a>
                      <!-- EDIT MODAL -->
                      <div class="modal fade bd-example-modal-lg printModal" id="exampleModal-{{$accountability->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <h5 class="modal-title text-gray-100" id="exampleModalLabel">Modify {{$accountability->name}}'s user information</h5>
                              <button type="button" class="close text-gray-100" data-dismiss="modal" aria-label="Close">
                                <span  aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form id="editForm1" action="/accountabilities/{{$accountability->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="modal-body">
                                  <div class="form-row">
                                    <div class="col-md-1 mb-3">
                                      <label>ID</label>
                                      <input readonly type="text" name="id" id="editid" class="form-control bg-outline-success" value="{{$accountability->id}}" required>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                      <label>Full Name</label>
                                      <input type="text" name="name" id="editname" class="form-control bg-outline-success" value="{{$accountability->name}}" required>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                      <label>Company</label>
                                      <input type="text" name="company" id="editcompany" class="form-control bg-outline-success" value="{{$accountability->company}}" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Designation</label>
                                      <input type="text" name="designation" id="editdesignation" class="form-control" value="{{$accountability->designation}}" required>
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                      <label>Computer Name</label>
                                      <input type="text" name="computer_name" id="editcomputer_name" class="form-control" value="{{$accountability->computer_name}}" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label>Location</label>
                                      <input type="text" name="location" id="editlocation" class="form-control" value="{{$accountability->location}}" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Local User</label>
                                      <input type="text" name="local_user" id="editlocal_user" class="form-control" value="{{$accountability->local_user}}" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Local Password</label>
                                      <input type="text" name="local_password" id="editlocal_password" class="form-control" value="{{$accountability->local_password}}" required>
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                      <label>Domain Account</label>
                                      <input type="text" name="domain_acc" id="editdomain_acc" class="form-control" value="{{$accountability->domain_acc}}" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Domain Password</label>
                                      <input type="text" name="domain_pass" id="editdomain_pass" class="form-control" value="{{$accountability->domain_pass}}" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>IP Address</label>
                                      <input type="text" name="ip_address" id="editip_address" class="form-control" value="{{$accountability->ip_address}}" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>MAC Address</label>
                                      <input type="text" name="mac_address" id="editmac_address" class="form-control" value="{{$accountability->mac_address}}" required>
                                    </div>
                                  </div>

                                  <div class="form-row">
                                      <label>Email</label>
                                      <input type="text" name="email" id="editemail" class="form-control" value="{{$accountability->email}}" required>
                                  </div>
                                  <br>
                                  <div class="form-row">
                                      <label>Remarks</label>
                                      <input type="text" name="remark" id="remark" class="form-control" required>
                                  </div>
                              </div>
                            
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-success" onclick="printJS({ printable: 'editForm1', type: 'html', header: 'Accountability Form', css: '/css/sb-admin-2.css' })">
                                    <i class="fas fa-print" title="Edit user information"></i>&nbsp&nbspPrint
                                  </button>

                                  <!-- <button type="button" class="btn btn-success" id="printButton">
                                    <i class="fas fa-print" title="Edit user information"></i>&nbsp&nbspPrint
                                  </button> -->
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>  

                      <!-- INVENTORY FUNCTION -->

                      <a href="#" data-target="#inventoryModal-{{$accountability->id}}" class="edit mx-3" data-toggle="modal" title="User Accountability" data-placement="left" >
                        <i class="fas fa-th-list" title="User Accountability"></i>
                      </a>
                      <!-- INVENTORY MODAL -->
                      <div class="modal fade" id="inventoryModal-{{$accountability->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <h5 class="modal-title text-gray-100" id="exampleModalLabel">{{$accountability->name}}'s Inventory</h5>
                              <button type="button" class="close text-gray-100" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form id="editForm2" action="/inventories/{{$accountability->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="modal-body">
                                  <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                      <label>Motherboard</label>
                                      <input type="text" name="computer_name" id="editcomputer_name" class="form-control" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label>CPU</label>
                                      <input type="text" name="location" id="editlocation" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>HDD</label>
                                      <input type="text" name="local_user" id="editlocal_user" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Memory</label>
                                      <input type="text" name="local_password" id="editlocal_password" class="form-control" required>
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                      <label>Monitor</label>
                                      <input type="text" name="domain_acc" id="editdomain_acc" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Case</label>
                                      <input type="text" name="domain_pass" id="editdomain_pass" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Keyboard</label>
                                      <input type="text" name="ip_address" id="editip_address" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Mouse</label>
                                      <input type="text" name="mac_address" id="editmac_address" class="form-control" required>
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                      <label>Video Card</label>
                                      <input type="text" name="domain_acc" id="editdomain_acc" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Power Supply</label>
                                      <input type="text" name="domain_pass" id="editdomain_pass" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Printer</label>
                                      <input type="text" name="ip_address" id="editip_address" class="form-control" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                      <label>Telephone</label>
                                      <input type="text" name="mac_address" id="editmac_address" class="form-control" required>
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
              
                @csrf
                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Full Name here..." required>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label>Company</label>
                    <input type="text" class="form-control" name="company" value="{{old('company')}}" placeholder="Designation here..." required>
                  </div>

                  <div class="col-md-3 mb-3">
                    <label>Designation</label>
                    <input type="text" class="form-control" name="designation" value="{{old('designation')}}" placeholder="Designation here..." required>
                  </div>

                  <div class="col-md-3 mb-3">
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
                @if(Auth::user()->role == 'Admin')
                <button class="btn btn-block btn-outline-primary" type="submit">Submit form</button>
                @elseif(Auth::user()->role != 'Admin')
                <button class="btn btn-block btn-secondary" type="submit" disabled>You don't have authority for this feature</button>
                @endif
              </form>
            <!-- Form ends here -->
          </div>
          <!-- End of Tab 2 -->         
        </div>
@endsection

@section('modal')

<!-- Edit Modal -->
<!-- <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <div class="col-md-1 mb-3">
                <label>ID</label>
                <input readonly type="text" name="id" id="editid" class="form-control bg-outline-success" required>
              </div>

              <div class="col-md-4 mb-3">
                <label>Full Name</label>
                <input type="text" name="name" id="editname" class="form-control bg-outline-success" required>
              </div>

              <div class="col-md-4 mb-3">
                <label>Designation</label>
                <input type="text" name="designation" id="editdesignation" class="form-control" required>
              </div>

              <div class="col-md-3 mb-3">
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
            <br>
            <div class="form-row">
                <label>Remarks</label>
                <input type="text" name="remark" id="remark" class="form-control" required>
            </div>
        </div>
      
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div> -->

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


<!-- Edit Script -->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        var table = $('#myDataTable').DataTable();
        table.on('click', '.edit', function(){
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);
            $('#editid').val(data[0]);
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

</script> -->
<!-- End of Edit Script -->

<!-- Log Script -->
<!-- <script type="text/javascript">

    $(document).ready(function(){
        var table = $('#myDataTable').DataTable();
        table.on('click', '.log', function(){
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            // console.log(data);
            // $('#editid').val(data[0]);
            // $('#editname').val(data[1]);
            // $('#editdesignation').val(data[2]);
            // $('#editcomputer_name').val(data[3]);
            // $('#editlocation').val(data[4]);
            // $('#editlocal_user').val(data[5]);
            // $('#editlocal_password').val(data[6]);
            // $('#editdomain_acc').val(data[7]);
            // $('#editdomain_pass').val(data[8]);
            // $('#editip_address').val(data[9]);
            // $('#editmac_address').val(data[10]);
            // $('#editemail').val(data[11]);

            // $('#editForm').attr('action', '/accountabilities/'+data[0]);
            $('#sampleModal').modal('show');
        });
    });

</script> -->


<!-- End of Log Script -->
<script>



function onClickModalRemark(id){
  $('#remarktable').empty();
  axios.get('/remarks/' + id)
  .then(function (response) {
    for(var i=0;i<response.data.length;i++){
      var row = '<tr>'
      + '<td>'+ `${response.data[i].id}` + '</td>'
      + '<td>'+ `${response.data[i].remark}` + '</td>'
      + '<td>'+ `${response.data[i].created_at}` + '</td>'
      +'</tr>';
      $('#remarktable').append(row);
    }
    // $('#remarktable').append(response->id);
      // console.log(response.data);
    
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
  });
}

</script>

<!-- Crabbly print -->
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

  <!-- Print function library -->
  <!-- <script src="/js/jquery.PrintArea.js"></script>
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
  <script>
  $(document).ready(function(){
      $("#printButton").click(function(){
          var mode = 'iframe'; //popup
          var close = mode == "iframe";
          var options = { mode : mode, popClose : close};
          $("div.printModal").printArea( options );
      });
  });
  </script> -->


   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
@endsection