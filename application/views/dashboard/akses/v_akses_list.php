<!-- Hover effect table starts -->
<div class="card">
    <div class="card-header">
    <button type="button" class="btn btn-primary waves-effect waves-light " style="float: left" data-toggle="modal" data-target="#tambahModal" data-placement="top" title="Tambah Data "><i class="icofont icofont-ui-add"></i><span class="m-l-10">Tambah Data</span></button>   
    <button type="button" class="btn btn-info waves-effect waves-light " style="float: right" data-placement="top" title="Print"><i class="icofont icofont-print"></i><span class="m-l-10">Print</span></button>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-sm-12 table-responsive">
            <table id="example1" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th style="width:5%">No.</th>
            <th style="width:55%">Akses</th>
            <th class="text-center">Status Aktif</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No.</th>
            <th>Akses</th>
            <th class="text-center">Status Aktif</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        <?php
        $no=0;
        foreach ($data->result_array() as $i) :
            $no++;
            $kd=$i['akses_kd'];
            $nama=$i['akses_nama'];
            $statusAktif=$i['akses_statusAktif'];
        ?>

        <tr>
            <td class="text-center"><?php echo $no;?>. </td>
            <td><?php echo $nama;?></td>
            <td class="text-center"><?php echo $statusAktif;?></td>
            <td style="float: center">
                <button type="button" class="btn btn-info btn-mini waves-effect waves-light" data-toggle="modal" data-target="#editModal<?php echo $kd;?>" data-placement="top" title="Edit"><i class="icofont icofont-edit"></i><span class="m-l-10">Edit</span></button>
            </td>
        </tr>

        <?php 
            endforeach;
        ?>
    </tbody>
    </table>  
            </div>
        </div>
    </div>
</div>
<!-- Hover effect table ends -->
