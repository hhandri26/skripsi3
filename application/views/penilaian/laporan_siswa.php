<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
              
                <th>Pertemuan</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($table as $row ) {?>
            <tr>
            <td><?php echo $no++ ;?></td>
            <td><?php echo date('d F, Y', strtotime($row->tgl)) ;?></td>
            <td><?php echo $row->score ;?></td>
            
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
