<div class="box-body">
<form class="form-horizontal" action="<?php echo base_url('master/update_jadwal')?>" method="post" enctype="multipart/form-data" role="form">
    <div class="modal-body">
        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Nama Guru</label>
            <div class="col-lg-8">
                <input type="hidden" name="id" value="<?php echo $edit->id;?>">
                <select class="form-control" id="id_guru" name="id_guru">
                <option value="<?php echo $edit->id_guru;?>"><?php echo $edit->nama_guru;?></option>
                <?php foreach($guru as $row){?>
                    <option value="<?php echo $row->id?>"><?php echo $row->kd_guru.' '. $row->nama_guru;?></option>
                <?php }?>
                </select>
                
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Kelas</label>
            <div class="col-lg-8">
                
                    <select class="form-control" id="id_kelas" name="id_kelas">
                        <option value="<?php echo $edit->id_kelas;?>"><?php echo $edit->kelas;?></option>
                    <?php foreach($kelas as $row3){?>
                        <option value="<?php echo $row3->id;?>"><?php echo $row3->nama_ruangan;?></option>
                        <?php }?>
                    </select>
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Materi</label>
            <div class="col-lg-8">
                
                    <select class="form-control" id="id_materi" name="id_materi">
                        <option value="<?php echo $edit->id_materi;?>"><?php echo $edit->nama_materi;?></option>
                    <?php foreach($kelas as $row3){?>
                        <option value="<?php echo $row3->id;?>"><?php echo $row3->nama_ruangan;?></option>
                        <?php }?>
                    </select>
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Tanggal Mulai</label>
            <div class="col-lg-8">
                <input type="date" name="date_start" id="date_start" value="<?php echo $edit->date_start;?>" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Tanggal Selesai</label>
            <div class="col-lg-8">
            <input type="date" name="date_end" id="date_end" value="<?php echo $edit->date_end;?>" class="form-control">
            </div>
        </div>
        
    </div>
    <div class="modal-footer">
        
        <input type="submit" name="submit" class="btn btn-info" value="Update">
        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
    </div>
</form>
</div>