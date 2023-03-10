<table class="table table-bordered table-striped">
        <thead>    
        <tr>
            <td>NIM</td>
            <td>NAMA</td>
            <td>FAKULTAS</td>
            <td>ALAMAT</td>
        </tr>
        </thead>
        <?php
            foreach ($hasil as $row){

        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>
            
        </tr>
        <?php
        }
        ?>
    </table>