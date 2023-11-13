<?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)


            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            $query = mysqli_query($conn, "SELECT * FROM showroom_mobil");
            $data = [];
            while ($i=mysqli_fetch_assoc($query)){
                $data[] = $i;
            }
            

           
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            
        </div>
        <div>
            <table class="table-info" border="1" cellpadding="10" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                    </tr>
                </thead>
            <tbody>
                <?php foreach($data as $j) : ?>
                    <tr>
                        <td><?php echo $j['id']?></td>
                        <td><?php echo $j['nama_mobil']?></td>
                        <td><?php echo $j['brand_mobil']?></td>
                        <td><?php echo $j['warna_mobil']?></td>
                        <td><?php echo $j['tipe_mobil']?></td>
                        <td><?php echo $j['harga_mobil']?><button type="button" class="button-primary"><a href="form_detail_mobil.php=?">Detail</a></button></td>
                    </tr>
                <?php endforeach ; ?>
                
            </tbody>
            </table>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
