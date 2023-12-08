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


    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-50 wow fadeInUp">
        <div class="mb-1 ">
            <h6 class="text-center">Saran-</h6>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">
                        <h5>Saran Anda Bantuan Kami</h5>
                        <!-- Contact Form -->
                        <form action="<?= base_url('home/saran/') ?>" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="nama" id="name" class="border bg-light" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label class="ms-3">Nama</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" class="border bg-light" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label class="ms-3">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="pesan" id="message" class="border bg-light" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label class="ms-3">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn original-btn">Kirim...</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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