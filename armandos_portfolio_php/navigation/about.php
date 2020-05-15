<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Justas Sobutas">
        <meta name="description" content="Contact Armanda Cepaite for colaboration or questions regarding art or specific illustration">
        <meta name="keywords" content="illustations, art, paint, design, logos, projects, armanda, capaite" >

        <title>Armanda Cepaite | About</title>

        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;700&display=swap" rel="stylesheet">
        <link href="../assets/css/global.css" rel="stylesheet">
        <link href="../assets/css/about.css" rel="stylesheet">
        <link href="../assets/css/header.css" rel="stylesheet">
        <link href ="../assets/css/logo.css" rel="stylesheet">

    </head>

    <body>
        <div class="wrapper">

            <?php

                include __DIR__ . '/../layout/layout_header.php';

            ?>

        <main>
            <div class="main-wrapper">

                <div class="text-about-artist">
                    <div class="text-about-artist__header">
                        <?php include '../assets/images/logo.svg'; ?>
                    </div>

                    <div class="text-about-artist__paragraph">
                        <p>
                            Iis quis incididunt transferrem de proident tamen probant officia id cernantur
                            lorem iudicem, ne aut domesticarum. Ea an irure arbitror, aut e malis officia.
                            Est laboris familiaritatem de vidisse id quid, ab excepteur nam singulis est ex
                            in adipisicing iis qui o fore arbitror, nam quorum possumus, iudicem irure
                            incurreret est mentitum velit anim a duis. Proident quid eiusmod. Qui aut irure
                            aliquip, hic quis quamquam laboris. An ut amet consequat. Si mentitum
                            illustriora. Iis quis incididunt transferrem de proident tamen probant officia id cernantur
                            lorem iudicem, ne aut domesticarum. Ea an irure arbitror, aut e malis officia.
                            Est laboris familiaritatem de vidisse id quid, ab excepteur nam singulis est ex
                            in adipisicing iis qui o fore arbitror, nam quorum possumus, iudicem irure
                            incurreret est mentitum velit anim a duis. Proident quid eiusmod. Qui aut irure
                            aliquip, hic quis quamquam laboris. An ut amet consequat. Si mentitum
                            illustriora.
                        </p>
                    </div>
                    <!-- TODO: figure out how to place this in minimalistic way.

                    <div class="about-artist__achievements">
                        <div>
                            education:
                            <ul>
                                <li>University number 1</li>
                                <li>University number 2</li>
                                <li>University number 3</li>
                            </ul>
                        </div>

                        <div>
                            clients:
                            <ul>
                                <li>Super client 1</li>
                                <li>Super client 2</li>
                                <li>Super client 3</li>
                            </ul>
                        </div>

                        <div>
                            posts:
                            <ul>
                                <li>Amazing post 1</li>
                                <li>Amazing post 2</li>
                                <li>Amazing post 3</li>
                            </ul>
                        </div>
                    </div>
                    -->
                </div>

                <div id="contact-me-container__toggle-option" class="contact-me-container">
                    <?php require __DIR__ . '/../assets/src/app.php' ?>
                </div>

                <div id="thank-for-contact-me-submision">

                </div>
            </div>
        </main>
        </div>
    </body>
</html>
