<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
              
                <th>Nilai Tugas</th>
                <th>Nilai Keaktifan</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo $row->nilai_tugas ;?></td>
            <td><?php echo $row->nilai_keaktifan ;?></td>
            <td><?php echo $row->nilai_akhir ;?></td>
            
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
