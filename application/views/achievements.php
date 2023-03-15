<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="page_header">
        <div class="page_header_content">
            <div class="container">
                <h2 class="heading">Success Stories & Achievement</h2>
            </div>
        </div>
    </div>

    <section class="about_inner about_inner-1 team">
        <div class="container">

            <div class="row">


                <?php

                if ($success) {
                    foreach ($success as $row) {
                ?>
                        <div class="col-lg-4">
                            <div class="about_inner_content">

                                <div class="about_image box-shadw">
                                    <img src="<?= setImage($row['image'], 'uploads/banner/') ?>" alt="TMP">
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