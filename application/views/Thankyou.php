<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="main_wrapper">


        <section class="team team_inner service_bg pt-60">
            <div class="service_another_bg">
                <div class="container">

                    <div class="row">
                        <?php if ($msg = $this->session->userdata('msg')) :
                        ?>
                            <div class="col-lg-12">
                                <div class="team_block">

                                    <div class="team_content">
                                        <h4>
                                            <?= $msg; ?>
                                        </h4>

                                    </div>
                                </div>
                            </div>

                        <?php $this->session->unset_userdata('msg');
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>






        <?php include 'includes/footer.php'; ?>

        <div class="slide_navi">
            <div class="side_footer_social">
                <ul class="bottom_social">
                    <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                    <li class="instagram"><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'includes/footer-link.php'; ?>
</body>

</html>