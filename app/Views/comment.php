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

<body data-aos="fade-right" data-aos-duration="3000" class="" style="background: url('<?= base_url() ?>/img/body.jpeg');background-position: top; 
  background-repeat: repeat; 
  " width=100%>
   <?= view('components/nav') ?>
   
    <audio class="invisible" autoplay="true">
        <source src="" type="audio/mpeg">
        Browsermu tidak mendukung tag audio, upgrade donk!
    </audio>

    <div class=" md:mt-96 md:py-20">
       <h1 class="mx-auto text-center p-10 text-7xl playball text-white text-shadow bg-blue-200 bg-opacity-10 font-semibold"> Our Wishes</h1><hr>
    <div class="flex flex-wrap md:grid grid-cols-4 mx-auto p-5 gap-3 ">

        
        <?php foreach ($ucapan as $row) : ?>
            <div  data-aos="fade-left"data-aos-duration="1500"data-aos-delay="500" loading="lazy"class="transition-colors duration-200 transform hover:shadow-lg hover:bg-color-blue-200 hover:text-red-600 w-full px-8 py-4 bg-opacity-70 bg-gray-200 rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-light text-gray-600 dark:text-gray-400">
                    <?php
                                $originalDate = $row['created_date'] ;
                                $newDate = date('d F Y', strtotime($originalDate));
                                echo $newDate
                                ?>
    
                    
                    </span>
                    <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"><?= $row['kehadiran'] ?></a>
                </div>

                <div class="mt-2">
                    <a href="" class="text-xl font-bold text-gray-700 dark:text-white hover:text-red-600 dark:hover:text-gray-200 hover:underline"><?= $row['name'] ?></a>
                    <p class="mt-2 text-gray-600 dark:text-gray-300"><?= $row['message'] ?></p>
                    <!-- <a href=/ucapan/hapus/<?= $row["id"]; ?>>x</a> -->
                </div>

            </div>
        <?php endforeach; ?>
    </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>