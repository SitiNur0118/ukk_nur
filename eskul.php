<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>SMKN 4 TASIKMALAYAA</title>
</head>
<body>
    
 <?php include 'navbar.php'; ?>

 <div class="container mt-5 my-5">
     <div class="row">
         <div class="col-lg-12">
             <div class="card border-0"> 
                 <h3 class="mb-0">Ekstrakurikuler</h3>
                 <h3 class="text-primary">Siswa</h3>
                 <div class="row">
                     <?php
                                $eskul = [
                                ["nama" => "PASKIBRA", "gambar" => "image/paskib.jpg"],
                                ["nama" => "PRAMUKA", "gambar" => "image/pramuka.jpg"],
                                ["nama" => "PMR", "gambar" => "image/pmr.jpg"],
                                ["nama" => "PLH", "gambar" => "image/plh.jpg"],
                                ["nama" => "IT CLUB", "gambar" => "image/itclub.jpg"],
                                ["nama" => "PKS", "gambar" => "image/pks.jpg"],
                                ["nama" => "PERISAI DIRI", "gambar" => "image/pd.jpg"],
                                ["nama" => "ENGLISH CLUB", "gambar" => "image/english.jpg"],
                                ["nama" => "CINEMATOGRAPHY", "gambar" => "image/cinema.jpg"],
                                ["nama" => "LASKAR PUSTAKA", "gambar" => "image/laskar.jpg"],
                                ["nama" => "IRMA", "gambar" => "image/irma.jpg"],
                                ["nama" => "BULU TANGKIS", "gambar" => "image/pb.jpg"],
                                ["nama" => "FUTSAL", "gambar" => "image/futsal.jpg"],
                                ["nama" => "BASKET", "gambar" => "image/basket.jpg"],
                                ["nama" => "VOLLY", "gambar" => "image/volly.jpg"],
                                ["nama" => "SEPAK BOLA", "gambar" => "image/bola.jpg"],
                                ];

                                foreach ($eskul as $item) { ?>
                                    <div class="col-lg-3  ">
                                        <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                            <img src="<?= $item['gambar']; ?>" alt="" width="150" height="150">
                                            <div class="card-body  border-0">
                                                <h4><?= $item['nama']; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

</body>
</html>