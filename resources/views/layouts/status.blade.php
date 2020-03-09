<div class="modal fade" id="activatemodal-{{$accountability->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{$accountability->name}}'s account status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/accountabilities/active/{{$accountability->id}}" method="post">
        @csrf
        @method('PATCH')
        <div class="modal-body">
        @if($accountability->active == '1')
            This user is active. Would you like  to set him/her to resigned?
            <input type="hidden" name="active" value="0">
        @else
            This user is resigned. Would you like  to set him/her to active?
            <input type="hidden" name="active" value="1">
        @endif
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        @if($accountability->active == '1')
            <button type="submit" class="btn btn-danger" title="Set user to resigned">Resigned</button>
        @else
            <button type="submit" class="btn btn-success" title="Set user to active">Active</button>
        @endif 
        </div>
        </div>
        </form>
    </div>
</div>