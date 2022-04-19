<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Backoffice">
    <meta name="author" content="Universidad Colegio Mayor de Cundinamarca">

    <title><?= $this->renderSection('title') ?> | Unicolmayor © Admin Campus Virtual</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607725121/favicon_pvtmxa.png" type="image/x-icon">


    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="/assets/backoffice/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/backoffice/css/sb-admin-2.min.css" rel="stylesheet">
    <?= $this->renderSection('css') ?>
</head>

<body id="page-top">
    <?= $this->include('Admin/layouts/header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('Admin/layouts/footer') ?>
    <?= $this->renderSection('js') ?>

    <script>
        setTimeout(() => {
        $('#alert').alert('close');
        }, 4000) 
    </script>
</body>

</html>