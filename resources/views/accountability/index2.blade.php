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
            <span class="text-center text-gray-100 text-lg small"><b>{{ Auth::user()->abbreviation}} Deptartment</b></span>
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
            <a href="#list" class="nav-link active" role="tab" data-toggle="tab">Active</a>
        </li>
        <li class="nav-item">
            <a href="#inc" class="nav-link" role="tab" data-toggle="tab">Incomplete</a>
        </li>
        <li class="nav-item">
            <a href="#resign" class="nav-link" role="tab" data-toggle="tab">Resigned</a>
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
          @include('layouts.tabs.active')
          <!-- end of tab 1 -->

          <!-- Tab 2 is the incomplete list of the employees -->
          @include('layouts.tabs.incomplete')
          <!-- end of tab 1 -->

          <!-- Tab 3 is the resigned list of the employees -->
          @include('layouts.tabs.resign')
          <!-- end of tab 1 -->

          <!-- tab 4 is the form to add a new employee -->
          @include('layouts.tabs.add')
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
        $('.myDataTable').DataTable();
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