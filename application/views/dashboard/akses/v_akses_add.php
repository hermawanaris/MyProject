<!-- Modal Tambah Data-->
<div class="modal fade modal-flex" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>

      </div>
      <div class="modal-body">
        <form action="" method="post">
            <div class="form-group row">
                <label for="exampleInputEmail1" class="col-md-3 col-form-label form-control-label">Akses</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="akses" id="akses" placeholder="Input Akses" autofocus required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" >
                </div>
            </div>
            <input type="hidden" name="createdby" value="<?php echo $this->session->userdata('ses_nip');?>">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            
        </form>

      </div>
      
    </div>
  </div>
</div>