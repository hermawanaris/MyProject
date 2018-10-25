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
                <label for="exampleInputEmail1" class="col-md-3 col-form-label form-control-label">Username</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Input Username" pattern="[a-z]{1,15}" title="Format username tidak boleh menggunakan spasi" required autofocus oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" >
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail1" class="col-md-3 col-form-label form-control-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp" placeholder="Input Password " data-eye required autofocus oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleSelect1" class="col-md-3 col-form-label form-control-label">Pegawai</label>
                <div class="col-sm-8">
                <select class="form-control " name="pegawai" id="exampleSelect1" required id="doc_type" oninvalid="this.setCustomValidity('Silahkan pilih pegawai.')" oninput="setCustomValidity('')">
                    <option value="">&mdash; Pilih &mdash;</option>
                    
                </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="exampleSelect1" class="col-md-3 col-form-label form-control-label">Level</label>
                <div class="col-sm-8">
                <select class="form-control " name="level" id="exampleSelect1" required id="doc_type" oninvalid="this.setCustomValidity('Silahkan pilih level.')" oninput="setCustomValidity('')">
                    <option value="">&mdash; Pilih &mdash;</option>
                    
                </select>
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