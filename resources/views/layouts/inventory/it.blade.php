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
                <input type="hidden" name="id" id="editid" class="form-control" value="{{$accountability->id}}" required>
                
                <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label>Motherboard</label>
                    <input  type="text" name="motherboard" id="editcomputer_name" class="form-control" value="{{$accountability->motherboard}}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label>CPU</label>
                    <input  type="text" name="cpu" id="editlocation" class="form-control" value="{{$accountability->cpu}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>HDD</label>
                    <input  type="text" name="hdd" id="editlocal_user" class="form-control" value="{{$accountability->hdd}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>Memory</label>
                    <input  type="text" name="memory" id="editlocal_password" class="form-control" value="{{$accountability->memory}}" required>
                </div>
                </div>

                <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label>Monitor</label>
                    <input  type="text" name="monitor" id="editdomain_acc" class="form-control" value="{{$accountability->monitor}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>Case</label>
                    <input  type="text" name="case" id="editdomain_pass" class="form-control" value="{{$accountability->case}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>Keyboard</label>
                    <input  type="text" name="keyboard" id="editip_address" class="form-control" value="{{$accountability->keyboard}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>Mouse</label>
                    <input  type="text" name="mouse" id="editmac_address" class="form-control" value="{{$accountability->mouse}}" required>
                </div>
                </div>

                <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label>Video Card</label>
                    <input type="text" name="video_card" id="editdomain_acc" class="form-control" value="{{$accountability->video_card}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>Power Supply</label>
                    <input type="text" name="power_supply" id="editdomain_pass" class="form-control" value="{{$accountability->power_supply}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>Printer</label>
                    <input type="text" name="printer" id="editip_address" class="form-control" value="{{$accountability->printer}}" required>
                </div>

                <div class="col-md-3 mb-3">
                    <label>Telephone</label>
                    <input type="text" name="telephone" id="editmac_address" class="form-control" value="{{$accountability->telephone}}" required>
                </div>
                </div>

                <div class="form-row">
                    <label>Remarks</label>
                    <input type="text" name="remark" id="remark" class="form-control" required>
                </div>
            </div>

            <div class="modal-footer">

            <button id="printBtn" type="button" class="btn btn-success" onclick="printJS({ printable: 'editForm2', type: 'html', header: 'Inventory Form of {{$accountability->name}}', css: '/css/sb-admin-2.css' })">
                <i class="fas fa-print" title="Edit user information"></i>&nbsp&nbspPrint
                </button>

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