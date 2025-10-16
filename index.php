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

<!-- CAROUSEL -->
 <!-- CAROUSEL -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/smk4.jpg" class="d-block w-100" alt="" width="800" height="800">
      <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
        <h2 class="text-white fw-bold fs-1 text-shadow bg-dark bg-opacity-75 px-4 py-3 rounded">
          SELAMAT DATANG DI WEBSITE SMKN 4 TASIKMALAYA
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- TUTUP CAROUSEL -->

<!-- TUTUP CAROUSEL -->

<!-- STATISTIK -->
    <div class="row m-4">
        <div class="row text-center g-3 ">
            <div class="col-md-3">
                <div class="card text-white h-100 bg-primary">
                    <div class="card-body">
                        <i class="bi bi-person-video3 display-4"></i>
                        <h4 class="mt-3">100 orang</h4>
                        <p>Guru / pendidik</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white h-100 bg-primary">
                    <div class="card-body">
                        <i class="bi bi-people-fill display-4"></i>
                        <h4 class="mt-3">1500 orang</h4>
                        <p>Siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white h-100 bg-primary">
                    <div class="card-body">
                       <i class="bi bi-person-badge display-4"></i>
                        <h4 class="mt-3">10 orang</h4>
                        <p>Staf TU</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white h-100 bg-primary">
                    <div class="card-body">
                        <i class="bi bi-lightbulb display-4"></i>
                        <h4 class="mt-3">18</h4>
                        <p>Ekstrakurikuler</p>
                    </div>
                </div>
            </div>
<!-- STATISTIK -->
 


<!-- BERITA -->
   <div class="container p-5 mt-5 my-5">
         <div class="row">
             <div class="col-lg-12">
                 <h3 class="mb-0">Berita</h3>
                 <h3 class="text-primary">Terkini</h3>
                 <p>Berita terbaru, cerita inspiratif dan informasi terkini seputar kegiatan serta prestasi sekolah kami.</p>
                 <div class="row">
                     <div class="col-lg-4">
                         <div class="card">
                             <div class="card-header">
                                 <img src="image/sft.jpg" alt="" width="385" height="200">
                             </div>
                             <div class="card-body">
                                 <h3>PELATIHAN SEFETY RIDING SMKN4 TASIKMALAYA</h3>
                                 <a class="btn btn- text-white bg-primary" href="https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-di-jawa-barat">Baca Selengkapnya</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4">
                         <div class="card">
                             <div class="card-header">
                                 <img src="image/jb.jpg" alt="" width="385" height="200">
                             </div>
                             <div class="card-body">
                                 <h3>SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja</h3>
                                 <a class="btn btn- text-white bg-primary" href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/">Baca Selengkapnya</a>
                             </div>
                         </div>
                     </div>
                      <div class="col-lg-4">
                         <div class="card">
                             <div class="card-header">
                                 <img src="image/exp.jpg" alt="" width="385" height="200">
                             </div>
                             <div class="card-body">
                                 <h3>Siswa SMKN 4 Tasikmalaya Adu Inovasi dan Kreativitas di Expo Creanova</h3>
                                 <a class="btn btn- text-white bg-primary" href="https://radartasik.id/2023/03/02/siswa-smkn-4-tasikmalaya-adu-inovasi-dan-kreativitas-di-expo-creanova/">Baca Selengkapnya</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
 <!-- TUTUP BERITA -->


 <!-- GALERI -->
 <?php
 $galeri =[
    'image/hut1.jpg',
    'image/hut1.jpg',
    'image/hut1.jpg',
    'image/hut1.jpg',
    'image/hut1.jpg',
    'image/hut1.jpg'
 ];
 $i = 0;
 ?>
 <div class="container p-3 mt-3 my-3">
            <h3 class="mb-0 my-5 ">Galeri</h3>
            <h3 class="text-primary">Sekolah</h3>
            <div class="row">
                <div class="card">
                    <div class="col-lg-12">
                        <h3 class="text-center">PERINGATAN HUT RI KE-80</h3>
                        <hr>
                        <div class="row m-3">
                            <?php while ($i < count($galeri)): ?>
                                <div class="col-lg-4 mt-4">
                                    <img src="<?= $galeri[$i] ?>" class="img-fluid rounded">
                                </div>
                                <?php $i++; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-3 my-3">
                 <a class="btn btn-primary" href="galeri.php">intip lainya</a>
            </div>
 <!-- TUTUP GALERI -->

 <!-- FOOTTER -->
   <div class="row pt-5 my-3 bg-primary">
   <div class="col-lg-12">
     <div class="row">
       <div class="col-lg-5">
         <div class="text-white">
           <div class="card-body">
             <h2>Alamat</h2>
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.213163631709!2d108.25189907588084!3d-7.329939972091708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59eeb6bda36f%3A0xa9e724a275da6c2d!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1755673543639!5m2!1sid!2sid"
               style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
         </div>
       </div>

       <div class="col-lg-4">
         <div class="text-white">
           <div class="card-body">
             <h2>Kontak</h2>
             <hr>
             <p class="bi bi-telephone m-1"> +62265312059</p>
             <p class="bi bi-envelope"> info@smkn4-tsm.sch.id</p>
             <hr>
             <div class="d flex gap-3">
               <a href="https://www.facebook.com/4smkn/" target="_blank" class="text-decoration-none text-white"><i class="bi bi-facebook"></i></a>
               <a href="https://www.instagram.com/smkn4tsmofficial/?igsh=N3k1MTlyeXo4cW9q#" target="_blank" class="text-decoration-none text-white"><i class="bi bi-instagram"></i></a>
               <a href="https://www.tiktok.com/@smkn4tasikmalaya?is_from_webapp=1&sender_device=pc" target="_blank" class="text-decoration-none text-white"><i class="bi bi-tiktok"></i></a>
               <a href="https://www.youtube.com/@smkn4tasikmalayamediaoffic704" target="_blank" class="text-decoration-none text-white"><i class="bi bi-youtube"></i></a>
             </div>
           </div>
         </div>
       </div>

       <div class="col-lg-3">
         <div class="text-white">
           <div class="card-body">
             <h2>Link Lainya</h2>
             <p><a href="https://kemendikdasmen.go.id/" class="text-white">Kemdikbud</a></p>
             <p><a href="https://dapo.kemendikdasmen.go.id/" class="text-white">Dapodikdasmen</a></p>
             <p><a href="https://psmk.jabarprov.go.id/" class="text-white">PSMK</a></p>
             <p><a href="https://disdik.jabarprov.go.id/" class="text-white">Disdik jabar</a></p>
           </div>
         </div>
       </div>
       <div class="text-center text-white">
         <hr>
         <small>© 2025. SMK Negeri 4 Tasikmalaya.</small>
         <br>
         <small>All rights reserved.</small>
         <hr>
       </div>
     </div>
   </div>
 </div>
 <!-- FOOTTER -->
</body>
</html>