<div class="box-body">
    <form class="form-horizontal" action="<?php echo base_url('penilaian/update_nilai')?>" method="post" role="form">
        <div class="modal-body">
            <div class="form-group">
                <label class="col-lg-4 col-sm-4 control-label">Pertemuan</label>
                <div class="col-lg-8">
                    <select name="id_penilaian" id="" class="form-control">
                    <option value="<?php echo $edit->id_penilaian;?>"> <?php echo date('d F, Y', strtotime($edit->tgl));?> </option>
                    <?php $no=1; foreach($pertemuan as $row){?>
                        <option value="<?php echo $row->id;?>"> <?php echo date('d F, Y', strtotime($row->tgl));?> </option>
                    <?php }?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-4 col-sm-4 control-label">Nama Siswa</label>
                <div class="col-lg-8">
                    <select name="id_siswa" id="" class="form-control">
                            <option value="<?php echo $edit->id_siswa;?>"> <?php echo $edit->nama_murid ;?> </option>
                        <?php $no=1; foreach($siswa as $row){?>
                            <option value="<?php echo $row->id;?>"> <?php echo $row->nama_murid ;?> </option>                                  

                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-4 col-sm-4 control-label">Nilai</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="score" value="<?php echo $edit->score;?>">
                    <input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
                    <input type="hidden" name="id_mapel" value="1">
                    <input type="hidden" name="id" value="<?php echo $edit->id ?>">

                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            
            <input type="submit" name="submit" class="btn btn-info" value="update">
            
        </div>
    </form>
</div>