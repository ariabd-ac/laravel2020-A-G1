<div class="modal fade" id="tambahModal" data-backdrop="static"   role="dialog" aria-labelledby="tambahData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white" id="tambahData">Tambah Data</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="tambahForm">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="col-form-label">Kode Guru:</label>
                <input type="text" class="form-control" name="kodeguru" required>
                <small class="errorKode text-danger hidden"></small>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="nama" required>
                <small class="errorNama text-danger hidden"></small>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Nomer Induk Guru:</label>
                <input type="number" class="form-control" name="nig" required>
                <small class="errorNig text-danger hidden"></small>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Nomer Telphon:</label>
                <input type="text" class="form-control" name="phone" required>
                <small class="errorPhone text-danger hidden"></small>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Alamat:</label>
                  <input type="text" class="form-control" name="alamat" required>
                  <small class="errorAlamat text-danger hidden"></small>
              </div>
              <div class="form-group">
                <label for="mdate" class="col-form-label">Tanggal lahir:</label>
                <input type="date" class="form-control" name="ttl" id="mdate" data-dtp="dtp_PJfPo" placeholder="2017-06-04">
                <small class="errorTtl text-danger hidden"></small>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Jenis Kelamin:</label>
                  <select class="form-control" name="jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                  <small class="errorJk text-danger hidden"></small>
              </div>
                <div class="form-group">
                  <label for="country" class="col-form-label">Status: </label>
                  <select class="form-control" name="status">
                      <option value="">Pilih Jenis Status</option>
                    <option value="Honorer">Honorer</option>
                    <option value="PNS">PNS</option>
                  </select>
                  <small class="errorStatus text-danger hidden"></small>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="storeBtn" class="btn btn-primary">Tambah Anggota</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal" data-backdrop="static"   role="dialog" aria-labelledby="editData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="editData">Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            {{ csrf_field() }}
            <input type="hidden" id="edit_id" name="id">
              <div class="form-group">
                <label for="name" class="col-form-label">Kode Guru:</label>
                <input type="text" class="form-control" name="kodeguru" id="edit_kodeguru">
                <small class="edit_errorKode text-danger hidden"></small>
              </div>
              <div class="form-group">
                  <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="nama" id="edit_nama">
                <small class="edit_errorNama text-danger hidden"></small>
              </div>
              <div class="form-group">
                  <label for="name" class="col-form-label">Nomer Induk Guru:</label>
                <input type="number" class="form-control" name="nig" id="edit_nig">
                <small class="edit_errorNig text-danger hidden"></small>
              </div>
            <div class="form-group">
                  <label for="country" class="col-form-label">Alamat:</label>
                  <input type="text" class="form-control" name="alamat" id="edit_alamat">
                  <small class="edit_errorAlamat text-danger hidden"></small>
              </div>
               <div class="form-group">
                <label for="name" class="col-form-label">Nomer Telphon:</label>
                <input type="text" class="form-control" name="phone" id="edit_phone">
                <small class="edit_errorPhone text-danger hidden"></small>
              </div>
                   <div class="form-group">
                <label for="mdate" class="col-form-label">Tanggal lahir:</label>
                <input type="date" class="form-control" name="ttl" id="mdate" data-dtp="dtp_PJfPo" placeholder="2017-06-04" id="edit_ttl">
                <small class="edit_errorTtl text-danger hidden"></small>
              </div>
                 <div class="form-group">
                  <label for="country" class="col-form-label">Jenis Kelamin:</label>
                  <select class="form-control" name="jk" id="edit_jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                  <small class="edit_errorJk text-danger hidden"></small>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Status: </label>
                  <select class="form-control" name="status" id="edit_status">
                      <option value="">Pilih Jenis Status</option>
                    <option value="Honorer">Honorer</option>
                    <option value="PNS">PNS</option>
                  </select>
                  <small class="edit_errorStatus text-danger hidden"></small>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning" id="updateBtn">Ubah Anggota</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmHapusModal" tabindex="-1" data-backdrop="static"   role="dialog" aria-labelledby="hapusData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white" id="hapusData">Hapus Data</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data ini ?</p>
        </div>
        <div class="modal-footer">
          <form id="hapusForm" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger btnHapus" data-id="">Hapus Anggota</button>
        </form>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
        
  $(function () {
    
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    // View data with yajra datatables 

    var table = $('#datatable').DataTable({

    processing: true,
    serverSide: true,
    ajax: "{{ route('guru.index') }}",
    
    columns: [

        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'kodeguru', name: 'kodeguru'},
        {data: 'nama', name: 'nama'},
        {data: 'nig', name: 'nig'},
        {data: 'phone', name: 'phone'},
        {data: 'alamat', name: 'alamat'},
        {data: 'ttl', name: 'ttl'},
        {data: 'jk', name: 'jk'},
        {data: 'status', name: 'status'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
    })
    ;

    // Save Button in modal dialog
        $('#storeBtn').click(function (e) {
        e.preventDefault();
        var frm = $('#tambahForm');
        $('.errorKode').hide();
        $('.errorNama').hide();
        $('.errorNig').hide();
        $('.errorPhone').hide();
        $('.errorAlamat').hide();
        $('.errorTtl').hide();
        $('.errorJk').hide();
        $('.errorStatus').hide();
        $(this).html('Sending..');
    
        $.ajax({
          data: frm.serialize(),
          url: "{{ route('guru.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
            if (data.errors) {
                if (data.errors.kodeguru) {
                  $('.errorKode').show();
                  $('.errorKode').text(data.errors.kodeguru);
                }
                if (data.errors.nama) {
                  $('.errorNama').show();
                  $('.errorNama').text(data.errors.nama);
                }
                if (data.errors.nig) {
                  $('.errorNig').show();
                  $('.errorNig').text(data.errors.nig);
                }
                if (data.errors.phone) {
                  $('.errorPhone').show();
                  $('.errorPhone').text(data.errors.phone);
                }
                if (data.errors.alamat) {
                  $('.errorAlamat').show();
                  $('.errorAlamat').text(data.errors.alamat);
                }
                if (data.errors.ttl) {
                  $('.errorTtl').show();
                  $('.errorTtl').text(data.errors.ttl);
                }
                if (data.errors.jk) {
                  $('.errorJk').show();
                  $('.errorJk').text(data.errors.jk);
                }
                if (data.errors.status) {
                  $('.errorStatus').show();
                  $('.errorStatus').text(data.errors.status);
                }
            }else {
              $('#tambahModal').modal('hide');
              frm.trigger("reset");
              table.draw();
              swal('success!','Successfully Added','success');
            }
            $('#storeBtn').html('Tambah');
          },
          error: function (data) {
              console.log('Error:', data);
              $('#storeBtn').html('Tambah');
          }
      });
    });

    // Edit button to show modal dialog
    $('#table').on('click','.editBtn[data-id]',function(e){
        e.preventDefault();
        var url = $(this).data('id');
        $.ajax({
            url : url,
            type : 'GET',
            datatype : 'json',
            success:function(data){
                $('#edit_id').val(data.id);
                $('#edit_kodeguru').val(data.kodeguru);
                $('#edit_nama').val(data.nama);
                $('#edit_nig').val(data.nig);
                $('#edit_phone').val(data.phone);
                $('#edit_alamat').val(data.alamat);
                $('#edit_ttl').val(data.ttl);
                $('#edit_jk').val(data.jk);
                $('#edit_status').val(data.status);
                $('.errorKode').hide();
                $('.errorNama').hide();
                $('.errorNig').hide();
                $('.errorPhone').hide();
                $('.errorAlamat').hide();
                $('.errorTtl').hide();
                $('.errorJk').hide();
                $('.errorStatus').hide();
                $('#editModal').modal('show');
            }
        });
    });


    // Update button in modal dialog
    $('#updateBtn').click(function(e){
        e.preventDefault();
        $('.errorKode').hide();
        $('.errorNama').hide();
        $('.errorNig').hide();
        $('.errorPhone').hide();
        $('.errorAlamat').hide();
        $('.errorTtl').hide();
        $('.errorJk').hide();
        $('.errorStatus').hide();
        var url = "/guru/"+$('#edit_id').val();
        console.log(url);
        var frm = $('#editForm');

        $.ajax({
            data : frm.serialize(),
            type :'PUT',
            url : url,
            dataType : 'json',
            success:function(data){
              if (data.errors) {
                if (data.errors.kodeguru) {
                  $('.errorKode').show();
                  $('.errorKode').text(data.errors.kodeguru);
                }
                if (data.errors.nama) {
                  $('.errorNama').show();
                  $('.errorNama').text(data.errors.nama);
                }
                if (data.errors.nig) {
                  $('.errorNig').show();
                  $('.errorNig').text(data.errors.nig);
                }
                if (data.errors.phone) {
                  $('.errorPhone').show();
                  $('.errorPhone').text(data.errors.phone);
                }
                if (data.errors.alamat) {
                  $('.errorAlamat').show();
                  $('.errorAlamat').text(data.errors.alamat);
                }
                if (data.errors.ttl) {
                  $('.errorTtl').show();
                  $('.errorTtl').text(data.errors.ttl);
                }
                if (data.errors.jk) {
                  $('.errorJk').show();
                  $('.errorJk').text(data.errors.jk);
                }
                if (data.errors.status) {
                  $('.errorStatus').show();
                  $('.errorStatus').text(data.errors.status);
                }
                
              }else {
                $('#editModal').modal('hide');
                frm.trigger('reset');
                swal('Success!','Data Updated Successfully','success');
                table.ajax.reload(null,false);
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              alert('Please Reload to read Ajax');
            }
        });
    });

     $('#table').on('click','.deleteBtn[data-id]',function(e){
        e.preventDefault();
        var url = $(this).data('id');
        console.log(url);
        swal({
           title: "Are you sure want to remove this item?",
           text: "Data will be Temporary Deleted!",
           type: "warning",
           showCancelButton: true,
           confirmButtonClass: "btn-danger",
           confirmButtonText: "Confirm",
           cancelButtonText: "Cancel",
           closeOnConfirm: false,
           closeOnCancel: false,
        },
        function(isConfirm) {
          if (isConfirm) {
            $.ajax({
                url : url,
                type: 'DELETE',
                dataType : 'json',
                data : { method : '_DELETE' , submit : true},
                success:function(data){
                    if (data == 'Success') {
                      swal("Deleted!", "Category has been deleted", "success");
                      table.ajax.reload(null,false);
                    }
                }
            });
          }else { swal.close(); }
        });
    });
  });
</script>


 