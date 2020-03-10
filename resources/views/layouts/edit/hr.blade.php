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
                <label>Location</label>
                <input type="text" name="location" id="editlocation" class="form-control" value="{{$accountability->location}}" required>
            </div>
            <div class="col-md-3 mb-3">
                <label>Computer Name</label>
                <input readonly type="text" name="computer_name" id="editcomputer_name" class="form-control" value="{{$accountability->computer_name}}" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>Local User</label>
                <input readonly type="text" name="local_user" id="editlocal_user" class="form-control" value="{{$accountability->local_user}}" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>Local Password</label>
                <input readonly type="text" name="local_password" id="editlocal_password" class="form-control" value="{{$accountability->local_password}}" required>
            </div>
            </div>

            <div class="form-row">
            <div class="col-md-3 mb-3">
                <label>Domain Account</label>
                <input readonly type="text" name="domain_acc" id="editdomain_acc" class="form-control" value="{{$accountability->domain_acc}}" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>Domain Password</label>
                <input readonly type="text" name="domain_pass" id="editdomain_pass" class="form-control" value="{{$accountability->domain_pass}}" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>IP Address</label>
                <input readonly type="text" name="ip_address" id="editip_address" class="form-control" value="{{$accountability->ip_address}}" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>MAC Address</label>
                <input readonly type="text" name="mac_address" id="editmac_address" class="form-control" value="{{$accountability->mac_address}}" required>
            </div>
            </div>

            <div class="form-row">
                <label>Email</label>
                <input type="text" name="email" id="editemail" class="form-control" value="{{$accountability->email}}" required>
            </div>
            <!-- <input type="hidden" name="status" value="true"> -->
            <br>
            <div class="form-row">
                <label id="remarksForPrint">Remarks</label>
                <input type="text" name="remark" id="remark" class="form-control" required>
            </div>
        </div>
    
        <div class="modal-footer">
            <button id="printBtn" type="button" class="btn btn-success" onclick="printJS({ printable: 'editForm1', type: 'html', documentTitle: 'FTC Group of Companies | Accountability Form of {{$accountability->name}}', css: '/css/print.css', honorColor: 'true', ignoreElements: ['saveBtn','cancelBtn','remarksForPrint','printBtn'], gridStyle: 'border: 1px solid lightgray; margin-bottom: -1px;', targetStyle: 'null' })">
            <i class="fas fa-print" title="Edit user information"></i>&nbsp&nbspPrint
            </button>

            <!-- <button type="button" class="btn btn-success" id="printButton">
            <i class="fas fa-print" title="Edit user information"></i>&nbsp&nbspPrint
            </button> -->
            <button id="saveBtn" type="submit" class="btn btn-primary">Save changes</button>
            <button id="cancelBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
        </div>
    </form>
    </div>
</div>
</div>