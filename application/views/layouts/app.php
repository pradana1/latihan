<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href=" <?= base_url('/') ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Navbar -->
    <?php $this->load->view('layouts/_navbar') ?>
    <!-- End Navbar -->

    <!-- Content -->
    <?php $this->load->view($page); ?>
    <!-- End Content -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" <?= base_url('/') ?>assets/js/bootstrap.bundle.js"></script>
    <script src=" <?= base_url('/') ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src=" <?= base_url('/') ?>assets/js/bootstrap.js"></script>
</body>

</html>