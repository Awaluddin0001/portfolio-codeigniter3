<body>
    
<header class="section__header">
    <div class="container header">
        <div>
            <a href="<?= site_url('home') ?>">
            <img src="../../../ci3/assets/images/wh_awal_logo.png" alt="">
            </a>
        </div>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?= site_url('about') ?>" class="nav-link ">About</a></li>
                <?php if ($this->session->userdata('logged_in')) :?>
                    <li class="nav-item"><a href="<?= site_url('logout') ?>" class="nav-link btn">Logout</a></li>
                <?php else : ?>
                    <li class="nav-item"><a href="<?= site_url('login') ?>" class="nav-link btn">Login</a></li>
                <?php endif ; ?>
            </ul>
        </nav>
    </div>
</header>
