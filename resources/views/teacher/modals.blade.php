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
          <form id="tambahForm"action="" method="post" enctype="multipart/form-data">
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
              <div class="form-group">
                <label for="pdf" class="col-form-label">SK:</label> <br/>
                <input type="file" id="pdf" name="pdf" />
                <small class="errorPdf text-danger hidden"></small>
              </div>
              <div class="form-group">
                <label for="gambar" class="col-form-label">Upload Foto:</label> <br/>
                <input type="file" id="gambar" name="gambar" />
                <small class="errorGambar text-danger hidden"></small>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col s6">
                      <img src="http://placehold.it/100x100" class="showgambar" style="max-width:200px;max-height:200px;float:left;" />
                  </div>
                </div>
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
            <h3 style="color:red;" class="text-center">Tanggal Lahir diisi</h3>
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
              <div class="form-group">
                <label for="pdf" class="col-form-label">SK <small class="text-muted">kosongkan jika tidak ingin mengganti</small>:</label> <br/>
                <input type="file" id="edit_pdf" name="pdf" />
                <small class="edit_errorPdf text-danger hidden"></small>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col s6">
                      <a href="" class="btn btn-success btn-sm btn-rounded" id="edit_showpdf" target="_blank">PDF Link</a>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="gambar" class="col-form-label">Upload Gambar<small class="text-muted">kosongkan jika tidak ingin mengganti</small>:</label> <br/>
                <input type="file" id="edit_gambar" name="gambar" />
                <small class="edit_errorGambar text-danger hidden"></small>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col s6">
                      <img src="http://placehold.it/100x100" class="showgambar" id="edit_showgambar" style="max-width:200px;max-height:200px;float:left;" />
                  </div>
                </div>
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

    var table = $('.data-table').DataTable({

    processing: true,
    serverSide: true,
    ajax: "{{ route('guru.index') }}",
    
    columns: [

        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'kodeguru', name: 'kodeguru'},
        {data: 'nama', name: 'nama'},
        {data: 'nig', name: 'nig'},
        {data: 'pdf', name: 'pdf', 
              render: function( data, type, full, meta ) {
                        if(data == null){
                          return '<small class="text-muted">Belum upload</small>';
                        }else{
                          return "<a class='btn btn-rounded btn-secondary btn-sm' href=\"/storage/uploads/teachers/pdf/" + data + "\" target='_blank'>pdf</a>"; 
                        }
                      }},
        {data: 'gambar', name: 'gambar', 
              render: function( data, type, full, meta ) {
                        if(data == null){
                          return '<small class="text-muted">Belum upload</small>';
                        }else{
                          return "<img src=\"/storage/uploads/teachers/photos/" + data + "\" width=\"50\" height=\"50\"/>"; 
                        }
                      }},
        {data: 'phone', name: 'phone'},
        {data: 'alamat', name: 'alamat'},
        {data: 'ttl', name: 'ttl'},
        {data: 'jk', name: 'jk'},
        {data: 'status', name: 'status'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
    });
   
   
    $('.tambahModal').click(function(){
      $('.showgambar').attr('src', 'http://placehold.it/100x100');
      $('#storeBtn').html('Tambah');
      $('#tambahForm').trigger("reset");
    });

    
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
        $('.errorPdf').hide();
        $('.errorGambar').hide();
        
    
        $.ajax({
         data : new FormData($("#tambahForm")[0]),
          dataType : 'json',
          processData: false,
          contentType: false,
          url: "{{ route('guru.store') }}",
          method: "POST",
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
                if (data.errors.pdf) {
                  $('.errorPdf').show();
                  $('.errorPdf').text(data.errors.pdf);
                }
                if (data.errors.gambar) {
                  $('.errorGambar').show();
                  $('.errorGambar').text(data.errors.gambar);
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
                $('#edit_showpdf').attr('href', 'storage/uploads/teachers/pdf/'+data.pdf);
                $('#edit_showgambar').attr('src', 'storage/uploads/teachers/photos/'+data.gambar);
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
        var frm = $('#editForm');
        $('.errorKode').hide();
        $('.errorNama').hide();
        $('.errorNig').hide();
        $('.errorPhone').hide();
        $('.errorAlamat').hide();
        $('.errorTtl').hide();
        $('.errorJk').hide();
        $('.errorStatus').hide();
        $('.errorPdf').hide();
        $('.edit_errorGambar').hide();
        var url = "/guru/"+$('#edit_id').val();
        var formdata = new FormData($("#editForm")[0]);
        formdata.append('_method', 'PUT');
        console.log(url);

        $.ajax({
            method :'POST',
            url : url,
            data : formdata,
            dataType : 'json',
            processData: false,
            contentType: false,
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
                 if (data.errors.pdf) {
                  $('.edit_errorPdf').show();
                  $('.edit_errorPdf').text(data.errors.pdf);
                }
                if (data.errors.gambar){
                  $('.edit_errorGambar').show();
                  $('.edit_errorGambar').text(data.errors.gambar);
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

    // Delete Or Destroy 
     $('#table').on('click','.deleteBtn[data-id]',function(e){
        e.preventDefault();
        var url = $(this).data('id');
        console.log(url);
        swal({
           title: "Are you sure want to remove this item?",
           text: "Data akan terhapus permanen!",
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
                      swal("Deleted!", "Guru berhasil di hapus", "success");
                      table.ajax.reload(null,false);
                    }
                }
            });
          }else { swal.close(); }
        });
    });

    // dileng gmbr
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#edit_gambar").change(function () {
        readURL(this);
    });
    $("#gambar").change(function () {
        readURL(this);
    });
    
    

    


  });
</script>


 