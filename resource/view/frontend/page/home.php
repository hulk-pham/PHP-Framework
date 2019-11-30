<?php
//http://preview.themeforest.net/item/ritsu-responsive-blog-html-template/full_screen_preview/21655607?_ga=2.125113678.517307659.1575102881-802855279.1564930121
//dump($posts);
?>


<div class="img-container">
    <img class="img-fluid" src="<?= asset_url("assets/images/home_bg.jpeg") ?>"/>
</div>
<div class="logo">
    <img src="<?= asset_url("assets/images/classic-blog-logo.png") ?>">
</div>
<div class="container">
    <div class="row">
        <!--        <div class="col-12 col-md-2"></div>-->

        <?php if (isset($posts)) foreach ($posts as $post) { ?>
            <div class="col-12 col-md-6">
                <div class="post-text">
                    <div class="img-container img-avatar-title">
                        <img src="<?= asset_url("upload/post/".$post['avatar']) ?>">
                    </div>
                    <div class="post-introduce">
                        <div class="post-stats">
                            <a href="#" class="category">Travel</a>
                            <!--                            <p class="stat">beautiful</p>-->
                        </div>
                        <h1 class="post-title-brief">
                            <a href="/post/<?= $post['id'] ?>" class="post-title big"><?=$post['title'] ?></a>
                        </h1>
                        <p class="post-date">March 26, 2018</p>
                        <p class="body-text short-brief">
                           <?=$post['brief'] ?>
                        </p>
                        <a href="/post/<?= $post['id'] ?>" class="btn-read-more">Read More</a>
                    </div>

                </div>
            </div>
        <?php } ?>


    </div>
</div>
