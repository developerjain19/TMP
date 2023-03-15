
<header class="header">
    <div class="header_inner">
        <div class="header_logo">
            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo.svg" alt="logo"></a>
        </div>
        <div class="header_right_content">
            <div class="header_top_content">
                <div class="header_top_left_info">
                    <div class="header_top_info">
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:<?= $this->email ?>"><?= $this->email ?></a>
                    </div>
                    <!-- <div class="header_top_info">
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?= $this->phone ?>"><?= $this->phone ?></a>
                    </div>
                    <div class="header_top_info">
                        <i class="fa fa-map-marker"></i>
                        <span><?= $this->address ?></span>
                    </div> -->
                </div>
                <div class="header_top_info_right">
                    <div class="social_icon">
                        <a href="<?= $this->fb ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="<?= $this->insta ?>"><i class="fa fa-instagram"></i></a>
                        <a href="<?= $this->youtube ?>"><i class="fa fa-youtube"></i></a>
                        <a href="<?= $this->linkedin ?>"><i class="fa fa-linkedin"></i></a>
                        <a href="<?= $this->telegram ?>"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="header_bottom_content">
                <div class="mainnav">
                    <ul class="main_menu">
                        <li class="menu-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="menu-item"><a href="<?= base_url() ?>about">About Us</a></li>
                        <li class="menu-item"><a href="<?= base_url() ?>mentors">Our Mentors</a></li>
                        <li class="menu-item"><a href="<?= base_url() ?>blogs">Our Blog</a></li>
                        <li class="menu-item"><a href="<?= base_url('initiatives') ?>">Our Initiatives</a></li>
                        <li class="menu-item"><a href="<?= base_url() ?>newsletter-pdf">Newslatter</a></li>
                        
                    </ul>
                </div>
                <div class="free_contact">
                    <a href="<?= base_url() ?>mentor-registration" class="btn"><span>RESIGTER AS MENTOR</span></a>
                </div>
                <button class="ma5menu__toggle" type="button">
                    <i class="ion-android-menu"></i>
                </button>
            </div>
        </div>
    </div>
</header>