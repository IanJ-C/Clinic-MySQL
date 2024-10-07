<?php
include ('dbh.inc.php');

if($_POST['input'] == ""){
    $query = "SELECT * FROM daftar";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
    ?>
    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th class="text-center fs-md fs-sm" scope="col">Time</th>
                <th class="text-center fs-md fs-sm" scope="col">ID</th>
                <th class="text-center fs-md fs-sm" scope="col">Company</th>
                <th class="text-center fs-md fs-sm" scope="col">Department</th>
                <th class="text-center fs-md fs-sm" scope="col">Pasient Name</th>
                <th class="text-center fs-md fs-sm" scope="col">Birth Date</th>
                <th class="text-center fs-md fs-sm" scope="col">Treatment Date</th>
                <th class="text-center fs-md fs-sm" scope="col">Diagnose</th>
                <th class="text-center fs-md fs-sm" scope="col">Medicine</th>
                <th class="text-center fs-md fs-sm" scope="col">Action</th>
                <th class="text-center fs-md fs-sm" scope="col">Description</th>
                <th class="text-center fs-md fs-sm" scope="col">Complaints</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                $waktu = date_create($row['waktu']);
                $nik = $row['nik'];
                $perusahaan = $row['perusahaan'];
                $dept = $row['dept'];
                $nama = $row['nama'];
                $lahir = date_create($row['lahir']);
                $berobat = date_create($row['berobat']);
                $diagnosa = $row['diagnosa'];
                $obat = $row['obat'];
                $tindak = $row['tindak'];
                $keterangan = $row['keterangan'];
                $keluhan = $row['keluhan'];
            ?>
            <tr>
                <td class="text-center fs-md fs-sm"><?php echo date_format($waktu,"G:i"); ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $nik; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $perusahaan; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $dept; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $nama; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo date_format($lahir, "j/n/Y"); ?></td>
                <td class="text-center fs-md fs-sm"><?php echo date_format($berobat, "j/n/Y"); ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $diagnosa; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $obat; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $tindak; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $keterangan; ?></td>
                <td class="text-center fs-md fs-sm"><?php echo $keluhan; ?></td>    
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    }else{
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }
}
