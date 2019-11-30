<?php
//dump($post);
?>
<div class="container">
    <div>
        <div class="row">
            <div class="post-text text-center mt-4">

                <div class="post-introduce">

                    <h1><a href="#" class="post-title big"><?= $post['title'] ?></a></h1>
                    <p class="post-date">March 26, 2018</p>

                    <div class="img-container mb-5">
                        <img src="<?= asset_url("upload/post/" . $post['avatar']) ?>">
                    </div>
                    <div class="body-text-content text-left">
                        <?= $post['content'] ?>
                    </div>

                    <div class="post-stats text-right">
                        <a href="#" class="category">Travel</a>
                        <!--                            <p class="stat">beautiful</p>-->
                    </div>
                    <!--                    <a href="post/--><? //=$i ?><!--" class="btn-read-more">Read More</a>-->
                </div>

            </div>
        </div>
    </div>
</div>
