<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:100%;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
    .wrapper{
      display: flex;

    }
    .text{
      position: absolute; 
      font-size: 20px; 
      padding: 30px 40px 40px 150px;
    text-align: CENTER;

    }
  </style>
</head>
<body>
<div class="wrapper">
    <div class="logo">
    <img src="<?php echo base_url('assets/img/Logo-smkn_1_Rangkasbitung.jpg');?>" width="70"  alt="">
    </div>
    <div class="text">
      <span>
      SEKOLAH MENEGAH KEJURUAN NEGRI 1
      <br>
      JL.DEWI SARTIKA NO.61 L RANGKASBITUNG 42314 TELP./FAX.(0252) 201895


      </span>
    </div>
  </div>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">No</th>
	  			<th class="normal">NISN</th>
	  			<th class="normal">Nama Murid</th>
	  			<th class="short">Nilai Tugas</th>
          <th class="short">Nilai Keaktifan</th>
          <th class="short">Nilai Akhir</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($data as $row): ?>
	  		  <tr>
              <td><?php echo $no++ ;?></td>
              <td><?php echo $row->nisn ;?></td>
              <td><?php echo $row->nama_murid ;?></td>
              <td><?php echo $row->nilai_tugas ;?></td>
              <td><?php echo $row->nilai_keaktifan ;?></td>
              <td><?php echo $row->nilai_akhir ;?></td>
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>