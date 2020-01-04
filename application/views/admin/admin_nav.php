<?php 
  $active = "class='active'";
  $class = 'active'; 
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="">
        <i class="fa fa-home"></i> <span>Dashboard</span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($nav_sub == 'home')? $active :""; ?>>
          <a href="<?php echo base_url('admin');?>">
        <i class="fa fa-home"></i> home</a></li>
      </ul>
    </li>
    
  <?php if($this->session->userdata('level')==1){?>
    <li class="treeview <?php echo ($nav_top == 'master')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-university"></i>
        <span>Master</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($nav_sub == 'guru')? $active :""; ?>>
          <a href="<?php echo base_url('master/guru');?>"><i class="fa fa-ellipsis-v"></i>Data Guru</a>
        </li>
        <li <?php echo ($nav_sub == 'mapel')? $active :""; ?>>
          <a href="<?php echo base_url('master/mapel');?>"><i class="fa fa-ellipsis-v"></i>Data Mata Pelajaran</a>
        </li>
        <li <?php echo ($nav_sub == 'ruangan')? $active :""; ?>>
          <a href="<?php echo base_url('master/ruangan');?>"><i class="fa fa-ellipsis-v"></i>Data Ruangan</a>
        </li>
        <li <?php echo ($nav_sub == 'murid')? $active :""; ?>>
          <a href="<?php echo base_url('master/murid');?>"><i class="fa fa-ellipsis-v"></i>Data Murid</a>
        </li>
        <li <?php echo ($nav_sub == 'jadwal')? $active :""; ?>>
          <a href="<?php echo base_url('master/jadwal');?>"><i class="fa fa-ellipsis-v"></i>Jadwal Mata Pelajaran</a>
        </li>
        <li <?php echo ($nav_sub == 'penilaian')? $active :""; ?>>
          <a href="<?php echo base_url('master/penilaian');?>"><i class="fa fa-ellipsis-v"></i>Master Penilaian</a>
        </li>
        <li <?php echo ($nav_sub == 'materi')? $active :""; ?>>
          <a href="<?php echo base_url('master/materi');?>"><i class="fa fa-ellipsis-v"></i>Master Materi</a>
        </li>
       
      </ul>
    </li>
   

    <li class="treeview <?php echo ($nav_top == 'Laporan')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-file-pdf-o"></i>
        <span>Laporan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo ($nav_sub == 'guru')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/guru');?>"><i class="fa fa-ellipsis-v"></i>Data Guru</a>
        </li>
        <li <?php echo ($nav_sub == 'mapel')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/mapel');?>"><i class="fa fa-ellipsis-v"></i>Data Mata Pelajaran</a>
        </li>
        <li <?php echo ($nav_sub == 'ruangan')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/ruangan');?>"><i class="fa fa-ellipsis-v"></i>Data Ruangan</a>
        </li>
        <li <?php echo ($nav_sub == 'murid')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/murid');?>"><i class="fa fa-ellipsis-v"></i>Data Murid</a>
        </li>
        <li <?php echo ($nav_sub == '')? $active :""; ?>>
          <a href="<?php echo base_url('admin/cetak/jadwal');?>"><i class="fa fa-ellipsis-v"></i>Jadwal Mata Pelajaran</a>
        </li>
       
      </ul>
    </li>
  <?php }elseif($this->session->userdata('kelas')){?>
    <li class="treeview <?php echo ($nav_top == 'Laporan')? $class :""; ?>">
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Cetak</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($nav_sub == 'mapel')? $active :""; ?>>
            <a href="<?php echo base_url('admin/cetak_mapel_murid/'.$this->session->userdata('kelas'));?>"><i class="fa fa-ellipsis-v"></i>Cetak Jadwal Mata Pelajaran</a>
          </li>
        </ul>
      </li>
      <li class="treeview <?php echo ($nav_top == 'diskusi')? $class :""; ?>">
        <a href="#">
          <i class="fa fa-weixin"></i>
          <span>Diskusi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($nav_sub == 'diskusi_table')? $active :""; ?>>
            <a href="<?php echo base_url('diskusi/start_diskusi/'. $this->session->userdata('kelas'));?>"><i class="fa fa-ellipsis-v"></i>Diskusi Pelajaran</a>
          </li>
        </ul>
      </li>
      <li class="treeview <?php echo ($nav_top == 'materi')? $class :""; ?>">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Materi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($nav_sub == 'materi')? $active :""; ?>>
            <a href="<?php echo base_url('master/download_materi/'. $this->session->userdata('kelas'));?>"><i class="fa fa-ellipsis-v"></i>Materi Pelajaran</a>
          </li>
        </ul>
      </li>
  <?php }else{ ?>
    <li class="treeview <?php echo ($nav_top == 'diskusi')? $class :""; ?>">
        <a href="#">
          <i class="fa fa-weixin"></i>
          <span>Diskusi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($nav_sub == 'diskusi_table')? $active :""; ?>>
            <a href="<?php echo base_url('diskusi');?>"><i class="fa fa-ellipsis-v"></i>Diskusi Pelajaran</a>
          </li>
        </ul>
      </li>
      <li class="treeview <?php echo ($nav_top == 'materi')? $class :""; ?>">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Materi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($nav_sub == 'materi')? $active :""; ?>>
            <a href="<?php echo base_url('master/pilih_kelas_materi');?>"><i class="fa fa-ellipsis-v"></i>Materi Pelajaran</a>
          </li>
        </ul>
      </li>
      <li class="treeview <?php echo ($nav_top == 'nilai')? $class :""; ?>">
        <a href="#">
          <i class="fa fa-table"></i>
          <span>Penilaian</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($nav_sub == 'nilai')? $active :""; ?>>
            <a href="<?php echo base_url('penilaian');?>"><i class="fa fa-ellipsis-v"></i>Input Nilai Siswa</a>
          </li>
        </ul>
      </li>
      <li class="treeview <?php echo ($nav_top == 'Laporan')? $class :""; ?>">
        <a href="#">
          <i class="fa fa-file-pdf-o"></i>
          <span>Cetak Jadwal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php echo ($nav_sub == 'mapel')? $active :""; ?>>
            <a href="<?php echo base_url('admin/cetak_mapel_guru/'.$this->session->userdata('id_guru'));?>"><i class="fa fa-ellipsis-v"></i>Cetak Jadwal Mata Pelajaran</a>
          </li>
        </ul>
      </li>
    
  <?php }?>

</ul>