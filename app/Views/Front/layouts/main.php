<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->renderSection('title') ?> | Unicolmayor © Campus Virtual</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607725121/favicon_pvtmxa.png" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php echo $this->renderSection('css') ?>
</head>

<body>
    <?php echo $this->include('Front/layouts/header') ?>
    <?php echo $this->renderSection('content') ?>
    <?php echo $this->include('Front/layouts/footer') ?>
    <?php echo $this->renderSection('js') ?>
</body>

</html>