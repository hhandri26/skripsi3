<a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb">
     <i class="fa fa-plus"></i> Tambah Nilai
</a>
<form action="<?php echo base_url('admin/cetak/nilai');?>"  method="post">
    <input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
    <button type="submit" name="submit" class="btn btn-info">Cetak Nilai</button>
</form>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="add-tb" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Input Nilai</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('penilaian/add_nilai')?>" method="post" role="form">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama Siswa</label>
                        <div class="col-lg-8">
                            <select name="id_siswa" id="" class="form-control">
                                <option value="">- Pilih Siswa -</option>
                                <?php $no=1; foreach($siswa as $row){?>
                                    <option value="<?php echo $row->id;?>"> <?php echo $row->nama_murid ;?> </option>                                  

                                <?php }?>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nilai Tugas</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="nilai_tugas">
                            <input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
                            <input type="hidden" name="id_mapel" value="1">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nilai Keaktifan</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="nilai_keaktifan">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nilai Akhir</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="nilai_akhir">

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
            <form class="form-horizontal" action="<?php echo base_url('penilaian/delete_nilai')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                           <label class="col-lg-4 col-sm-4 control-label">Nama Murid</label>
                            <div class="col-lg-8">
                                <input type="hidden" id="id" name="id">
                                <input type="hidden" id="id_kelas" name="id_kelas">
                                <input type="text" name="nama_murid" id="nama_murid" class="form-control" readonly>
                                
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

<div class="box-body">
   
    <div class="row">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Murid</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai Keaktifan</th>
                        <th>Nilai Akhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                    <tr>
                    <td><?php echo $no++ ;?></td>
                    <td><?php echo $row->nisn ;?></td>
                    <td><?php echo $row->nama_murid ;?></td>
                    <td><?php echo $row->nilai_tugas ;?></td>
                    <td><?php echo $row->nilai_keaktifan ;?></td>
                    <td><?php echo $row->nilai_akhir ;?></td>
                    <td>
                        <a  href                 ="<?php echo base_url('penilaian/edit_nilai/'.$row->id.'/'.$id_kelas);?>"
                            class="show-modal btn btn-info btn-sm">
                            <i class="glyphicon glyphicon-pencil"></i> 
                        </a>

                        <a  href                 ="javascript:;"
                            data-id              ="<?php echo $row->id ?>"
                            data-id_kelas        ="<?php echo $id_kelas ?>"
                            data-nama_murid      ="<?php echo $row->nama_murid ?>"
                            data-toggle          ="modal"
                            data-target          ="#delete-data"
                            class="show-modal btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> 
                        </a>
                    </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
  

</div>

<script>
var formData = new Vue({
    el: '#formData',
    data: {
        list_forms:[],
    },
    methods: {

    },
    watch: {

    },
    created() {
    axios.get("<?php echo base_url('penilaian/get_data_nilai/'.$id_kelas) ?>")
        .then(response => {
            if (response.status == 200) {
                this.list_forms = response.data;
            }
    }).catch(error => {
        console.log(error);
    });

    }


})


    $(document).ready(function() {
       

         // modal delete data
          $('#delete-data').on('show.bs.modal', function (event) {
            var div     = $(event.relatedTarget)
            var modal   = $(this)
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#id_kelas').attr("value",div.data('id_kelas'));
            modal.find('#nama_murid').attr("value",div.data('nama_murid'));
           
           
        });
    });


</script>