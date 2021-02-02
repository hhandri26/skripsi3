<section class="content">
    <div class="row">
        <!-- foreach -->
        <?php foreach($materi as $row){;?>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>

                <div class="info-box-content">
                    <a href="<?php echo base_url('diskusi/start_diskusi/'.$row->id);?>"><span class="info-box-text"><?php echo $row->nama;?></span></a> 
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>
        <?php };?>
    </div>
</section>