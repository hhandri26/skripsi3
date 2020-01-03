<div class="box-body">
<form class="form-horizontal" action="<?php echo base_url('master/update_penilaian')?>" method="post" enctype="multipart/form-data" role="form">
    <div class="modal-body">
        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Bulan</label>
            <div class="col-lg-8">
                <select class="form-control" id="id_bulan" name="id_bulan">
                    <option value="<?php echo $edit->id_bulan;?>"><?php echo $edit->nama_bulan;?></option>
                    <?php foreach ($bulan as $row){;?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->nama_bulan;?></option>
                    <?php };?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Kelas & Ruangan</label>
            <div class="col-lg-8">
                <select class="form-control" id="id_kelas" name="id_kelas">
                    <option value="<?php echo $edit->id_kelas;?>"><?php echo $edit->nama_ruangan;?></option>
                    <?php foreach ($kelas as $row){;?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->nama_ruangan;?></option>
                    <?php };?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Tanggal</label>
            <div class="col-lg-8">                        
                <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $edit->tgl?>" >
                <input type="hidden" name="id" value="<?php echo $edit->id;?>">                           
            </div>
        </div>
        
    </div>
    <div class="modal-footer">
        
        <input type="submit" name="submit" class="btn btn-info" value="Update">
        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
    </div>
</form>
</div>