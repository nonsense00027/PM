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