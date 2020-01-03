<div class="box-body" >
    <div style="height: 500px; overflow-y: scroll;  overflow-x: hidden; padding: 40px;">
        <?php $i = 1;  foreach($diskusi as $row){?>
            <div class="panel panel-primary shadow" style="margin-top:15px; padding-top:10px;">
                <div class="panel-body">
                    <p class="smalltext">#<?php echo $i++ ;?></p>
                    <p><?php echo $row->des;?></p>
                
                
                    <p class="smalltext">Comment by: <a
                                href="#"> <?php echo $row->nama ?> </a>
                    </p>
                    <p class="smalltext">Created at :
                        <?php echo  date('d F, Y, H:i:s', strtotime($row->tgl)) ;?>
                    
                
                </div>
            </div>
        <?php };?>
        <form class="form-horizontal" action="<?php echo base_url('diskusi/submit')?>" method="post" role="form">
            <div class="form-group">
                <input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
                <input type="hidden" name="id_mapel" value="1">
                <input type="hidden" name="nama" value="<?php echo $this->session->userdata('username') ;?>">

                <textarea name="des" class="form-control" id="summernote" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info" value="Submit Diskusi">
            </div>
        </form>
    </div>
    
</div>