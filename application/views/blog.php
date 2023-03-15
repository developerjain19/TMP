<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="page_header">
        <div class="page_header_content">
            <div class="container">
                <h2 class="heading">Our Blogs</h2>
            </div>
        </div>
    </div>

    <section class="blog blog_inner">
        <div class="container">
            <div class="row">

                <?php

                if ($blogs) {
                    foreach ($blogs as $row) {
                ?>
                        <div class="col-lg-4">
                            <article class="blog_post">
                                <div class="post_img lh-13">
                                    <a href="<?= base_url() ?>blog-details/<?= encryptId($row['blog_id']) . '/' . url_title($row['title']) ?>">
                                        <?php if ($row['image_type'] == '1') { ?>
                                            <iframe width="100%" height="250" src="<?= str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $row['video']); ?>"></iframe>
                                        <?php } else {
                                        ?>
                                            <img src="<?= setImage($row['image'], 'uploads/blogs/') ?>" alt="img" class="imgh">
                                        <?php }
                                        ?>
                                    </a>
                                </div>
                                <div class="post_content_part">
                                    <div class="post_content">
                                        <div class="post_header">
                                            <h6><?= convertDatedmyhis($row['created']) ?></h6>
                                            <h3 class="post_title">
                                                <a href="<?= base_url() ?>blog-details/<?= encryptId($row['blog_id']) . '/' . url_title($row['title']) ?>"><?php echo $row['title']; ?></a>
                                            </h3>
                                           
                                            <a href="<?= base_url() ?>blog-details/<?= encryptId($row['blog_id']) . '/' . url_title($row['title']) ?>" class="btn_service">Read More</a>
                                        </div>
                                    </div>

                                </div>
                            </article>
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