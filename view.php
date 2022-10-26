<?php
require 'tugastr.php';
$sans = query("SELECT * FROM nilai");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <meta http-equif="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel data</title>
</head>
<body>
    <table border="1" cellpading = "10" cellspacing ="0">
        <h2>DATA NILAI</h2>
        <tr>
            <th>id_nilai</th>
            <th>nama</th>
            <th>kelas</th>
            <th>mapel</th>
            
            
        </tr>
        <?php foreach($sans as $row) :?>
        
            <tr>
                <td><?= $row['id_nilai'];?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kelas'];?></td>
                <td><?= $row['mapel'];?></td>
                

            </tr>


            <?php endforeach;?> 
    </table>
</body>
</html>         





    
    
    

    
