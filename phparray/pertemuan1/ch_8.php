<?php

$nama = [
    [   
        "No"  => "", 
        "Nama" => "Riska",
        "Kelas" => "XII RPL1",
        "Alamat" => "Pekalongan"
    ],

    [   
        "No"  => "",
        "Nama" => "Putri",
        "Kelas" => "XII RPL1",
        "Alamat" => "Pekalongan"
    ],

    [   
        "No" => "", 
        "Nama" => "Rehan",
        "Kelas" => "XII RPL1",
        "Alamat" => "Pekalongan"
    ]

    

    
    ];

$nomor = 1;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
    <table border="1" cellpadding="10" cellspacing="0">


    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
    </tr>

  <tr>

    <?php foreach($nama as $a) : ?>

    <td><?= $nomor++; ?></td>  
    <td><?= $a["Nama"]; ?></td>
    <td><?= $a["Kelas"]; ?></td>
    <td><?= $a["Alamat"]; ?></td>

  </tr>

<?php endforeach;?>



    </table>
    
      

</body>
</html>