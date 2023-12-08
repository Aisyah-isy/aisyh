<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= $judul; ?></title>
    <?php require_once('layout/_css.php'); ?>
    <style>
        .ekko-lightbox-nav-overlay a {
            color: goldenrod;
        }
    </style>
</head>

<body>
    <header class="header-area">

        <!-- Top Header Area -->
        <?php require_once('layout/_header.php'); ?>


        <!-- Logo Area -->
        <?php require_once('layout/_logo.php'); ?>


        <!-- Nav Area -->
        <?php require_once('layout/_navbar.php'); ?>

    </header>
    <!-- ##### Header Area End ##### -->


    <div class="single-blog-wrapper section-padding-50 wow fadeInUp">
        <div class="mb-4">
            <h6 class="text-center"><?= $judul; ?>-</h6>
        </div>
        <div class="single-blog-wrapper section-padding-50-100 clearfix wow fadeInUp">
            <div class="container">
                <h5></h5>
                <div class="row">
                    <div class="col-12 col-lg-9 mb-3">
                        <!-- Single Blog Area  -->
                        <?php foreach ($serch as $konten) { ?>
                            <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="w-160 h-90">
                                            <img src="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Blog Content -->
                                        <div class="single-blog-content">
                                            <div class="line"></div>
                                            <a href="<?= base_url('home/kategori/' . $konten['id_kategori']); ?>" class="post-tag"><?= $konten['kategori'] ?></a>
                                            <h4><a class="post-headline"><?= $konten['judul'] ?></a></h4>
                                            <p><a href="<?= base_url('home/artikel/' . $konten['slug']) ?>" class="btn btn-sm">Baca Selengkapnya...</a></p>
                                            <div class="post-meta">
                                                <p class="text-black">By <?= $konten['nama'] ?></p>
                                                <p class="text-black"><?= $konten['tanggal'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- ##### Sidebar Area ##### -->
                    <?php require_once('layout/_lastest_post.php'); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5></h5>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <p></p>
                </div>
            </div>
        </div>


    </div>

    <!-- ##### Footer Area Start ##### -->
    <?php require_once('layout/_footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <?php require_once('layout/_js.php'); ?>

</body>

</html>