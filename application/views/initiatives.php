<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="page_header">
        <div class="page_header_content">
            <div class="container">
                <h2 class="heading">Our Workshop & Initiatives</h2>
            </div>
        </div>
    </div>


    <section class="about_inner about_inner-1 team">
        <div class="container">

            <?php
            if ($whatsnew != '') {
            ?>

                <div class="row">
                    <div class="col">
                        <img src="<?= setImage($whatsnew[0]['image'], 'uploads/new/') ?>" alt="about">
                    </div>
                </div>

            <?php
            }
            ?>

            <div class="row pd-50">
                <?php

                if ($initiatives) {
                    foreach ($initiatives as $row) {
                ?>
                        <div class="col-lg-4">
                            <div class="about_inner_content">
                                <a href="<?= base_url() ?>initiatives-details/<?= encryptId($row['id']) . '/' . url_title($row['title']) ?>">
                                    <div class="about_image box-shadw">
                                        <?php if ($row['image_type'] == '1') { ?>
                                            <iframe width="100%" height="350" src="<?= str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $row['video']); ?>"></iframe>
                                        <?php } else {
                                        ?>
                                            <img src="<?= setImage($row['image'], 'uploads/initiatives/') ?>" alt="img">
                                        <?php }
                                        ?>
                                        <div class="about_content">
                                            <h6 class="initiatives-des"><?= $row['title'] ?></h6>
                                            <i class="ion-ios-book-outline"></i>
                                        </div>

                                    </div>
                                </a>
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