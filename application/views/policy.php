<?php include 'includes/header-link.php'; ?>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="page_header">
        <div class="page_header_content">
            <div class="container">
                <h2 class="heading"><?= str_replace('-',' ', $policy[0]['tag']); ?></h2>
            </div>
        </div>
    </div>

    <section class="blog blog_inner">
        <div class="container">
            <div class="row">

                        <div class="col-lg-12">
                            <article class="blog_post">
                               
                                <div class="post_content_part">
                                    <div class="post_content">
                                        <div class="post_header">
                                           
                                           
                                            <p><?= $policy[0]['policy']; ?></p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
            
            </div>
        </div>

    </section>


    <?php include 'includes/footer.php'; ?>
    </div>
    </div>
    <?php include 'includes/footer-link.php'; ?>
</body>

</html>