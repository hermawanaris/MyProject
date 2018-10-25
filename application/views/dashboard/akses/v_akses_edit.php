<?php foreach ($data->result_array() as $i) :
    $kd=$i['akses_kd'];
    $nama=$i['akses_nama'];
    $statusAktif=$i['akses_statusAktif'];
?>
<!-- Modal Edit Data-->
<div class="modal fade modal-flex" id="editModal<?php echo $kd;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>

      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'akses/update_akses'?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-control-label">Akses</label>
                <input type="hidden" name="kd" value="<?php echo $kd;?>">
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>" readonly>
            </div>
            
            <fieldset class="form-group">
                <label class="form-control-label">Status Aktif</label>
                <div class="form-check">
                <?php if($statusAktif=='Ya'):?>
                    <label for="optionsRadios1" class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" value="Ya" id="optionsRadios1" checked>
                        YA
                    </label>
                </div>
                <div class="form-check">
                
                    <label for="optionsRadios2" class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" value="Tidak" id="optionsRadios2">
                        TIDAK
                    </label>
                </div>
                

                <?php else:?>
                <div class="form-check">
                    <label for="optionsRadios1" class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" value="Ya" id="optionsRadios1" >
                        YA
                    </label>
                </div>
                <div class="form-check">
                    <label for="optionsRadios2" class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" value="Tidak" id="optionsRadios2" checked>
                        TIDAK
                    </label>
                </div>
                <?php endif;?>
            </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            
        </form>

      </div>
      
    </div>
  </div>
</div>
<?php endforeach;?>