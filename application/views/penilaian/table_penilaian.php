<a href="javascript:;" class="add-modal btn btn-info btn-sm" data-toggle ="modal" data-target="#add-tb">
     <i class="fa fa-plus"></i>
</a>
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
                        <label class="col-lg-4 col-sm-4 control-label">Pertemuan</label>
                        <div class="col-lg-8">
                           <select name="id_penilaian" id="" class="form-control">
                            <option value="">- Pilih Pertemuan -</option>
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
                                <option value="">- Pilih Siswa -</option>
                                <?php $no=1; foreach($siswa as $row){?>
                                    <option value="<?php echo $row->id;?>"> <?php echo $row->nama_murid ;?> </option>                                  

                                <?php }?>
                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nilai</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="score">
                            <input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
                            <input type="hidden" name="id_mapel" value="1">

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
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="panel-body" style="overflow-x:auto;">
                    <table class="table" id="formData">
                        <tbody>
                            <!-- looping siswa -->
                            <tr v-for="form in list_forms">
                                <td style="width: 15%;"><span class="badge">{{form.nama_murid}}</span>&nbsp;&nbsp; NISN : {{form.nisn}}</td>
                                <td>
                                    <table cellspacing="2" cellpadding="2" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- looping bulan -->
                                                <th v-for="row in form.nilai" >
                                                    <span>Pertemuan ke - {{row.pertemuan}} Periode {{row.tgl}}</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <!-- looping bulan + nilai -->
                                                <td v-for="row in form.nilai">
                                                    <span >
                                                       {{row.score}}
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- end looping -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Murid</th>
                        <th>Pertemuan</th>
                        <th>Score</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                    <tr>
                    <td><?php echo $no++ ;?></td>
                    <td><?php echo $row->nisn ;?></td>
                    <td><?php echo $row->nama_murid ;?></td>
                    <td><?php echo date('d F, Y', strtotime($row->tgl)) ;?></td>
                    <td><?php echo $row->score ;?></td>
                    <td>
                        <a  href                 ="#"
                            class="show-modal btn btn-info btn-sm">
                            <i class="glyphicon glyphicon-pencil"></i> 
                        </a>

                        <a  href                 ="javascript:;"
                            data-id              ="<?php echo $row->id ?>"
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

</script>