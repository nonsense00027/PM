
<script type = text/javascript>
$('.editInventory').click(function(e){
  e.preventDefault();
  var x = $(this).data('inventory_id');
  console.log('sulod');

function(){
  $.ajax({
    type: 'POST',
    url: '/deleteCostume',
    data: {
      '_token': $('input[name=_token]').val(),
      'costume_id': x

    },
    success: function(data){
      console.log(`#${data.costume_id}`);
      var t = $('#costumes_list').DataTable();
      t.row(`#${data.costume_id}`).remove().draw();

      swal({
      title: 'Inventory Updated',
      text: 'Costume Record Deleted',
      type: 'success',
      allowOutsideClick: true,
      html: true
      });
    },
  });

});
});
</script>

<!-- Edit Script -->
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

</script>
<!-- End of Edit Script -->

<!-- Log Script -->
<script type="text/javascript">

$(document).ready(function(){
    var table = $('#myDataTable').DataTable();
    table.on('click', '.editInventory', function(){
        console.log('sulod');
        $tr = $(this).closest('tr');
        if($($tr).hasClass('child')){
            $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        var id = data[0];
        $.ajax({
        type: 'POST',
        url: 'getInventory',
        data: {
          '_token': $('input[name=_token]').val(),
          'inventory_id': id
        },
        success: function(data){
          console.log(data);
        }
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

        $('#editInventoryForm').attr('action', '/inventories/'+data[0]);
        $('#editInventoryModal').modal('show');
    });
});
});
</script>