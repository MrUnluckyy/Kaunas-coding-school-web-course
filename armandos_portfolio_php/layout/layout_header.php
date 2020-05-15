<?php
    include __DIR__ . '/../assets/src/env.php';
?>

<header>
    <div class="header__main-logo-container">
        <a href="<?php echo $path . 'navigation/projects.php' ?>" >armanda capaite</a>
    </div>

    <nav>
        <ul class="nav__items nav__items--hiiden">
            <li><a href="<?php echo $path . 'navigation/projects.php' ?>">Projects</a></li>
            <li><a href="<?php echo $path . 'navigation/shop.php' ?>">Shop</a></li>
            <li><a href="<?php echo $path . 'navigation/about.php' ?>">About</a></li>
        </ul>
        <div class="nav-burger-menu">
            <img class="nav-burger-menu__icon" src="<?php echo $path . 'assets/images/icons/burger-menu.svg' ?>">
            <div class="nav-burger-menu__content">
                <ul>
                    <li><a href="<?php echo $path . 'navigation/projects.php' ?>">Projects</a></li>
                    <li><a href="<?php echo $path . 'navigation/shop.php' ?>">Shop</a></li>
                    <li><a href="<?php echo $path . 'navigation/about.php' ?>">About</a></li>
                </ul>
            </div>
        </div>
        <div class="nav__social-media-dropdown">
            <button class="nav__social-media-dropdown-btn">social</button>
            <div class="nav__social-media-dropdown-content">
                <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a href="https://www.linkedin.com/" target="_blank">LinkedIn</a>
                <a href="https://www.instagram.com/accounts/login/" target="_blank">Instagram</a>
            </div>
        </div>

    </nav>
</header>
