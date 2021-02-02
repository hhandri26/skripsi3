<div class="box-body">
    <form class="form-horizontal" action="<?php echo base_url('diskusi/start_diskusi')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="form-group">
            <label class="control-label">Pilih Kelas</label>
            
            <select class="form-control" id="id_kelas" name="id_kelas" onchange="go_diskusi()">
                <option value="">- Pilih Kelas -</option>
                <?php foreach ($kelas as $row){;?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->nama_ruangan;?></option>
                <?php };?>
            </select>
        </div>
        
    </form>
</div>
<script>
    function go_diskusi(){
       var id_kelas =  $('#id_kelas').val();
       if(id_kelas !==''){           
            window.location.href="<?php echo base_url('diskusi/materi_diskusi/');?>" + id_kelas;
       }
    }

</script>