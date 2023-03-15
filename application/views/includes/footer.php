<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_flex">
                    <div class="power_newsletter_title">
                        <h4>Subscribe to newsletter</h4>
                    </div>
                    <div class="power_newsletter">
                        <form method="post" action="<?= base_url('Home/newsletter') ?>" class="form-checkin">
                            <input type="email" name="email" class="form-control" placeholder="E-mail Address*">
                            <button type="submit" class="newsletter_button"><i class="ion-ios-paperplane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer_above">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer_widget footer_widget_padding">
                        <div class="logo">
                            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/logo-footer.png" alt="Logo" width="250px"></a>
                        </div>
                        <p class="text-justify">We intend to connect you to the right mentor who might not know you but knows the hardships you are going through because that mentor himself/herself has treaded that path. That mentor who knows everything about the grind which is required to reach the destination</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer_widget footer_links">
                        <h4 class="widget_title">
                            Practice Area
                        </h4>
                        <div class="footer_nav">
                            <ul class="footer_menu">
                                <li class="menu-item"><a href="<?= base_url() ?>join-us">Join us as Member/Student Ambassador</a></li>
                                <li class="menu-item"><a href="<?= base_url() ?>mentor-registration">Mentors Registration</a></li>
                                <li class="menu-item"><a href="<?= base_url() ?>mentee-registration">Mentee Registration</a></li>
                                <?php
                                if ($this->session->has_userdata('login_user_id')) {
                                ?>
                                    <li class="menu-item"> <a href="<?= base_url('profile') ?>">My Profile</a></li>

                                <?php
                                } else {
                                ?>
                                    <li class="menu-item"><a href="<?= base_url() ?>mentee-login">Mentee Login</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="footer_widget footer_links">
                        <h4 class="widget_title">
                            Useful Links
                        </h4>
                        <div class="footer_nav">
                            <ul class="footer_menu">
                                <li class="menu-item"><a href="<?= base_url() ?>policy/privacy-policy">Privacy Policy</a></li>
                                <!-- <li class="menu-item"><a href="<?= base_url() ?>mentors">Shipping policy</a></li> -->
                                <li class="menu-item"><a href="<?= base_url() ?>policy/Return-Refund-Policy">Return & Refund Policy</a></li>
                                <li class="menu-item"><a href="<?= base_url() ?>policy/Terms-and-Conditions ">Terms and Conditions </a></li>
                                <li class="menu-item"><a href="<?= base_url() ?>contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">
                            Keep In Touch
                        </h4>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><span><?= $this->address ?></span></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><span><?= $this->email ?></span></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><span><?= $this->phone ?></span></li>
                            <!--<li><i class="fa fa-clock-o" aria-hidden="true"></i><span>Monday - Saturday (9.00am --->
                            <!--        9.00pm)</span></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_bottom_inner">
                <div class="copyright">
                    <p>&copy;<?= date('Y') ?> <a href="<?= base_url() ?>">THE MENTORSHIP PROJECT</a> All
                        rights reserved</p>
                </div>

                <div class="side_footer_social">
                    <ul class="bottom_social">

                        <li class="facebook"><a href="<?= $this->fb ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="facebook"><a href="<?= $this->insta ?>"><i class="fa fa-instagram"></i></a></li>
                        <li class="facebook"><a href="<?= $this->youtube ?>"><i class="fa fa-youtube"></i></a></li>
                        <li class="facebook"><a href="<?= $this->linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                        <li class="facebook"><a href="<?= $this->telegram ?>"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="totop">
                    <a href="#"><i class="ion-ios-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="slide_navi">