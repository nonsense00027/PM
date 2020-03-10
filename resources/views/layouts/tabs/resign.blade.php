<div role="tabpanel" class="tab-pane" id="resign">
    <div class="table-responsive">
        <table class="table table-bordered table-hover nowrap myDataTable"  width="100%" cellspacing="0">
        <thead class="bg-primary text-white">
            <tr>
            <th class="col-0">ID</th>
            <th class="col-12">Name</th>
            <th>Company</th>
            <th  class="col-3">Designation</th>
            <th>User Status</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($accountabilities as $accountability)
            @if($accountability->active == 0)
            <tr>
            <td>{{$accountability->id}}</td>
            <td>{{$accountability->name}}</td>
            <td>{{$accountability->company}}</td>
            <td>{{$accountability->designation}}</td>
            <td>
                @if($accountability->active == '1')
                <i class="fa fa-user-plus text-success"></i>&nbsp&nbsp
                Active
                @else
                <i class="fa fa-user-times text-danger"></i>&nbsp&nbsp
                Resigned
                @endif
                
            </td>
            
            <td>
                <!-- EDIT FUNCTION  -->
                <a href="#" data-target="#exampleModal-{{$accountability->id}}" class="edit mx-3" data-toggle="modal" title="Edit user information" data-placement="left" >
                <i class="fas fa-pen" title="Edit user information"></i>
                </a>
                <!-- EDIT MODAL -->
                @include('layouts.edit.other')
                
                <!-- INVENTORY FUNCTION -->

                <a href="#" data-target="#inventoryModal-{{$accountability->id}}" class="edit mx-3" data-toggle="modal" title="User Accountability" data-placement="left" >
                <i class="fas fa-th-list" title="User Accountability"></i>
                </a>

                <!-- <a data-inventory_id="{{$accountability->id}}" href="#" class="edit mx-3 editInventory" title="User Accountability" data-placement="left" >
                <i class="fas fa-th-list" title="User Accountability"></i>
                </a> -->
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
                @include('layouts.log')
                <!-- END OF LOGS MODAL -->

                <a href="#" data-target="#activatemodal-{{$accountability->id}}" class="edit mx-3" data-toggle="modal" title="User Accountability" data-placement="left" >
                <i class="fa fa-cog" title="Set user status"></i>
                </a>

                <!-- ACTIVE/RESIGN MODAL -->
                @include('layouts.status')
                <!-- END ACTIVE/RESIGN MODAL -->

                <!-- WORKING -->
                <!-- <a href="#" onclick="onClickModalRemark('{{$accountability->id}}')" data-target="#sampleModal" class="log mx-3"  data-toggle="modal" title="View logs" >
                <i class="fas fa-info" title="View logs"></i>
                </a> -->

            </td>
            </tr>
            @endif
            @endforeach
        </tbody>
        </table>
    </div>
</div>