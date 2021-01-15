<section class="content">
  <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        
          
        
            
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Murid</span>
                    <span class="info-box-number"><?php echo $count_murid;?><small></small></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Guru</span>
                    <span class="info-box-number"><?php echo $count_guru;?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Materi</span>
                    <span class="info-box-number"><?php echo $count_materi;?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Kelas</span>
                    <span class="info-box-number"><?php echo $count_kelas;?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
      
    
    </div>

    


    


  </div>





</section>

<section class="content">
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      
        
      
          
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="info-box">
              <div class="info-box-content">
            <span class="info-box-text"><h1><strong>Jadwal Cooperative Learning <strong></h1></span>
          
        </div>
              <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Hari</th>
            <th>jam</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($jadwal as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->nama_guru ;?></td>
            <td><?php echo $row->nama_mapel ;?></td>
            <td><?php echo $row->kelas ;?></td>
            <td><?php echo $row->hari ;?></td>
            <td><?php echo $row->waktu ;?></td>
            
            </tr>
        <?php } ?>
        </tbody>
    </table>
              </div>
            </div>
  </div>
</div>

</section>






