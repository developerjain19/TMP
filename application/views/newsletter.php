<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="page_header">
        <div class="page_header_content">
            <div class="container">
                <h2 class="heading">Our Newsletter</h2>
            </div>
        </div>
    </div>

    <section class="about_inner about_inner-1 team">
        <div class="container">

            <div class="row">


                <?php

                if ($newsletter) {
                    foreach ($newsletter as $row) {
                ?>
                        <div class="col-lg-6">
                            <div class="service_box" data-aos="fade-up">
                                <div class="hover_image">
                                    <img src="assets/images/service/h_s_1.png" alt="service">
                                </div>
                                <div class="service_inner">
                                    <div class="image">
                                        <img src="assets/images/service/s12.png" alt="service">
                                    </div>
                                    <div class="content">
                                        <h4><?= $row['title'] ?></h4>
                                        <a href="<?= base_url('uploads/newsletter') . $row['pdffile'] ?>" target="_blank" class="btn_service">Read More</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                <?php

                    }
                }
                ?>


            </div>
        </div>
    </section>



    <?php include 'includes/footer.php'; ?>
    </div>
    </div>
    <?php include 'includes/footer-link.php'; ?>
</body>

</html>