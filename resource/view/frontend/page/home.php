<?php ?>


<div class="img-container">
    <img class="img-fluid" src="<?= asset_url("assets/images/home_bg.jpeg") ?>"/>
</div>
<div class="logo">
    <img src="<?= asset_url("assets/images/classic-blog-logo.png") ?>">
</div>
<div class="container">
    <div class="row">
        <!--        <div class="col-12 col-md-2"></div>-->

        <?php for ($i = 0; $i < 6; $i++) { ?>
            <div class="col-12 col-md-6">
                <div class="post-text">
                    <div class="img-container">
                        <img src="<?= asset_url("assets/images/sample_post_image.jpg") ?>">
                    </div>
                    <div class="post-introduce">
                        <div class="post-stats">
                            <a href="#" class="category">Travel</a>
<!--                            <p class="stat">beautiful</p>-->
                        </div>
                        <h1><a href="post-sidebar.html" class="post-title big">Enjoy The Beautiful Sights</a></h1>
                        <p class="post-date">March 26, 2018</p>
                        <p class="body-text">
                            Fusce non odio dui. In hac habitasse platea dictumst. Aliquam erat volutpat maecenas
                            est risus aliquet eget ligula vel, condimentum semper ccumsan ipsum ac enim
                            porttitor ac venenatis.
                        </p>
                        <a href="post/<?=$i ?>" class="btn-read-more">Read More</a>
                    </div>

                </div>
            </div>
        <?php } ?>


    </div>
</div>
