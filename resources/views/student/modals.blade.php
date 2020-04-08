<div class="modal fade" id="tambahModal" tabindex="-1" data-backdrop="static"   role="dialog" aria-labelledby="tambahData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white" id="tambahData">Tambah Data</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="tambahForm" action="{{ Route('siswa.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Nomer Induk Siswa:</label>
                <input type="number" class="form-control" name="nis" required>
              </div>
                 <div class="form-group">
                <label for="mdate" class="col-form-label">Tanggal lahir:</label>
                <input type="date" class="form-control" name="ttl" id="mdate" data-dtp="dtp_PJfPo" placeholder="2017-06-04">
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Alamat:</label>
                  <input type="text" class="form-control" name="alamat" required>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Jenis Kelamin:</label>
                  <select class="form-control" name="jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">No Telfon:</label>
                  <input type="text" class="form-control" name="phone" required>
              </div>
    
                <div class="form-group">
                  <label for="country" class="col-form-label">Kelas: </label>
                  <select class="form-control" name="kelas">
                    <option value="">Pilih Kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
              </div>

               <div class="form-group">
                  <label for="country" class="col-form-label">Jurusan: </label>
                  <select class="form-control" name="jurusan">
                    <option value="">Pilih Kelas</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Bahasa">Bahasa</option>
                  </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Anggota</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal" tabindex="-1" data-backdrop="static"   role="dialog" aria-labelledby="editData" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="editData">Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editForm" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
              <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Nomer Induk Siswa:</label>
                <input type="number" class="form-control" name="nis" required>
              </div>
                 <div class="form-group">
                <label for="mdate" class="col-form-label">Tanggal lahir:</label>
                <input type="date" class="form-control" name="ttl" id="mdate" data-dtp="dtp_PJfPo" placeholder="2017-06-04">
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Alamat:</label>
                  <input type="text" class="form-control" name="alamat" required>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">Jenis Kelamin:</label>
                  <select class="form-control" name="jk">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="country" class="col-form-label">No Telfon:</label>
                  <input type="text" class="form-control" name="phone" required>
              </div>
    
                <div class="form-group">
                  <label for="country" class="col-form-label">Kelas: </label>
                  <select class="form-control" name="kelas">
                    <option value="">Pilih Kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
              </div>

               <div class="form-group">
                  <label for="country" class="col-form-label">Jurusan: </label>
                  <select class="form-control" name="jurusan">
                    <option value="">Pilih Kelas</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Bahasa">Bahasa</option>
                  </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning" data-id="">Ubah Anggota</button>
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
    ajax: "{{ route('siswa.index') }}",

    columns: [

        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'nama', name: 'nama'},
        {data: 'nis', name: 'nis'},
        {data: 'ttl', name: 'ttl'},
        {data: 'alamat', name: 'alamat'},
        {data: 'jk', name: 'jk'},
        {data: 'phone', name: 'phone'},
        {data: 'kelas', name: 'kelas'},
        {data: 'jurusan', name: 'jurusan'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
    })
    ;

     // Save Button in modal dialog
     $('#storeBtn').click(function (e) {
        e.preventDefault();
        var frm = $('#tambahForm');
        $('.errorNama').hide();
        $('.errorNis').hide();
        $('.errorTtl').hide();
        $('.errorAlamat').hide();
        $('.errorJk').hide();
        $('.errorPhone').hide();
        $('.errorKelas').hide();
        $('.errorJurusan').hide();
        $(this).html('Sending..');

        $.ajax({
          data: frm.serialize(),
          url: "{{ route('siswa.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
            if (data.errors) {
                if (data.errors.nama) {
                  $('.errorNama').show();
                  $('.errorNama').text(data.errors.nama);
                }
                if (data.errors.nis) {
                  $('.errorNis').show();
                  $('.errorNis').text(data.errors.nis);
                }
                if (data.errors.ttl) {
                  $('.errorTtl').show();
                  $('.errorTtl').text(data.errors.ttl);
                }
                if (data.errors.alamat) {
                  $('.errorAlamat').show();
                  $('.errorAlamat').text(data.errors.alamat);
                }
                if (data.errors.jk) {
                  $('.errorJk').show();
                  $('.errorJk').text(data.errors.jk);
                }
                if (data.errors.phone) {
                  $('.errorPhone').show();
                  $('.errorPhone').text(data.errors.phone);
                }
                if (data.errors.kelas) {
                  $('.errorKelas').show();
                  $('.errorKelas').text(data.errors.kelas);
                }
                if (data.errors.jurusan) {
                  $('.errorJurusan').show();
                  $('.errorJurusan').text(data.errors.jurusan);
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
                $('#edit_nama').val(data.nama);
                $('#edit_nis').val(data.nis);
                $('#edit_ttl').val(data.ttl);
                $('#edit_alamat').val(data.alamat);
                $('#edit_jk').val(data.jk);
                $('#edit_phone').val(data.phone);
                $('#edit_kelas').val(data.kelas);
                $('#edit_jurusan').val(data.jurusan);
                $('.errorNama').hide();
                $('.errorNis').hide();
                $('.errorTtl').hide();
                $('.errorAlamat').hide();
                $('.errorJk').hide();
                $('.errorPhone').hide();
                $('.errorKelas').hide();
                $('.errorJurusan').hide();
                $('#editModal').modal('show');
            }
        });
    });


     // Update button in modal dialog
     $('#updateBtn').click(function(e){
        e.preventDefault();
        $('.errorNama').hide();
        $('.errorNis').hide();
        $('.errorTtl').hide();
        $('.errorAlamat').hide();
        $('.errorJk').hide();
        $('.errorPhone').hide();
        $('.errorKelas').hide();
        $('.errorJurusan').hide();
        var url = "/siswa/"+$('#edit_id').val();
        console.log(url);
        var frm = $('#editForm');

        $.ajax({
            data : frm.serialize(),
            type :'PUT',
            url : url,
            dataType : 'json',
            success:function(data){
              if (data.errors) {
                if (data.errors.nama) {
                  $('.errorNama').show();
                  $('.errorNama').text(data.errors.nama);
                }
                if (data.errors.nis) {
                  $('.errorNis').show();
                  $('.errorNis').text(data.errors.nis);
                }
                if (data.errors.ttl) {
                  $('.errorTtl').show();
                  $('.errorTtl').text(data.errors.ttl);
                }
                if (data.errors.alamat) {
                  $('.errorAlamat').show();
                  $('.errorAlamat').text(data.errors.alamat);
                }
                 
                if (data.errors.jk) {
                  $('.errorJk').show();
                  $('.errorJk').text(data.errors.jk);
                }
                if (data.errors.phone) {
                  $('.errorPhone').show();
                  $('.errorPhone').text(data.errors.phone);
                }
               
                if (data.errors.kelas) {
                  $('.errorKelas').show();
                  $('.errorKelas').text(data.errors.kelas);
                }
                if (data.errors.jurusan) {
                  $('.errorJurusan').show();
                  $('.errorJurusan').text(data.errors.jurusan);
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
  