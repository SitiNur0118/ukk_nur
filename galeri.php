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

    <?php
    function getImages()
    {
        return [
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg'
        ];
    }
    $galeri = getImages();
    $i = 0;
    ?>
    <div class="container p-4 mt-4 my-4">
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

        <?php
        $galeri = [
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg',
            'image/hut1.jpg'
        ];
        $i = 0;
        ?>
        <div class="container p-4 mt-4 my-4">
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
</body>

</html>