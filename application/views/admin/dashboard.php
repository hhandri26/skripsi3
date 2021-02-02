<?php if($this->session->userdata('level')==1 || $this->session->userdata('kd_guru') ){?>
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
  <div class="row" style="border: 1px solid #171717;">
    <div class="col-md-12">
      <table class="table">
        <tbody>
          <tr>
            <td> <a href="<?php echo base_url('diskusi/materi_diskusi/jadwal');?>">JADWAL KOOPERATIVE LEARNING : Lihat semua diskusi Cooperative yang ada di sekolah</a> </td>
          </tr>
          <tr>
            <td> <a href="<?php echo base_url('diskusi/materi_diskusi/materi');?>">MATERI KOOPERATIVE LEARNING : Lihat semua diskusi Cooperative yang ada di sekolah</a> </td>
          </tr>
         
         
        </tbody>
      </table>
    </div>
  </div>
</div>





</section>

<section class="content">


</section>
<?php }else{ ;?>
  <section class="content">
  <div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Materi</span>
                    <span class="info-box-number"><?php echo $count_materi;?><small></small></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
  </div>
 

  <div class="row" style="border: 1px solid #171717;">
    <div class="col-md-12">
      <table class="table">
        <tbody>
          <tr>
            <td> <a href="<?php echo base_url('diskusi/materi_diskusi/'. $this->session->userdata('kelas'));?>">DISKUSI KOOPERATIVE LEARNING : Lihat semua diskusi Cooperative yang ada di sekolah</a> </td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="info-box">
      
      <div class="box-content">
        <span class="info-box-text"><h1><strong>Selamat Datang ,<?php echo $this->session->userdata('username');?><strong></h1></span>
        <img src="<?php echo base_url();?>/assets/img/Logo-smkn_1_Rangkasbitung.jpg">
      </div>
    </div>
</div>







</div>





</section>



<?php };?>






