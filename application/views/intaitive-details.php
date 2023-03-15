<?php include 'includes/header-link.php'; ?>
<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<body>

    <?php include 'includes/header.php'; ?>
    <div class="main_wrapper">
        <div class="blog_inner blog_inner_padding">
            <div class="container">
                <div class="blog_details">
                    <div class="post_img">
                        <?php if ($details[0]['image_type'] == '1') { ?>
                            <iframe width="100%" height="450" src="<?= str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $details[0]['video']); ?>"></iframe>
                        <?php } else {
                        ?>
                            <img src="<?= setImage($details[0]['image'], 'uploads/initiatives/') ?>" alt="img" class="iniimg">
                        <?php }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="blog_details_inner">
                                <div class="post_content">
                                    <div class="post_header">
                                        <h6><?= convertDatedmyhis($details[0]['created']) ?></h6>
                                        <h3 class="post_title"><?= $details[0]['title']; ?></h3>

                                       <h6>Click here To Participate -  <a href="<?= $details[0]['form_link']; ?>" target="_blank"><?= $details[0]['form_link']; ?></a></h6>
                                    </div>
                                    <div class="fulltext">
                                        <p>
                                            <?= $details[0]['blog_body'] ?>
                                        </p>
                                    </div>

                                    <div class="post_footer">
                                        <div class="post_share">
                                            <ul class="share_list">
                                                <li>Share:</li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?= $actual_link ?>&t=<?= $details[0]['title']; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">Facebook</a></li>

                                                <li><a href="https://twitter.com/share?url=<?= $actual_link ?>&text=<?= $details[0]['title']; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">Twitter</a></li>


                                                <li><a href="whatsapp://send?text=<?= $actual_link ?>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">Whatsapp</a></li>


                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $actual_link ?>&t=<?= $details[0]['title']; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin">Linkedin</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="sidebar">
                                <div id="recent-posts-1" class="widget widget_recent_posts sideblog">
                                    <h4 class="widget_title">
                                        Recent Workshop & Initiatives

                                    </h4>
                                    <div class="sidebar_recent_posts">
                                        <ul class="recent_post_list">
                                            <?php

                                            if ($initiatives) {
                                                foreach ($initiatives as $row) {
                                            ?>
                                                    <li class="recent_post_item">
                                                        <div class="recent_post_image">

                                                            <img src="<?= setImage($row['image'], 'uploads/initiatives/') ?>" alt="img" class="primary_img">
                                                        </div>
                                                        <div class="recent_post_content">
                                                            <h5><a href="<?= base_url() ?>initiatives-details/<?= encryptId($row['id']) . '/' . url_title($row['title']) ?>"><?php echo substr($row['title'], 0, '30'); ?></a></h5>
                                                            <h6><?= convertDatedmyhis($row['created']) ?></h6>
                                                        </div>
                                                    </li>
                                            <?php

                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
    </div>
    <?php include 'includes/footer-link.php'; ?>
</body>

</html>