<div class="box-body">
<form class="form-horizontal" action="<?php echo base_url('master/update_materi')?>" method="post" enctype="multipart/form-data" role="form">
    <div class="modal-body">
        
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
            <label class="col-lg-4 col-sm-4 control-label">Mata Pelajaran</label>
            <div class="col-lg-8">
                <select class="form-control" id="id_mapel" name="id_mapel">
                <option value="<?php echo $edit->id_mapel;?>"><?php echo $edit->nama_mapel;?></option>
                    <?php foreach ($mapel as $row){;?>
                        <option value="<?php echo $row->id;?>"><?php echo $row->nama_mapel;?></option>
                    <?php };?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">Nama Materi</label>
            <div class="col-lg-8">                        
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $edit->nama;?>">    
                <input type="hidden" name="id" value="<?php echo $edit->id;?>">                       
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-4 col-sm-4 control-label">file</label>
            <div class="col-lg-8">                        
                <input type="file" class="form-control" id="file" name="file">                           
            </div>
        </div>
        
    </div>
    <div class="modal-footer">
        
        <input type="submit" name="submit" class="btn btn-info" value="Update">
        
    </div>
</form>
</div>