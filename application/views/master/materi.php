<?php if($this->session->userdata('level') !== null || $this->session->userdata('kd_guru') !== null ){;?>
<a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb">
     <i class="fa fa-plus"></i>
</a>
<?php }?>
<!-- modal add -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Tambah</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('master/add_materi')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                   
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Kelas & Ruangan</label>
                        <div class="col-lg-8">
                            <select class="form-control" id="id_kelas" name="id_kelas">
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
                                <?php foreach ($mapel as $row){;?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->nama_mapel;?></option>
                                <?php };?>
                            </select>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Materi</label>
                        <div class="col-lg-8">                        
                            <input type="text" class="form-control" id="nama" name="nama">                           
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">file</label>
                        <div class="col-lg-8">                        
                            <input type="file" class="form-control" id="file" name="file">                           
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Deskripsi Materi</label>
                        <div class="col-lg-8">  
                            <textarea name="" id="" cols="30" rows="10" class="form-control" name="deskripsi"></textarea>                      
                                                 
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="Tambah">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Hapus -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Anda Yakin Hapus Ini?</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('master/delete_materi')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Materi</label>
                            <div class="col-lg-8">
                                <input type="hidden" id="id" name="id">
                                <input type="text" name="nama" id="nama" class="form-control" readonly>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-danger" value="Hapus">
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- modal view -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="view-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Lihat</h4>
            </div>
            <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                   
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Kelas & Ruangan</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="nama_ruangan" name="nama" readonly="">      
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Mata Pelajaran</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="nama_mapel" name="nama" readonly="">      
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Materi</label>
                        <div class="col-lg-8">                        
                            <input type="text" class="form-control" id="nama" name="nama" readonly="">                           
                        </div>
                    </div>

                  

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Deskripsi Materi</label>
                        <div class="col-lg-8">  
                        <input type="text" class="form-control" id="deskripsi" name="nama" readonly="">  
                          
                                                 
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Mata Pelajaran</th>
                <th>Nama Materi</th>
                <th>Deskripsi</th>
                
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->nama_ruangan ;?></td>
            <td><?php echo $row->nama_mapel ;?></td>
            <td><?php echo $row->deskripsi ;?></td>
            <td> <a href="<?php echo base_url('assets/materi/'.$row->file);?>" target="_blank"> <?php echo $row->nama ;?> </a></td>
            <?php if($this->session->userdata('level') !== null || $this->session->userdata('kd_guru') !== null ){;?>
            <td>
                <a  href ="<?php echo base_url('master/edit_materi/'.$row->id);?>"  class="btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i> 
                </a>

                <a  href                 ="javascript:;"
                    data-id              ="<?php echo $row->id ?>"
                    data-nama            ="<?php echo $row->nama ?>"
                    data-toggle          ="modal"
                    data-target          ="#delete-data"
                    class="show-modal btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i> 
                </a>
                <a  href                 ="javascript:;"
                    data-id              ="<?php echo $row->id ?>"
                    data-nama            ="<?php echo $row->nama ?>"
                    data-nama_mapel      ="<?php echo $row->nama_mapel ?>"
                    data-nama_ruangan    ="<?php echo $row->nama_ruangan ?>"
                    data-deskripsi       ="<?php echo $row->deskripsi ?>"
                    data-toggle          ="modal"
                    data-target          ="#view-tb"
                    class="show-modal btn btn-info btn-sm">
                    <i class="fa fa-eye"></i> 
                </a>
            </td>
            <?php }elseif($this->session->userdata('kelas')){?>
            <td>
            <a  href                 ="javascript:;"
                    data-id              ="<?php echo $row->id ?>"
                    data-nama            ="<?php echo $row->nama ?>"
                    data-nama_mapel      ="<?php echo $row->nama_mapel ?>"
                    data-nama_ruangan    ="<?php echo $row->nama_ruangan ?>"
                    data-deskripsi       ="<?php echo $row->deskripsi ?>"
                    data-toggle          ="modal"
                    data-target          ="#view-tb"
                    class="show-modal btn btn-info btn-sm">
                    <i class="fa fa-eye"></i> 
                </a>
            </td>
                

            <?php };?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
         // modal delete data
          $('#delete-data').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama').attr("value",div.data('nama'));
        });

        $('#view-tb').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#nama').attr("value",div.data('nama'));
            modal.find('#nama_mapel').attr("value",div.data('nama_mapel'));
            modal.find('#nama_ruangan').attr("value",div.data('nama_ruangan'));
            modal.find('#deskripsi').attr("value",div.data('deskripsi'));
        });
    });
</script>
