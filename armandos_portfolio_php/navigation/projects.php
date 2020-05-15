<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Justas Sobutas">
        <meta name="description" content="Armandas greatest art and illustration projects">
        <meta name="keywords" content="illustations, art, paint, design, logos, projects, armanda, capaite" >

        <title>Armanda Cepaite | Portfolio</title>

        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;700&display=swap" rel="stylesheet">
        <link href="../assets/css/global.css" rel="stylesheet">
        <link href="../assets/css/main.css" rel="stylesheet">
        <link href="../assets/css/header.css" rel="stylesheet">

    </head>

    <body>
        <div class="wrapper">
            <?php

                include __DIR__ . '/../layout/layout_header.php';

            ?>

            <main>
                <div class="projects-cover-container">
                    <div id="project-cover-nida" class="project-cover-content">
                        <a href="../projects/nida.php">
                            <img class="project-cover-content__illustration" src="../assets/images/projects/nida/nida.jpg" alt="Illustration of summer house">
                            <div class = "project-cover-img__text">
                                <p class="project-cover-img__title">summertime</p>
                                <p class="project-cover-img__client-name">personal project</p>
                            </div>
                        </a>
                    </div>

                    <div id="project-cover-quarantine" class="project-cover-content">
                        <a href="../projects/quarantine.php">
                            <img class="project-cover-content__illustration" src="../assets/images/projects/quarantine/dvirkai.jpg" alt="Illustration of food deliveries during quarantine">

                            <div class="project-cover-img__text">
                                <p class="project-cover-img__title">Quarantine 2020</p>
                                <p class="project-cover-img__client-name">personal project</p>
                            </div>
                        </a>

                    </div>


                    <div id="project-cover-elections" class="project-cover-content">
                        <a href="../projects/elections.php">
                            <img class="project-cover-content__illustration" src="../assets/images/projects/president_elections_2019/nauseda.jpg" alt="Illustration of Lithuanian president">
                            <div class="project-cover-img__text">
                                <p class="project-cover-img__title">President election 2019</p>
                                <p class="project-cover-img__client-name">personal project</p>
                            </div>
                        </a>
                    </div>

                    <div id="project-cover-stickers" class="project-cover-content">
                        <a href="../projects/stickers-woman.php">
                        <img class="project-cover-content__illustration" src="../assets/images/projects/women_power/stickers1.jpg" alt="Illustration of women personalites">
                        <div class="project-cover-img__text">
                            <p class="project-cover-img__title">Women superpowers</p>
                            <p class="project-cover-img__client-name">personal project</p>
                        </div>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
