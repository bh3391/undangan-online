<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Undangan Pernikahan Gede Praja Mahardika dan Komang Anik Sugiani" />
    <meta name="keywords" content="Wajahplastik" />
    <meta name="author" content="I Gede Bhakti Pratama">
    <meta name="Application-name" content="Undangan Pernikahan Gede Praja Mahardika dan Komang Anik Sugiani">
    <link href="<?= base_url() ?>/favicon.ico" rel="icon" type="image/gif">

    <link href="<?= base_url() ?>/src/tailwind.css" rel="stylesheet">
    <link href="<?= base_url() ?>/src/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="<?= base_url() ?>/src/main.js" defer></script>
    <title>Praja & Anik</title>
</head>
<body data-aos="fade-right"data-aos-duration="3000"class="" style="background: url('<?=base_url()?>/img/body.jpeg');background-position: top; 
  background-repeat: no-repeat; 
  " width=100%>
    <?= view('components/welcome') ?>
    <?= view('components/placentime') ?>
    <?= view('components/savethedate') ?>
    <?= view('components/gallery') ?>
    <?= view('components/guestbook') ?>
    <?= view('components/footer') ?>
    
    <script  src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>