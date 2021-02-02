   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Tambah</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('master/edit_guru')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">NIP Guru</label>
                        <div class="col-lg-8">
                            <input type="hidden" value="<?php echo $edit->id;?>" name="id" >
                            <input type="text" class="form-control" id="kd_guru" name="kd_guru" value="<?php echo $edit->kd_guru;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Guru</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $edit->nama_guru;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Email</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $edit->email;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">No Tlpn</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="no_tlpn" name="no_tlpn" value="<?php echo $edit->no_tlpn;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">agama</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $edit->agama;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Jenis Kelamin</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="<?php echo $edit->jenis_kelamin;?>"><?php echo $edit->jenis_kelamin;?></option>
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Mata Pelajaran</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="mapel" name="mapel">
                                    <option value="<?php echo $edit->id_mapel;?>"><?php echo $edit->nama_mapel;?></option>
                                <?php foreach ($mapel as $row){;?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->nama_mapel;?></option>
                                <?php };?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Alamat</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $edit->alamat;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Tgl Lahir</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $edit->tgl_lahir;?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="Update">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
