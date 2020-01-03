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
      width: 20px;
    }
 
    .normal{
      width: 120px;
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
  </style>
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">#</th>
                    <th class="normal">Nama Guru</th>
                    <th class="normal">Mata Pelajaran</th>
                    <th class="normal">Kelas</th>
                    <th class="normal">Hari</th>
                    <th class="normal">jam</th>
	  		    </tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($jadwal as $row): ?>
	  		  <tr>
	  			    <td><?php echo $no; ?></td>
                    <td><?php echo $row->nama_guru ;?></td>
                    <td><?php echo $row->nama_mapel ;?></td>
                    <td><?php echo $row->kelas ;?></td>
                    <td><?php echo $row->hari ;?></td>
                    <td><?php echo $row->waktu ;?></td>
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>